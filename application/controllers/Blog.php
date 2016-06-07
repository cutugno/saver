<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {

	public function index($cat,$start=0) {
		
		$this->load->model('news_model');
			
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
				
		// menu active (v. anche switch sotto)
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
			
		// specifiche pagina per differenziare notizie e rassegna stampa
		switch ($cat) {
			case 1:
				$data['titolo']="Notizie";
				$data['sottotitolo']="Nullam eget tortor purus, id molestie sapien. In hac habitasse platea dictumst. Donec aliquet tellus enim, a tincidunt nulla.";
				$data['notizieactive']=" class='active'";				
				break;
			case 2:
				
				$data['titolo']="Rassegna Stampa";
				$data['sottotitolo']="Nullam eget tortor purus, id molestie sapien. In hac habitasse platea dictumst. Donec aliquet tellus enim, a tincidunt nulla.";
				$data['rassegnaactive']=" class='active'";
				$data['url_single']="rassegna-stampa/titolo/1";
				break;
		}		
		
		// loop news
		$news=$this->news_model->getNewsbyCat($cat,$start);
		$news_count=count($news);
		foreach ($news as $key=>$val) {
			// aggiusto data per visualizzazione
			$news[$key]->data_ins=convertDateTime($news[$key]->data_ins);
			// aggiungo eventuali prima immagine a news
			$allegati=$this->news_model->getNewsFirstImage($val->id);
			var_dump ($allegati);
			$news[$key]->allegati=$allegati ? $allegati : "";
		}
		$data['news']=$news;
		
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
		$config["num_links"] = round( $config["total_rows"] / $config["per_page"] );
		
		$this->pagination->initialize($config);
		$data['pages'] = $this->pagination->create_links();
		
		// widget categorie (non serve più probabilmente)
		$data['widget_categorie']=$this->load->view('widget/categorie',$data,TRUE);
		
		// widget più letti (passare risultato query 5 post più letti)
		$data['widget_letti']=$this->load->view('widget/letti',$data,TRUE);

				
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('blog',$data);
		$this->load->view('common/body-footer');
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
	public function single($cat,$id) {
		
		if (empty($id)) redirect('blog');
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";

		// menu active e varie
		switch ($cat) {
			case 1:
				$data['titolo']="Notizie";
				$data['bc_link']="notizie";
				$data['notizieactive']=" class='active'";
				break;
			case 2:
				$data['titolo']="Rassegna stampa";
				$data['bc_link']="rassegna-stampa";
				$data['rassegnaactive']=" class='active'";
				break;
		}		
			
		// widget categorie (non serve probabilmente)
		$data['widget_categorie']=$this->load->view('widget/categorie',$data,TRUE);
		
		// widget più letti (passare risultato query 5 post più letti)
		$data['widget_letti']=$this->load->view('widget/letti',$data,TRUE);
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('blog-single',$data);
		$this->load->view('common/body-footer');
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
	public function category($categoria) { // non serve per ora
		/*
		
		if (empty($categoria)) redirect('blog');
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		
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
		$data['widget_letti']=$this->load->view('widget/letti',$data,TRUE);		
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('blog-category',$data);
		$this->load->view('common/body-footer');
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
		*/
	}
	
}
