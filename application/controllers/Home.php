<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model('prodotti_model');
	} 

	public function index() {
		
		// imbarcazioni random
		$prodotti=$this->prodotti_model->getProdottiRandom(3);
		$data['prodotti']=$prodotti;
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		
		// slider
		$data['slider_img']=["images/slider-1.jpg","images/slider-2.jpg","images/slider-3.jpg"];
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-slider',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('home');
		$this->load->view('common/body-footer');
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
	public function cookie () {
		
		echo "cookie policy";
		
	}
	
}
