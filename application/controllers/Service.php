<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function index() {
		
		if (SERVICE==FALSE) redirect(base_url());
		echo "service";
	}
		
}
