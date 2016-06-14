<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<section class="hgroup">
          <div class="container">
               <h1><?php echo $prodotto->modello; ?></h1>
               <h2><?php echo $prodotto->sottotitolo; ?></h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li><a href="<?php echo site_url($this->uri->segment(1)."/".$this->uri->segment(2)); ?>">Prodotti > Linea <?php echo $prodotto->categoria; ?></a> </li>
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
						</article>
                    </div>
               </div>
               <div class="row caratteristiche" style="margin-top:20px">
				  <div class="col-xs-12">
					  <h2 class="section_header">Caratteristiche
						<select id="car_lingua" class="form-control input-sm pull-right">
							<option value="car_it">Italiano</option>
							<option value="car_en">English</option>
							<option value="car_fr">Francais</option>
							<option value="car_es">Espanol</option>
						</select>
					  </h2> 
				  </div>
				  <div class="col-xs-12">
					  <!--ita -->
					  <div class="row carcont" id="car_it">		
						  <div class="col-md-4">						  
							  <p class="lead">Caratteristiche tecniche</p>
								 <?php foreach ($prodotto->car_it->ct as $key=>$val) : ?>
									<?php echo "<strong>$key</strong>".": ".$val."<br>"; ?>
								<?php endforeach ?>
							  </p>
						  </div>
						  <div class="col-md-4">
							  <p class="lead">Dotazione di serie</p>
								 <?php 
									echo $prodotto->car_it->dot;
								 ?> 
							  </p>
						  </div>
						  <div class="col-md-4">
							  <p class="lead">Dotazione extra</p>
								 <?php 
									echo $prodotto->car_it->extra;
								 ?>
							  </p>
						  </div>
					   </div>
					   <!--eng -->
					   <div class="row carcont" id="car_en" style="display:none">		
						  <div class="col-md-4">						  
							  <p class="lead">Caratteristiche tecniche</p>
								 <?php foreach ($prodotto->car_en->ct as $key=>$val) : ?>
									<?php echo "<strong>$key</strong>".": ".$val."<br>"; ?>
								<?php endforeach ?>
							  </p>
						  </div>
						  <div class="col-md-4">
							  <p class="lead">Dotazione di serie</p>
								 <?php 
									echo $prodotto->car_en->dot;
								 ?> 
							  </p>
						  </div>
						  <div class="col-md-4">
							  <p class="lead">Dotazione extra</p>
								 <?php 
									echo $prodotto->car_en->extra;
								 ?>
							  </p>
						  </div>
					   </div>
					   <!-- fra -->
					   <div class="row carcont" id="car_fr" style="display:none">		
						  <div class="col-md-4">						  
							  <p class="lead">Caratteristiche tecniche</p>
								 <?php foreach ($prodotto->car_fr->ct as $key=>$val) : ?>
									<?php echo "<strong>$key</strong>".": ".$val."<br>"; ?>
								<?php endforeach ?>
							  </p>
						  </div>
						  <div class="col-md-4">
							  <p class="lead">Dotazione di serie</p>
								 <?php 
									echo $prodotto->car_fr->dot;
								 ?> 
							  </p>
						  </div>
						  <div class="col-md-4">
							  <p class="lead">Dotazione extra</p>
								 <?php 
									echo $prodotto->car_fr->extra;
								 ?>
							  </p>
						  </div>
					   </div>
					   <!-- spa -->
					   <div class="row carcont" id="car_es" style="display:none">		
						  <div class="col-md-4">						  
							  <p class="lead">Caratteristiche tecniche</p>
								 <?php foreach ($prodotto->car_es->ct as $key=>$val) : ?>
									<?php echo "<strong>$key</strong>".": ".$val."<br>"; ?>
								<?php endforeach ?>
							  </p>
						  </div>
						  <div class="col-md-4">
							  <p class="lead">Dotazione di serie</p>
								 <?php 
									echo $prodotto->car_es->dot;
								 ?> 
							  </p>
						  </div>
						  <div class="col-md-4">
							  <p class="lead">Dotazione extra</p>
								 <?php 
									echo $prodotto->car_es->extra;
								 ?>
							  </p>
						  </div>
					   </div>
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
                    <li class="previous"><a href="<?php echo site_url($this->uri->segment(1)."/".$this->uri->segment(2)); ?>">← Torna a Linea <?php echo $prodotto->categoria; ?></a></li>
               </ul>
          </div>
     </section>
