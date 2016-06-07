<?php

	class Affiliati_model extends CI_Model {
		
		public function __construct () {
			$this->load->database();
		}
		
		public function getAffiliati () {
		
			$query=$this->db->get('affiliati');
			return $query->result();

		}
	
	}
	
