<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index() {
		
		// menu lingua
        $data['lang_vers']=($this->session->lang=="italian") ? "<a href=\"#\" id=\"c_lan\" lang=\"english\">English Version</a>" : "<a href=\"#\" id=\"c_lan\" lang=\"italian\">Versione Italiana</a>";
		
		// menu active
		$data['notizieactive']=$data['rassegnaactive']=$data['aziendaactive']=$data['imbarcazioniactive']=$data['reteactive']=$data['contattiactive']="";
		
		// slider
		$data['sliderloop']="
			   <li class=\"item\" style=\"background-image: url(images/slider-1.jpg)\">
				 <!--
                    <div class=\"container\">
                         <div class=\"carousel-caption\">
                              <h1>a <strong>flexible</strong> theme<br>
                                   you can <strong>trust</strong> &amp; <strong>build upon</strong>!</h1>
                              <p class=\"lead skincolored\">Re<strong>start</strong> is based on <strong>good typography</strong> and <strong>large photography</strong>, serving as a foundation for your creative projects. Feel free to browse its templates and discover its features.</p>
                              <span class=\"round_badge\"><strong><i class=\"fa fa-twitter\"></i></strong><strong>V3</strong></span> </div>
                    </div>
                  -->
               </li>
               <li class=\"item\" style=\"background-image: url(images/slider-2.jpg)\">
                  <!--
                    <div class=\"container\">
                         <div class=\"carousel-caption\">
                              <h1>makes <strong>real use</strong><br>
                                   of the power of <strong>{LESS}</strong> syntax!</h1>
                              <p class=\"lead skincolored\">Restart was built with heavy use of {less} technology, making the life of the web developer easier!</p>
                         </div>
                    </div>
                  -->
               </li>
               <li class=\"item\" style=\"background-image: url(images/slider-3.jpg)\">
                  <!--
                    <div class=\"container\">
                         <div class=\"carousel-caption\">
                              <h1 class=\"skincolored\"><strong>subtle</strong> animations<br>
                                   &amp; a <strong>fresh</strong> collapsing <strong>header effect</strong></h1>
                              <p class=\"lead\">if you are looking for <a href=\"services.html\"><strong>a bold approach</strong></a> you will love the header effect,<br>
                                   but even if you like <a href=\"page_alternative.html\"><strong>a more conservative feel</strong></a>, you can always try the boxed alternative!</p>
                         </div>
                    </div>
                  -->
               </li>
        ";       
		
		$this->load->view('common/head');
		$this->load->view('common/body-header',$data);
		$this->load->view('common/body-slider',$data);
		$this->load->view('common/body-main-start');
		$this->load->view('home');
		$this->load->view('common/body-footer');
		$this->load->view('common/body-main-close');
		$this->load->view('common/scripts');
		$this->load->view('common/close');
		
	}
	
	public function cookie () {
		
		echo "cookie policy";
		
	}
	
}
