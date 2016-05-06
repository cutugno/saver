<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {
		
	public function __construct(){
		
		parent::__construct();		
		$this->output->enable_profiler(TRUE);  

	}
	
	public function index() {
		
		$this->load->model('affiliati_model');
		$data['affiliati']=$this->affiliati_model->getAffiliati();
		
		$this->load->view('affiliati',$data);
	}	
			
}

?>
