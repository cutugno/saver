<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

        public function __construct() {
			parent::__construct();
			
			// abilito/disabilito profiler a seconda del valore di PROFILER nel config
			$this->output->enable_profiler(PROFILER);
			
			// controllo se posso bypassare manutenzione
			if (SERVICE==TRUE){
				$check=$this->checkService();
				if (!$check) redirect('service');
			}
			
        }
        
        protected function checkService () {
			
			/* controllo se mio ip è presente in whitelist, dunque abilitato alla navigazione */
			$check=FALSE;

			$myip=$_SERVER['REMOTE_ADDR'];
			$whitelist=explode(" ",WHITELIST); 
			foreach ($whitelist as $val){
				$iscidr=strpos($val,"/");
				if ($iscidr===TRUE){
					// $val è una mask cidr
					if ($this->ipCheck($myip,$val)) {
						$check=TRUE;
						break;
					}
				}else{
					// $val è un ip normale
					if ($myip==$val){
						$check=TRUE;
						break;
					}
				}						
			}
			
			return $check;
			
		}
                
        private function ipCheck ($ip, $cidr) {
			
			/* controllo se ip è all'interno della mask cidr */
			
			list ($net, $mask) = explode ("/", $cidr);
			
			$ip_net = ip2long ($net);
			$ip_mask = ~((1 << (32 - $mask)) - 1);

			$ip_ip = ip2long ($ip);

			$ip_ip_net = $ip_ip & $ip_mask;

			return ($ip_ip_net == $ip_net);
			
	    }
	    	   
}

?>
