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
							->order_by('data_ins','DESC')
							->limit(NEWSPERPAGE,$start)
							->get('news');
						
			return $query->result();
			
		}
		
		public function getNewsbyId($id) {
			
			$query=$this->db->get_where('news', array('id' => $id));		
			return $query->row();
			
		}
		
		public function addNewsLettura($id) {
			
			$query=$this->db->set('letture', 'letture+1', FALSE)
							->where('id', $id)
							->update('news');
			return $this->db->affected_rows();
			
		}
		
		public function getNewsAllegati($idnews) {
			
			$query=$this->db->select('*')
						->where('id_news',$idnews)
						->order_by('tipologia')
						->get('allegati');
			return $query->result();
			
		}	
		
		public function getNewsFooter($limit=2) {
				
			$query=$this->db->select('news.*,categorieN.categoria')
						->join('categorieN', 'categorieN.id=news.id_categoria')
						->where('id_categoria',1)
						->order_by('data_ins','DESC')
						->limit($limit)
						->get('news');
						
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
		
		public function getMostReadNews($idcat,$limit=5) {
			
			$query=$this->db->select('news.*,categorieN.categoria')
							->join('categorieN', 'categorieN.id=news.id_categoria')
							->where('news.id_categoria',$idcat)
							->order_by('news.letture','DESC')
							->limit($limit)
							//->get_compiled_select('news');
							->get('news');
			//return $query;
			return $query->result();
			
		}
	}
	
