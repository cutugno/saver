<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Custom {


    public function __construct() {

    }

	public function getNewsFooter($limit) {
		
		$CI =& get_instance();
		
		// ultime news (va in tutti i controller)
		$news=$CI->news_model->getNewsFooter($limit);
		foreach ($news as $key=>$val) {
			// aggiusto data per visualizzazione
			$news[$key]->data_ins=convertDateTimeFooter($news[$key]->data_ins);
			// aggiungo eventuali prima immagine a news
			$allegati=$CI->news_model->getNewsFirstImage($val->id);
			$news[$key]->allegati=$allegati ? $allegati : "";
			// aggiungo categoria news
		}
		
		return $news;
		
	}
	
	
}
