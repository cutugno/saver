<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {
	
	public function index($cat,$start=0) {
		
		// ultime news (va in tutti i controller)
		$data['newsfooter']=$this->custom->getNewsFooter(2);
				
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
				
		// menu active (v. anche switch sotto)
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['prodottiactive']=$data['reteactive']=$data['contattiactive']="";
			
		// info categoria con titolo tradotto
		$categoria=$this->news_model->getCategoriaNbyId($cat);
		$lang=substr($this->session->lang,0,2);
		$titolo=json_decode($categoria->titolo);
		$categoria->titolo=$titolo->$lang;
		switch ($cat) {
			case 1:
				$categoria->sottotitolo="";
				$data['notizieactive']=" class='active'";				
				break;
			case 2:				
				$categoria->sottotitolo="";
				$data['rassegnaactive']=" class='active'";
				break;
		}		
		$data['categoria']=$categoria;
		$data['cat']=$cat;
			
		// elenco news
		$news=$this->news_model->getNewsbyCat($cat,$start);
		if (null!=$news) {
			$news_count=count($news);
			foreach ($news as $key=>$val) {
				// prendo titolo e testo solo della lingua attuale
				$titolo=json_decode($val->titolo);
				$news[$key]->titolo=$titolo->$lang;
				$testo=json_decode($val->testo);
				$news[$key]->testo=$testo->$lang;
				// aggiusto data per visualizzazione
				$news[$key]->data_ins=convertDateTime($news[$key]->data_ins);				
				// aggiungo eventuali prima immagine a news
				$allegati=$this->news_model->getNewsFirstImage($val->id);
				$news[$key]->allegati=$allegati ? $allegati : "";
			}
		}
		$data['news']=$news ? $news : "";
		
		// paginazione
		$this->load->library('pagination');
		$config['base_url'] = base_url($this->uri->segment(1));
		$config["total_rows"] = $this->news_model->countAllNewsbyCat($cat); 
		$config['per_page'] = NEWSPERPAGE;
		$config['full_tag_open'] = '<ul class="pagination pagination-centered">';
		$config['full_tag_close'] = '</ul>';
		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config["num_links"] = round($config["total_rows"] / $config["per_page"]);
		
		$this->pagination->initialize($config);
		$data['pages'] = $this->pagination->create_links();
		
		// widget categorie (non serve più probabilmente)
		$data['widget_categorie']=$this->load->view('widget/categorie',$data,TRUE);
		
		// widget più letti (passare risultato query 5 post più letti)
		$data['newspiuletti']=$this->custom->getMostReadNews($cat,5);
		$data['widget_letti']=$this->load->view('widget/letti',$data,TRUE);

				
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('blog',$data);
		$this->load->view('common/body-footer',$data);
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
	public function single($cat,$id,$titolo) {
			
		if (empty($id)) redirect('blog');
				
		$lang=substr($this->session->lang,0,2);
				
		// ultime news (va in tutti i controller)
		$data['newsfooter']=$this->custom->getNewsFooter(2);

		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['prodottiactive']=$data['reteactive']=$data['contattiactive']="";

		// info categoria
		$categoria=$this->news_model->getCategoriaNbyId($cat);
		$titolocat=json_decode($categoria->titolo);
		$categoria->titolo=$titolocat->$lang;
		
		switch ($cat) {
			case 1:
				$data['titolocat']="Notizie";
				$data['notizieactive']=" class='active'";
				break;
			case 2:
				$data['titolocat']="Rassegna stampa";
				$data['rassegnaactive']=" class='active'";
				break;
		}	
		$data['categoria']=$categoria;
		$data['cat']=$cat;
		
		// dati singolo articolo
		$single=$this->news_model->getNewsbyId($id);
		if (empty($single)) redirect ('home'); // se l'id news non c'è in db
		if ($titolo!=$single->slug) redirect(strtolower(url_title($data['titolocat'])."/".$single->slug."/".$id)); // se slug è sbagliato redirect su url corretto
		// prendo titolo e testo solo della lingua attuale
		$titolo=json_decode($single->titolo);
		$single->titolo=$titolo->$lang;
		$testo=json_decode($single->testo);
		$single->testo=$testo->$lang;
		// aggiungo allegati
		$allegati=$this->news_model->getNewsAllegati($id);
		$single->allegati=$allegati ? $allegati : "";
		// formatto data
		$single->data_ins=convertDateTime($single->data_ins);
		$data['single'] = $single;	
		
		// aggiorno contatore letture
		$this->news_model->addNewsLettura($id);	
		
		// widget categorie (non serve probabilmente)
		$data['widget_categorie']=$this->load->view('widget/categorie',$data,TRUE);
		
		
		// widget più letti (passare risultato query 5 post più letti)
		$data['newspiuletti']=$this->custom->getMostReadNews($cat,5);
		$data['widget_letti']=$this->load->view('widget/letti',$data,TRUE);
				
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('blog-single',$data);
		$this->load->view('common/body-footer',$data);
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('scripts/blog-single');
		$this->load->view('common/close');
		
	}
	
	/* non serve per ora
	 
	public function category($categoria) {
		
		if (empty($categoria)) redirect('blog');
		
		// ultime news (va in tutti i controller)
		$data['newsfooter']=$this->custom->getNewsFooter(2);
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['prodottiactive']=$data['reteactive']=$data['contattiactive']="";
		
		$data['blogactive']=" class='active'";
			
		// widget blog active
		$data['sidebarblogactive']=$data['newsactive']=$data['pressactive']=""; 
		switch ($categoria) {
			case "news":
				$data['title']="Notizie";
				$data['newsactive']=" class='active'";
				break;
			case "rassegna-stampa":
				$data['title']="Rassegna stampa";
				$data['pressactive']=" class='active'";
				break;
		}
		
		// widget categorie
		$data['widget_categorie']=$this->load->view('widget/categorie',$data,TRUE);
		
		// widget più letti (passare risultato query 5 post più letti)
		$data['newspiuletti']=$this->custom->getMostReadNews($cat,5);
		$data['widget_letti']=$this->load->view('widget/letti',$data,TRUE);		
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('blog-category',$data);
		$this->load->view('common/body-footer',$data);
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
	*/
	
}
