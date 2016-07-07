<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	
	<section class="hgroup">
          <div class="container">
               <h1>Linea <?php echo $categoria->categoria; ?></h1>
               <h2><?php echo $categoria->sottotitolo; ?></h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li class="active"><?php echo $this->lang->line('prodotti_1'); ?><?php echo $categoria->categoria; ?></li>
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
							  <a href="<?php echo site_url("prodotti/linea-".strtolower(url_title($categoria->categoria))."/".strtolower(url_title($val->modello))."/".$val->id); ?>" data-path-hover="M 180,190 0,158 0,0 180,0 z">
								  <figure style="background-image:url(<?php echo base_url("images/prodotti/".$val->img); ?>)">
									   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
											<path d="M 180,0 0,0 0,0 180,0 z"/>
									   </svg>
									   <figcaption>
											<p><?php echo $val->sottotitolo; ?></p>
											<div class="view_button"><?php echo $this->lang->line('prodotti_2'); ?></div>
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
