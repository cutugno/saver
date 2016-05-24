<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {

	public function index($cat) {
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
				
		// menu active (v. anche switch sotto)
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		
		//sostituire questo con query selezione notizie per $cat
		switch ($cat) {
			case 1:
				$data['titolo']="Notizie";
				$data['notizieactive']=" class='active'";
				$data['url_single']="notizie/titolo/1"; // qui andrà messo il link per ogni singola notizia, costruito in base alla categoria
				break;
			case 2:
				$data['titolo']="Rassegna Stampa";
				$data['rassegnaactive']=" class='active'";
				$data['url_single']="rassegna-stampa/titolo/1";
				break;
		}		
		
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
