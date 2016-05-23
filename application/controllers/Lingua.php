<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lingua extends CI_Controller {
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function index() {
		
		if (null!=$this->input->post('lang')) {
			$this->session->lang=$this->input->post('lang');
		}
	}
		
}
