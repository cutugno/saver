<?php defined('BASEPATH') OR exit('No direct script access allowed');

	function convertDateTime ($date,$cleanseconds=1,$direction=1,$sep=" ") {
		
		$expldate=explode(" ",$date);
		$date=$expldate[0];
		if ($cleanseconds==1){
			$expldate[1]=substr($expldate[1],0,-3);
		}
		$date=explode("-",$date);
		$date=$date[2]."-".$date[1]."-".$date[0];		
		
		return $date." ".$expldate[1];
		
	}

?>