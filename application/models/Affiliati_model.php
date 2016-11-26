<?php

	class Affiliati_model extends CI_Model {
		
		public function __construct () {
			$this->load->database();
		}
		
		public function getAffiliati () {
		
			$query=$this->db->where('active',1)
							->get('affiliati');
							//->get_compiled_select('affiliati'); return $query;
			return $query->result();

		}
	
	}
	
