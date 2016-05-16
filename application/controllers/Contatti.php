<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatti extends CI_Controller {

	public function index() {
		
		// menu active
		$data['blogactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		$data['contattiactive']=" class='active'";
		
		// mappa
		$data['mapid']="map";
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-map',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('rete');
		$this->load->view('common/body-footer');
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('scripts/contatti');
		$this->load->view('common/close');
		
	}
	
}
