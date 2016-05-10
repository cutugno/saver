<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imbarcazioni extends CI_Controller {

	public function index($tipo) {
		
		if (empty($tipo)) redirect(base_url());
		
		// menu active
		$data['blogactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		$data['imbarcazioniactive']=" active";
		
		// dati tipo imbarcazioni
		switch ($tipo) {
			case "linea-open":
				$data['title']="Linea Open";
				break;
			case "linea-walk-around":
				$data['title']="Linea Walk Around";
				break;
			case "linea-fisher":
				$data['title']="Linea Fisher";
				break;
			case "linea-cabin":
				$data['title']="Linea Cabin";
				break;
			case "linea-gommoni-mg":
				$data['title']="Linea Gommoni MG";
				break;
			default:
				show_404();
				break;
		}				
		
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
		
		echo $id;
		
	}
	
}
