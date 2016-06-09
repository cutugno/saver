<?php defined('BASEPATH') OR exit('No direct script access allowed');

	function convertDateTime ($date,$cleanseconds=1) {
		
		$expldate=explode(" ",$date);
		$date=$expldate[0];
		if ($cleanseconds==1){
			$expldate[1]=substr($expldate[1],0,-3);
		}
		$date=explode("-",$date);
		$date=$date[2]."-".$date[1]."-".$date[0];		
		
		return $date." ".$expldate[1];
		
	}
	
	function convertDateTimeFooter ($date) {
		
		$CI =& get_instance();

		$hdate=human_to_unix($date);
		$giorno=date("d",$hdate);
		$mese=date("M",$hdate);
				
		$shortlang=substr($CI->session->lang,0,2);
		if ($shortlang=="it") $mese=traduciMese($mese);
		
		return array("giorno"=>$giorno, "mese"=>$mese);
		
	}
	
	function traduciMese ($mese) {
		
		switch ($mese){ 
			case "Jan":
				$tmese="Gen";
				break;
			case "May":
				$tmese="Mag";
				break;
			case "Jun":
				$tmese="Giu";
				break;
			case "Jul":
				$tmese="Lug";
				break;
			case "Aug":
				$tmese="Ago";
				break;
			case "Sep":
				$tmese="Set";
				break;
			case "Oct":
				$tmese="Ott";
				break;
			case "Dec":
				$tmese="Dic";
				break;
			default:
				$tmese=$mese;
				break;
		}
		
		return $tmese;
	
	}	
				

?>