<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Custom {


    public function __construct() {

    }

	public function getNewsFooter($limit) {
		
		$CI =& get_instance();
		
		$lang=substr($CI->session->lang,0,2);
		
		// ultime news 
		$news=$CI->news_model->getNewsFooter($limit);
		if (null!=$news) {
			foreach ($news as $key=>$val) {
				// prendo titolo e testo solo della lingua attuale
				$titolo=json_decode($val->titolo);
				$news[$key]->titolo=$titolo->$lang;
				$testo=json_decode($val->testo);
				$news[$key]->testo=$testo->$lang;
				// aggiusto data per visualizzazione
				$news[$key]->data_ins=convertDateTimeFooter($news[$key]->data_ins);
				// aggiungo eventuali prima immagine a news
				$allegati=$CI->news_model->getNewsFirstImage($val->id);
				$news[$key]->allegati=$allegati ? $allegati : "";
				// aggiungo categoria news
			}
		}
		
		return $news;
		
	}
	
	public function getMostReadNews($limit) {
		
		$CI =& get_instance();
		
		$lang=substr($CI->session->lang,0,2);
		
		// news più lette
		$news=$CI->news_model->getMostReadNews($limit);
		
		if (null!=$news) {
			foreach ($news as $key=>$val) {
				// prendo titolo e testo solo della lingua attuale
				$titolo=json_decode($val->titolo);
				$news[$key]->titolo=$titolo->$lang;
				$testo=json_decode($val->testo);
				$news[$key]->testo=$testo->$lang;
				// aggiusto data per visualizzazione
				$news[$key]->data_ins=convertDateTimeFooter($news[$key]->data_ins);
				// aggiungo eventuali prima immagine a news
				$allegati=$CI->news_model->getNewsFirstImage($val->id);
				$news[$key]->allegati=$allegati ? $allegati : "";
				// aggiungo categoria news
			}
		}

		return $news;
		
	}
	
	public function sendMail($post) {
		
		$CI =& get_instance();
		$CI->load->library('email');
		$CI->config->load('email');
					
		$message=$post['messaggio'];		
		$from = $post['email'];
		$from_name = $post['nome'];
		$to=$CI->config->item('contactdest');
		$subject=$CI->config->item('contactsubject');
		
		$CI->email->from($from, $from_name);
		$CI->email->to($to);
		$CI->email->subject($subject." - ".$post['oggetto']);
		$CI->email->message($message);
		
		if ($CI->email->send()){
			return true;
		}
		return false;
		
	}
	
	
}
