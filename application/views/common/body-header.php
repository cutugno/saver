<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<header>
     <div class="container">
          <div class="navbar navbar-default" role="navigation">
               <div class="navbar-header">
				   <a class="navbar-brand" href="<?php echo base_url(); ?>"> 
					<img src="<?php echo base_url('images/logo_saver.png'); ?>" alt="Logo Saver"> 
				   </a>
				   <a class="btn btn-navbar btn-default navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="nb_left pull-left"> <span class="fa fa-reorder"></span></span> <span class="nb_right pull-right">menu</span> </a>
			   </div>
               <div class="collapse navbar-collapse">
                    <ul class="nav pull-right navbar-nav">
                         <li<?php echo $notizieactive; ?>><a href="<?php echo site_url('notizie'); ?>"><?php echo $this->lang->line('menu_1'); ?></a></li>
                         <li<?php echo $aziendaactive; ?>><a href="<?php echo site_url('azienda'); ?>"><?php echo $this->lang->line('menu_2'); ?></a></li>
                          <li class="dropdown<?php echo $prodottiactive; ?>"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $this->lang->line('menu_3'); ?><span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                   <li><a href="<?php echo site_url('prodotti/linea-open'); ?>"><?php echo $this->lang->line('menu_31'); ?></a></li>
                                   <li><a href="<?php echo site_url('prodotti/linea-walk-around'); ?>"><?php echo $this->lang->line('menu_32'); ?></a></li>
                                   <li><a href="<?php echo site_url('prodotti/linea-fisher'); ?>"><?php echo $this->lang->line('menu_33'); ?></a></li>
                                   <li><a href="<?php echo site_url('prodotti/linea-cabin'); ?>"><?php echo $this->lang->line('menu_34'); ?></a></li>
                                   <li><a href="<?php echo site_url('prodotti/linea-gommoni-mg'); ?>"><?php echo $this->lang->line('menu_35'); ?></a></li>
                              </ul>
                         </li>
                         <li<?php echo $reteactive; ?>><a href="<?php echo site_url('rete-vendita'); ?>"><?php echo $this->lang->line('menu_4'); ?></a></li>
                         <li<?php echo $rassegnaactive; ?>><a href="<?php echo site_url('rassegna-stampa'); ?>"><?php echo $this->lang->line('menu_5'); ?></a></li>
                         <li<?php echo $contattiactive; ?>><a href="<?php echo site_url('contatti'); ?>"><?php echo $this->lang->line('menu_6'); ?></a></li>                                              
                    </ul>
               </div>
          </div>
          <div id="social_media_wrapper"> 
			  <a href="<?php echo LINKFB; ?>" target="_blank"><i class="fa fa-facebook"></i></a> 
			  <a href="https://www.youtube.com/channel/UCHaG-ZN3ZMe5sP0s-6QTPiw" target="_blank"><i class="fa fa-youtube"></i></a> 
			  <a href="mailto:saverimbarcazioni@tiscali.it" target="_blank"><i class="fa fa-envelope"></i></a> </div>
          <div id="sign"><small><?php echo $lang_vers; ?></small>
          </div>
     </div>
</header>
