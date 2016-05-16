<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	
	<section class="hgroup">
          <div class="container">
               <h1><?php echo $title; ?></h1>
               <h2>Breve descrizione della categoria imbarcazioni</h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li><a href="#">Imbarcazioni</a> </li>
                    <li class="active"><?php echo $title; ?></li>
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
               <div class="row isotope_portfolio_container">
                    <div class="cat_travel col-xs-12 col-sm-6 col-md-4 col-lg-4">
                         <div class="portfolio_item"> 
							  <a href="<?php echo site_url('imbarcazioni/linea-open/modello/1'); ?>" data-path-hover="M 180,190 0,158 0,0 180,0 z">
								  <figure style="background-image:url(<?php echo base_url('images/portfolio/t5.jpg'); ?>)">
									   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
											<path d="M 180,0 0,0 0,0 180,0 z"/>
									   </svg>
									   <figcaption>
											<p>Descrizione del modello con parole chiave</p>
											<div class="view_button">Vedi</div>
									   </figcaption>
								  </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3>Lorem Ipsum</h3>
                              </div>
                         </div>
                    </div>
                    <div class="cat_people col-xs-12 col-sm-6 col-md-4 col-lg-4">
                         <div class="portfolio_item"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(<?php echo base_url('images/portfolio/p4.jpg'); ?>)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Descrizione del modello con parole chiave</p>
                                        <div class="view_button">Vedi</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              </div>
                         </div>
                    </div>
                    <div class="cat_artists col-xs-12 col-sm-6 col-md-4 col-lg-4">
                         <div class="portfolio_item"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(<?php echo base_url('images/portfolio/a3.jpg'); ?>)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Descrizione del modello con parole chiave</p>
                                        <div class="view_button">Vedi</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              </div>
                         </div>
                    </div>
                    <div class="cat_people col-xs-12 col-sm-6 col-md-4 col-lg-4">
                         <div class="portfolio_item"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(<?php echo base_url('images/portfolio/p3.jpg'); ?>)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Descrizione del modello con parole chiave</p>
                                        <div class="view_button">Vedi</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              </div>
                         </div>
                    </div>
                    <div class="cat_travel col-xs-12 col-sm-6 col-md-4 col-lg-4">
                         <div class="portfolio_item"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(<?php echo base_url('images/portfolio/t3.jpg'); ?>)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Descrizione del modello con parole chiave</p>
                                        <div class="view_button">Vedi</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              </div>
                         </div>
                    </div>
                    <div class="cat_people col-xs-12 col-sm-6 col-md-4 col-lg-4">
                         <div class="portfolio_item"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(<?php echo base_url('images/portfolio/p1.jpg'); ?>)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Descrizione del modello con parole chiave</p>
                                        <div class="view_button">Vedi</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              </div>
                         </div>
                    </div>
                    <div class="cat_poetic col-xs-12 col-sm-6 col-md-4 col-lg-4">
                         <div class="portfolio_item"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(<?php echo base_url('images/portfolio/b3.jpg'); ?>)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Descrizione del modello con parole chiave</p>
                                        <div class="view_button">Vedi</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              </div>
                         </div>
                    </div>
                    <div class="cat_artists col-xs-12 col-sm-6 col-md-4 col-lg-4">
                         <div class="portfolio_item"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(<?php echo base_url('images/portfolio/a4.jpg'); ?>)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Descrizione del modello con parole chiave</p>
                                        <div class="view_button">Vedi</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              </div>
                         </div>
                    </div>
                    <div class="cat_travel col-xs-12 col-sm-6 col-md-4 col-lg-4">
                         <div class="portfolio_item"> <a href="portfolio_item.html" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                              <figure style="background-image:url(<?php echo base_url('images/portfolio/t4.jpg'); ?>)">
                                   <svg viewBox="0 0 180 320" preserveAspectRatio="none">
                                        <path d="M 180,0 0,0 0,0 180,0 z"/>
                                   </svg>
                                   <figcaption>
                                        <p>Descrizione del modello con parole chiave</p>
                                        <div class="view_button">Vedi</div>
                                   </figcaption>
                              </figure>
                              </a>
                              <div class="portfolio_description">
                                   <h3><a href="portfolio_item.html">Lorem Ipsum</a></h3>
                              </div>
                         </div>
                    </div>                    
               </div>
          </div>
     </section>