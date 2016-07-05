<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	
	<section class="call_to_action">
          <div class="container">
               <h3>SAVER IMBARCAZIONI</h3>
               <h4>Produttori di barche dal 1986</h4>
               <a class="btn btn-primary btn-lg" href="<?php echo site_url('azienda'); ?>">Scopri di più</a>
          </div>     
     </section>
     <section class="features_teasers_wrapper">
          <div class="container">
               <div class="row">
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="<?php echo base_url('images/teaser-1.png'); ?>">
                         <h3>LA NOSTRA ESPERIENZA</h3>
                         <p>La SAVER, con sede a Piraino (ME) nasce nel 1986 e da <strong>oltre trent’anni progetta</strong> e costruisce imbarcazioni in vtr ed ora anche gommoni. I nostri prodotti sono realizzati in modo artigianale e tutta la nostra gamma rientra nella categoria “natanti”.</p>
                    </div>
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="<?php echo base_url('images/teaser-2.png'); ?>">
                         <h3>I NOSTRI SPAZI</h3>
                         <p>La nostra struttura produttiva si sviluppa su di <strong>un’area di oltre 6.000 mq.</strong> cui si aggiunge un’altra struttura di 4.000 mq ubicata a Gioiosa Marea, ove si provvede alla stampa delle parti in vetroresina.</p>
                    </div>
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="<?php echo base_url('images/teaser-3.png'); ?>">
                         <h3>IL NOSTRO METODO</h3>
                         <p>All’interno del Cantiere tutte le imbarcazioni (in vetroresina o gommoni) vengono costruite in modo curato, ognuna da un apposito reparto che ne segue lo sviluppo. Vengono usate <strong>vetroresine di alta qualità</strong> ed accessoristica di primario livello.</p>
                    </div>
               </div>
          </div>
     </section>
     <section class="portfolio_teasers_wrapper">
          <div class="container">
               <h2 class="section_header fancy centered">Alcuni dei nostri prodotti</h2>
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
                                   <h3><a href="portfolio_item.html"><?php echo $val->modello; ?></a></h3>
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