<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatti extends MY_Controller {

	public function index() {
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		$data['contattiactive']=" class='active'";
		
		// mappa
		$data['mapcontclass']="map-contatti";
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-map',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('contatti');
		$this->load->view('common/body-footer');
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('scripts/contatti');
		$this->load->view('common/close');
		
	}
	
}
