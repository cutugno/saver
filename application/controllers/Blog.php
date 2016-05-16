<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index() {
		
		// menu active
		$data['blogactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		$data['blogactive']=" class='active'";
		
		// widget categorie active
		$data['sidebarblogactive']=$data['newsactive']=$data['pressactive']="";
		$data['sidebarblogactive']=" class='active'";
		
		// widget categorie
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
	
	public function category($categoria) {
		
		if (empty($categoria)) redirect('blog');
		
		// menu active
		$data['blogactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		$data['blogactive']=" class='active'";
			
		// widget blog active
		$data['sidebarblogactive']=$data['newsactive']=$data['pressactive']=""; 
		switch ($categoria) {
			case "news":
				$data['title']="News";
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
		
	}
	
	public function single($id) {
		
		if (empty($id)) redirect('blog');
		
		// menu active
		$data['blogactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		$data['blogactive']=" class='active'";
		
		// widget blog active
		$data['sidebarblogactive']=$data['newsactive']=$data['pressactive']=""; 
		
		// widget categorie
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
	
}
