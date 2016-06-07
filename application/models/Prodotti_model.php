<?php

	class Prodotti_model extends CI_Model {
		
		public function __construct() {
			$this->load->database();
		}
		
		public function getProdotti() {
		
			$query=$this->db->get('prodotti');
			return $query->result();
		
		}
		
		public function getProdottibyCat($cat) {
			
			$query=$this->db->select('*')
							->where('id_categoria',$cat)
							->get('prodotti');
						
			return $query->result();
			
		}
		
		public function getCategoriaPbyId($id) {
			
			$query=$this->db->get_where('categorieP',array('id'=>$id));
			return $query->row();
			
		}
	
	}
	
