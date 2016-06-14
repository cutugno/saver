<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	
	<section class="hgroup">
          <div class="container">
               <h1>Linea <?php echo $cat->categoria; ?></h1>
               <h2>Breve descrizione della categoria prodotti</h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li class="active">prodotti > Linea <?php echo $cat->categoria; ?></li>
               </ul>
          </div>
     </section>
     <section>
		  <!--
          <div class="container">
               <ul class="portfolio_filters">
                    <li><a href="#" data-filter="*">show all</a></li>
                    <li><a href="#" data-filter=".cat_artists">artists</a></li>
                    <li><a href="#" data-filter=".cat_people">people</a></li>
                    <li><a href="#" data-filter=".cat_travel">travel</a></li>
                    <li><a href="#" data-filter=".cat_poetic">poetic</a></li>
               </ul>
          </div>
          -->
     </section>
     <section class="portfolio_strict">
          <div class="container">
			  		<?php // var_dump ($prodotti); ?>
               <div class="row isotope_portfolio_container">				   
				   <?php foreach ($prodotti as $key=>$val) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                         <div class="portfolio_item"> 
							  <a href="<?php echo site_url(uri_string()."/".strtolower(url_title($val->modello))."/".$val->id); ?>" data-path-hover="M 180,190 0,158 0,0 180,0 z">
								  <figure style="background-image:url(<?php echo base_url($val->img); ?>)">
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