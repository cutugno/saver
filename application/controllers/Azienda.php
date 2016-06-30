<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Azienda extends MY_Controller {

	public function index() {
		
		// ultime news (va in tutti i controller)
		$data['newsfooter']=$this->custom->getNewsFooter(2);
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['prodottiactive']=$data['reteactive']=$data['contattiactive']="";
		$data['aziendaactive']=" class='active'";
		
		// slider
		$data['slider_img']=["carouselazienda_01.jpg","carouselazienda_02.jpg","carouselazienda_03.jpg","carouselazienda_04.jpg","carouselazienda_05.jpg","carouselazienda_06.jpg"];
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-slider',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('azienda');
		$this->load->view('common/body-footer',$data);
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
}
