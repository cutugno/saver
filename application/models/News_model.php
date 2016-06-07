<?php

	class News_model extends CI_Model {
		
		public function __construct () {
			$this->load->database();
		}
		
		public function countAllNewsbyCat($cat) {
			
			$query=$this->db->select('*')
							->where('id_categoria',$cat)
							->get('news');
			
			return $query->num_rows();
			
		}
		
		public function getNewsbyCat($cat,$start) {
			
			$query=$this->db->select('*')
							->where('id_categoria',$cat)
							->limit(NEWSPERPAGE,$start)
							->get('news');
						
			return $query->result();
			
		}
		
		public function getNewsAllegati($idnews) {
			
			$query=$this->db->get_where('allegati', array('id_news' => $idnews));		
			return $query->result();
			
		}	
		
		public function getNewsFirstImage($idnews) { // tipologia allegati == 1
			
			$query=$this->db->select('*')
						->where('id_news',$idnews)
						->where('tipologia',1)
						->limit(1)
						->get('allegati');
			return $query->row();
			
		}	
	}
	
