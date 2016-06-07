<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<section class="hgroup">
          <div class="container">
               <h1><?php echo $prodotto->modello; ?></h1>
               <h2><?php echo $prodotto->sottotitolo; ?></h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li><a href="<?php echo site_url($this->uri->segment(1)."/".$this->uri->segment(2)); ?>">Imbarcazioni > Linea <?php echo $prodotto->categoria; ?></a> </li>
                    <li class="active"><?php echo $prodotto->modello; ?></li>
               </ul>
          </div>
     </section>
     <section>
		 <?php // var_dump ($prodotto); ?>
		 <?php // var_dump ($media); ?>
          <div class="container imbarcazione">
               <div class="row">
                    <div class="col-sm-8 col-md-8">
						<div class="row">
							<div class="col-xs-12 carousel" id="carousel1">
							  <?php foreach ($media as $key=>$val) : ?>
								  <?php if ($val->tipologia==2) : ?>
								  <div class="item-video" data-hash="<?php echo $key; ?>">
									  <div class="owl-video-wrapper">
										<div class="owl-video-play-icon"></div>
										<div class="owl-video-tn owl-lazy" data-src="<?php echo $val->url; ?>" style="opacity: 1; background-image: url('<?php echo $val->url_tn; ?>');"></div>
										<a class="owl-video" href="<?php echo $val->url; ?>"></a>
									  </div>						  
								  </div>
								  <?php else: ?>								  	
								  <div data-hash="<?php echo $key; ?>"><img src="<?php echo base_url($val->url); ?>" alt=""></div>
								  <?php endif ?>
							  <?php endforeach ?>	
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								  <div id="carousel2">	
									  <?php foreach ($media as $key=>$val) : ?>
									  <div><a href="#<?php echo $key; ?>"><img src="<?php echo $val->tipologia==1 ? base_url($val->url_tn) : base_url('images/video.jpg'); ?>" alt=""></a></div>				  
									 <?php endforeach ?>			  					 
								  </div>		
							</div>
						</div>	
											 							  
                    </div>
                    <div class="col-sm-4 col-md-4">
                         <article class="portfolio_details">
						
                              <h2 class="section_header">Descrizione</h2>
                              <p><?php echo $prodotto->descr; ?></p>
                              <br>
                              <br>
                              <div>
								  <h2 class="section_header">Caratteristiche
									<select id="car_lingua" class="form-control input-sm pull-right">
										<option value="car_it">Italiano</option>
										<option value="car_en">English</option>
										<option value="car_fr">Francais</option>
										<option value="car_es">Espanol</option>
									</select>
								  </h2> 
								  <!--ita -->
								  <div class="carcont" id="car_it">								  
									  <p class="lead">Caratteristiche tecniche</p>
										 <?php foreach ($prodotto->car_it->ct as $key=>$val) : ?>
											<?php echo "<strong>$key</strong>".": ".$val."<br>"; ?>
										<?php endforeach ?>
									  </p><br>
									  <p class="lead">Dotazione di serie</p>
										 <?php 
											echo $prodotto->car_it->dot;
										 ?> 
									  </p><br>
									  <p class="lead">Dotazione extra</p>
										 <?php 
											echo $prodotto->car_it->extra;
										 ?>
									  </p>
								  </div>
								  <!--eng -->
								  <div class="carcont"  id="car_en" style="display:none">								  
									  <p class="lead">Caratteristiche tecniche</p>
										 <?php foreach ($prodotto->car_en->ct as $key=>$val) : ?>
											<?php echo "<strong>$key</strong>".": ".$val."<br>"; ?>
										<?php endforeach ?>
									  </p><br>
									  <p class="lead">Dotazione di serie</p>
										 <?php 
											echo $prodotto->car_en->dot;
										 ?> 
									  </p><br>
									  <p class="lead">Dotazione extra</p>
										 <?php 
											echo $prodotto->car_en->extra;
										 ?>
									  </p>
								  </div>
								  <!--
                                  <p><strong>Date:</strong> November 2013</p>
								  <p><strong>Client:</strong> Plethora Inc.</p>
								  <p><strong>Category:</strong> Design</p>
								  <p><strong>Place:</strong> Europe</p>
								  <p><strong>Rating:</strong><span class="rating r5"></span></p>
								  -->
                              </div>
                              <br>
                              <br>
						</article>
                    </div>
               </div>
               <div class="row areasensitive hidden-xs">
					<div class="col-xs-12">
						<h2 class="section_header">Area sensitive (v. /var/www/html/map)</h2>
					</div>
					<div class="col-sm-8 col-md-8">
						<p>immagine sensitive</p>
					</div>
					<div class="col-sm-4 col-md-4">
						<p>immagine particolare sensitive</p>
					</div>
               </div>
          </div>     
     </section>
     <section>
          <div class="container">
               <ul class="pager">
                    <li class="previous disabled"><a href="#">← Modello precedente</a></li>
                    <li class="next disabled"><a href="#">Modello successivo →</a></li>
               </ul>
          </div>
     </section>