<?php

	class Affiliati_model extends CI_Model {
		
		public function __construct () {
			$this->load->database();
		}
		
		public function getAffiliati () {
		
			$query=$this->db->get('affiliati');
			
			if ($query->num_rows()>0){
				return $query->result();

			}
			return FALSE;
		
		}
	
	}
	
