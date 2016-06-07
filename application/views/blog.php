<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
	<section class="hgroup">
          <div class="container">
               <h1><?php echo $titolocat; ?></h1>
               <h2><?php echo $sottotitolocat; ?></h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li class="active"><?php echo $titolocat; ?></li>
               </ul>
          </div>     
     </section>
     <section>
		  <?php //var_dump ($news); ?>
          <div class="container">
               <div class="row">
                    <div id="leftcol" class="col-sm-8 col-md-8">
						<?php if (null!=$news) : ?>
							<?php foreach ($news as $val) : ?>
							 <article class="post">
								  <div class="post_header">
									   <h3 class="post_title"><a href="<?php echo site_url($this->uri->segment(1)."/".$val->slug."/".$val->id); ?>"><?php echo $val->titolo; ?></a></h3>
									   <div class="post_sub"><i class="fa fa-clock-o"></i> Pubblicato il <strong><?php echo $val->data_ins; ?></strong></div>
								  </div>
								  <div class="post_content">
									  <?php if (null!=$val->allegati) : ?>
									   <figure>
										   <img alt="<?php echo $val->titolo; ?>" src="<?php echo base_url($val->allegati->url); ?>">
									   </figure>
									   <?php endif ?>
									   <p><?php echo word_limiter($val->testo,30); ?></p>
									   <a href="<?php echo site_url($this->uri->segment(1)."/".$val->slug."/".$val->id); ?>" class="btn btn-primary">Leggi tutto</a> 
								  </div>
							 </article>
							 <?php endforeach ?>
                         
							<div class="pagination_wrapper">
								 <?php echo $pages; ?>
								  <!--
								  <ul class="pagination pagination-centered">
									   <li class="disabled"><a href="#">«</a></li>
									   <li class="active"><a href="#">1</a></li>
									   <li><a href="#">2</a></li>
									   <li><a href="#">3</a></li>
									   <li><a href="#">4</a></li>
									   <li><a href="#">5</a></li>
									   <li><a href="#">»</a></li>
								  </ul>
								  -->
							 </div>
						<?php else : ?>
						Nessun elemento disponibile
						<?php endif ?>
                    </div>
                    <div id="sidebar" class="col-sm-4 col-md-4">
                         <?php // echo $widget_categorie; ?>
                         <?php echo $widget_letti; ?>
                    </div>
               </div>
          </div>
     </section>