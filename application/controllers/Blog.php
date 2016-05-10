<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index() {
		
		// menu active
		$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		$data['newsactive']=" class='active'";
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('blog');
		$this->load->view('common/body-footer');
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
}
