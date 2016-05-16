<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<header>
     <div class="container">
          <div class="navbar navbar-default" role="navigation">
               <div class="navbar-header"><a class="navbar-brand" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url('images/restart_logo.png'); ?>" alt="optional logo" height="90" width="90"> <span class="logo_title">{re}<strong>start</strong></span> <span class="logo_subtitle">a multipurpose template</span> </a><a class="btn btn-navbar btn-default navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="nb_left pull-left"> <span class="fa fa-reorder"></span></span> <span class="nb_right pull-right">menu</span> </a></div>
               <div class="collapse navbar-collapse">
                    <ul class="nav pull-right navbar-nav">
                         <li<?php echo $blogactive; ?>><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
                         <li<?php echo $aziendaactive; ?>><a href="<?php echo site_url('azienda'); ?>">Azienda</a></li>
                          <li class="dropdown<?php echo $imbarcazioniactive; ?>"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Imbarcazioni<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                   <li><a href="<?php echo site_url('imbarcazioni/linea-open'); ?>">Linea Open</a></li>
                                   <li><a href="<?php echo site_url('imbarcazioni/linea-walk-around'); ?>">Linea Walk Around</a></li>
                                   <li><a href="<?php echo site_url('imbarcazioni/linea-fisher'); ?>">Linea Fisher</a></li>
                                   <li><a href="<?php echo site_url('imbarcazioni/linea-cabin'); ?>">Linea Cabin</a></li>
                                   <li><a href="<?php echo site_url('imbarcazioni/linea-gommoni-mg'); ?>">Linea Gommoni MG</a></li>
                              </ul>
                         </li>
                         <li<?php echo $reteactive; ?>><a href="<?php echo site_url('rete-vendita'); ?>">Rete Vendita</a></li>
                         <li<?php echo $contattiactive; ?>><a href="<?php echo site_url('contatti'); ?>">Contatti</a></li>                                              
                    </ul>
               </div>
          </div>
          <div id="social_media_wrapper"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-envelope"></i></a> </div>
          <div id="sign">
			<div class="flags" id="ita_flag"></div>
			<div class="flags" id="eng_flag"></div>
          </div>
     </div>
</header>