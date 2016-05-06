<?php

	class Prodotti_model extends CI_Model {
		
		public function __construct () {
			$this->load->database();
		}
		
		public function getProdotti () {
		
			$query=$this->db->get('prodotti');
			return $query->result();
		
		}
	
	}
	
