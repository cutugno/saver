<?php

	class Prodotti_model extends CI_Model {
		
		public function __construct() {
			$this->load->database();
		}
		
		public function getProdotti() {
		
			$query=$this->db->get('prodotti');
			return $query->result();
		
		}
		
		public function getProdottiHome($limit=3) {
			
			$query=$this->db->select('prodotti.*,categorieP.categoria')
						->join('categorieP','categorieP.id=prodotti.id_categoria')
						->order_by('id','RANDOM')
						->limit($limit)
						->get('prodotti');
			
			return $query->result();
		}
		
		public function getProdottibyCat($cat) {
			
			$query=$this->db->select('*')
							->where('id_categoria',$cat)
							->order_by('ordine','ASC')
							->get('prodotti');
						
			return $query->result();
			
		}
		
		public function getProdottobyId($id) {
			
			$query=$this->db->select('prodotti.*,categorieP.categoria')
							->join('categorieP','categorieP.id=prodotti.id_categoria')
							->where('prodotti.id',$id)
							->get('prodotti');
						
			return $query->row();
			
		}
		
		public function getMediaProdottobyId($id) {
			
			$query=$this->db->select('*')
				->where('id_prodotto',$id)
				->order_by('tipologia desc')
				->get('media');
				
			return $query->result();
			
		}
		
		public function getCategoriaPbyId($id) {
			
			$query=$this->db->get_where('categorieP',array('id'=>$id));
			return $query->row();
			
		}
	
	}
	
