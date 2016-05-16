<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<section class="hgroup">
          <div class="container">
               <h1><?php echo $title; ?></h1>
               <h2>Sottotitolo</h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li><a href="<?php echo site_url('imbarcazioni'); ?>">Imbarcazioni</a> </li>
                    <li><a href="<?php echo site_url('imbarcazioni/linea-open'); ?>">Linea Open</a> </li>
                    <li class="active"><?php echo $title; ?></li>
               </ul>
          </div>
     </section>
     <section>
          <div class="container imbarcazione">
               <div class="row">
                    <div class="col-sm-8 col-md-8">
						<div class="row">
							<div class="col-xs-12 carousel" id="carousel1">
								  <div class="item-video" data-hash="5">
									  <div class="owl-video-wrapper">
										<div class="owl-video-play-icon"></div>
										<div class="owl-video-tn owl-lazy" data-src="http://img.youtube.com/vi/JpxsRwnRwCQ/hqdefault.jpg" style="opacity: 1; background-image: url('http://img.youtube.com/vi/JpxsRwnRwCQ/hqdefault.jpg');"></div>
										<a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ&autoplay=1"></a>
									  </div>						  
								  </div>	
								  <div data-hash="1"><img src="<?php echo base_url('images/media1.jpg'); ?>" alt=""></div>
								  <div data-hash="2"><img src="<?php echo base_url('images/media2.jpg'); ?>" alt=""></div>
								  <div data-hash="3"><img src="<?php echo base_url('images/media3.jpg'); ?>" alt=""></div>
								  <div data-hash="4"><img src="<?php echo base_url('images/media4.jpg'); ?>" alt=""></div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								  <div id="carousel2">	
									  <div><a href="#5"><img src="<?php echo base_url('images/video.jpg'); ?>" alt=""></a></div>				  
									  <div><a href="#1"><img src="<?php echo base_url('images/media1.jpg'); ?>" alt=""></a></div>
									  <div><a href="#2"><img src="<?php echo base_url('images/media2.jpg'); ?>" alt=""></a></div>
									  <div><a href="#3"><img src="<?php echo base_url('images/media3.jpg'); ?>" alt=""></a></div>
									  <div><a href="#4"><img src="<?php echo base_url('images/media4.jpg'); ?>" alt=""></a></div>						  					 
								  </div>		
							</div>
						</div>	
											 							  
                    </div>
                    <div class="col-sm-4 col-md-4">
                         <article class="portfolio_details">
						
                              <h2 class="section_header">Descrizione</h2>
                              <p>In hac habitasse platea dictumst. In hac habitasse platea dictumst. Donec aliquet tellus enim, a tincidunt nulla. Praesent mollis felis at nulla fermentum mattis. Vivamus vestibulum neque quis nunc convallis venenatis. Nulla tristique lorem sit amet ipsum ornare sit amet feugiat nulla condimentum. Sed faucibus volutpat nunc, at ullamcorper augue elementum id. Quisque at lectus leo, nec placerat mi. Curabitur egestas eleifend interdum. Suspendisse potenti. Suspendisse nec risus fermentum sapien congue fermentum sed at lorem. </p>
                              <br>
                              <br>
                              <div>
								  <h2 class="section_header">Caratteristiche tecniche
									<select id="car_lingua" class="form-control input-sm pull-right">
										<option value=1>Italiano</option>
										<option value=2>English</option>
										<option value=3>Francais</option>
										<option value=4>Espanol</option>
									</select>
								  </h2> 
                                  <p><strong>Date:</strong> November 2013</p>
								  <p><strong>Client:</strong> Plethora Inc.</p>
								  <p><strong>Category:</strong> Design</p>
								  <p><strong>Place:</strong> Europe</p>
								  <p><strong>Rating:</strong><span class="rating r5"></span></p>
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