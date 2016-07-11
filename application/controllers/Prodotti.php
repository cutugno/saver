<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodotti extends MY_Controller {
	
	public function index($cat) {		
		
		if (empty($cat)) redirect(base_url());
		
		$lang=substr($this->session->lang,0,2);
		
		// ultime news (va in tutti i controller)
		$data['newsfooter']=$this->custom->getNewsFooter(2);
		
		// categoria
		$categoria=$this->prodotti_model->getCategoriaPbyId($cat);
		$sottotitolo=json_decode($categoria->sottotitolo);
		$categoria->sottotitolo=$sottotitolo->$lang;
		$data['categoria']=$categoria;
		
		// slider
		$data['slider_img']=[$data['categoria']->img];
		
		$lang=substr($this->session->lang,0,2);
		
		// elenco prodotti
		$prodotti=$this->prodotti_model->getProdottibyCat($cat);
		// gestione sottotitolo per lingua
		foreach ($prodotti as $key=>$val) {
			$sottotitolo=json_decode($val->sottotitolo);
			$prodotti[$key]->sottotitolo=$sottotitolo->$lang;
		}
		$data['prodotti']=$prodotti;
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['prodottiactive']=$data['reteactive']=$data['contattiactive']="";
		$data['prodottiactive']=" active";
						
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-slider',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('prodotti',$data);
		$this->load->view('common/body-footer',$data);
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
	public function single($id) {
				
		// ultime news (va in tutti i controller)
		$data['newsfooter']=$this->custom->getNewsFooter(2);
		
		// dati prodotto
		$prodotto=$this->prodotti_model->getProdottobyId($id);
		if (empty($prodotto)) redirect('home');
		// controllo slug categoria e modello corretto
		$cat_slug="linea-".strtolower(url_title($prodotto->categoria));
		$prod_slug=strtolower(url_title($prodotto->modello));
		if (($this->uri->segment(2)!=$cat_slug) || ($this->uri->segment(3)!=$prod_slug)) redirect('prodotti/'.$cat_slug.'/'.$prod_slug.'/'.$id);		
		
		$lang=substr($this->session->lang,0,2);
		
		// prendo sottotitolo solo della lingua attuale $lang
		$prodotto->sottotitolo=json_decode($prodotto->sottotitolo);
		$prodotto->sottotitolo=$prodotto->sottotitolo->$lang;
		// prendo descr solo della lingua attuale $lang
		$prodotto->descr=json_decode($prodotto->descr);		
		$prodotto->descr=$prodotto->descr->$lang;
		// caratteristiche
		$prodotto->car_it=json_decode($prodotto->car_it);
		$prodotto->car_en=json_decode($prodotto->car_en);
		$prodotto->car_fr=json_decode($prodotto->car_fr);
		$prodotto->car_es=json_decode($prodotto->car_es);
		
		$data['prodotto']=$prodotto;
		
		// dati media prodotto
		$media=$this->prodotti_model->getMediaProdottobyId($id);
		shuffle($media);
		$data['media']=$media;		
		
		// dati particolari prodotto
		$data['particolari']=$this->prodotti_model->getParticolariProdottoById($id);
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
        
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['prodottiactive']=$data['reteactive']=$data['contattiactive']="";
		$data['prodottiactive']=" active";
		
		// dati imbarcazione
		$data['title']="Modello qualsiasi";
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('prodotti-single',$data);
		$this->load->view('common/body-footer',$data);
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('scripts/prodotti-single');
		$this->load->view('common/close');
		
	}
	
}
