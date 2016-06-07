<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imbarcazioni extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('prodotti_model');
	}

	public function index($cat) {
		
		if (empty($cat)) redirect(base_url());
		
		// categoria
		$data['cat']=$this->prodotti_model->getCategoriaPbyId($cat);
		
		// loop imbarcazioni
		$prodotti=$this->prodotti_model->getProdottibyCat($cat);
		$data['prodotti']=$prodotti;
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		$data['imbarcazioniactive']=" active";
		
		
		
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('imbarcazioni',$data);
		$this->load->view('common/body-footer');
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
	public function single($id) {
		
		if (empty($id)) redirect('imbarcazioni');
		
		// dati prodotto
		$prodotto=$this->prodotti_model->getProdottobyId($id);
		$data['prodotto']=$prodotto;
		
		// dati media prodotto
		$media=$this->prodotti_model->getMediaProdottobyId($id);
		$data['media']=$media;		
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
        
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		$data['imbarcazioniactive']=" active";
		
		// dati imbarcazione
		$data['title']="Modello qualsiasi";
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('imbarcazioni-single',$data);
		$this->load->view('common/body-footer');
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('scripts/imbarcazioni-single');
		$this->load->view('common/close');
		
	}
	
}
