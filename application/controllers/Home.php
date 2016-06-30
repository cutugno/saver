<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function index() {
		
		$lang=substr($this->session->lang,0,2);
		
		// prodotti random
		$prodotti=$this->prodotti_model->getProdottiHome(3);
		// gestione sottotitolo per lingua
		foreach ($prodotti as $key=>$val) {
			$sottotitolo=json_decode($val->sottotitolo);
			$prodotti[$key]->sottotitolo=$sottotitolo->$lang;
		}
		$data['prodotti']=$prodotti;
		
		// ultime news (va in tutti i controller)
		$data['newsfooter']=$this->custom->getNewsFooter(2);
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['prodottiactive']=$data['reteactive']=$data['contattiactive']="";
		
		// slider
		$data['slider_img']=["carouselhome_01.jpg","carouselhome_02.jpg","carouselhome_03.jpg","carouselhome_04.jpg","carouselhome_05.jpg","carouselhome_06.jpg","carouselhome_07.jpg","carouselhome_08.jpg","carouselhome_09.jpg","carouselhome_10.jpg","carouselhome_11.jpg","carouselhome_12.jpg"];
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-slider',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('home');
		$this->load->view('common/body-footer',$data);
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
	public function cookie () {
		
		echo "cookie policy";
		
	}
	
}
