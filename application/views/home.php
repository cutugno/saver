<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	
	<section class="call_to_action">
          <div class="container">
               <h3>SAVER IMBARCAZIONI</h3>
               <h4><?php echo $this->lang->line('home_1'); ?></h4>
               <a class="btn btn-primary btn-lg" href="<?php echo site_url('azienda'); ?>"><?php echo $this->lang->line('home_2'); ?></a>
          </div>     
     </section>
     <section class="features_teasers_wrapper">
          <div class="container">
               <div class="row">
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="<?php echo base_url('images/teaser-1.png'); ?>">
                         <h3><?php echo $this->lang->line('home_3'); ?></h3>
                         <p><?php echo $this->lang->line('home_4'); ?></p>
                    </div>
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="<?php echo base_url('images/teaser-2.png'); ?>">
                         <h3><?php echo $this->lang->line('home_5'); ?></h3>
                         <p><?php echo $this->lang->line('home_6'); ?></p>
                    </div>
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="<?php echo base_url('images/teaser-3.png'); ?>">
                         <h3><?php echo $this->lang->line('home_7'); ?></h3>
                         <p><?php echo $this->lang->line('home_8'); ?></p>
                    </div>
               </div>
          </div>
     </section>
     <section class="portfolio_teasers_wrapper">
          <div class="container">
               <h2 class="section_header fancy centered"><?php echo $this->lang->line('home_9'); ?></h2>
               <div class="portfolio_strict row">
				   <?php // var_dump ($prodotti); ?>
				   <?php foreach ($prodotti as $key=>$val) : ?>
                    <div class="col-sm-4">						
                         <div class="portfolio_item wow animated flipInX"> 
							  <a href="<?php echo site_url('prodotti/linea-'.strtolower($val->categoria).'/'.strtolower(url_title($val->modello)).'/'.$val->id); ?>" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(<?php echo base_url('images/prodotti/'.$val->img); ?>)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p><?php echo $val->sottotitolo; ?></p>
                                        <div class="view_button">Vedi</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><?php echo $val->modello; ?></h3>
                              </div>
                         </div>                         
                    </div>
                    <?php endforeach ?>                    
               </div>
          </div>     
     </section>
     <!--
     <section class="clients_section wow animated fadeInUp">
          <div class="container">
               <h2 class="section_header elegant centered">I nostri partner<small>Professionisti che collaborano con noi</small></h2>
               <div class="clients_list"> 
				   <a href="#"><img src="<?php echo base_url('images/partner-1.jpg'); ?>" alt="client"></a> 
				   <a href="#"><img src="<?php echo base_url('images/partner-2.jpg'); ?>" alt="client"></a> 
				   <a href="#"><img src="<?php echo base_url('images/partner-3.jpg'); ?>" alt="client"></a> 
				   <a href="#"><img src="<?php echo base_url('images/partner-4.jpg'); ?>" alt="client"></a> 
				   <a href="#"><img src="<?php echo base_url('images/partner-5.jpg'); ?>" alt="client"></a> 
			   </div>
          </div>     
     </section>
	-->