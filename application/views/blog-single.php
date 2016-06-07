<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	

	<?php // var_dump ($single); ?>	
	<section class="hgroup">
          <div class="container">
               <h1><?php echo $single->titolo; ?></h1>
               <h2><i class="fa fa-clock-o"></i> Pubblicato il <strong><?php echo $single->data_ins; ?></strong></h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li><a href="<?php echo site_url($this->uri->segment(1)); ?>"><?php echo $titolocat; ?></a></li>
                    <li class="active"><?php echo $single->titolo; ?></li>
               </ul>
          </div>
     </section>
     <section>
          <div class="container">
               <div class="row">
                    <div id="leftcol" class="col-sm-8 col-md-8">
                         <article class="post">
                              <div class="post_content" id="carousel1">
								  <?php if (null!=$single->allegati) : ?>
								     <?php foreach ($single->allegati as $key=>$all) : ?>
										<?php if ($all->tipologia==1) : ?>
										   <figure data-hash="<?php echo $key; ?>">
											   <img alt="<?php echo $all->alt; ?>" src="<?php echo base_url($all->url); ?>">
										   </figure>
										<?php endif ?> 
									  <?php endforeach ?>
								   <?php endif ?>
                                   <p><?php echo $single->testo; ?></p>
                              </div>
                              <?php if (count($single->allegati)>1) : ?>
                              <div class="row post-attachments">
								  <?php for ($x=1;$x<count($single->allegati);$x++) : ?>
								  <div class="attachment col-xs-12 col-sm-6 col-md-4">
									  <?php if ($single->allegati[$x]->tipologia==1) : ?>
									  <img alt="<?php echo $single->allegati[$x]->alt; ?>" src="<?php echo base_url($single->allegati[$x]->url); ?>">
									  <?php else : ?>
									  <i class="fa fa-download"> <a href="<?php echo base_url($single->allegati[$x]->url); ?>">Scarica <?php echo $single->allegati[$x]->alt; ?></a> </i>									  
									  <?php endif ?>
								  </div>
								  <?php endfor ?>
                              </div>
                              <?php endif ?>
                         </article>                         
                    </div>
                    <div id="sidebar" class="col-sm-4 col-md-4">
                         <?php // echo $widget_categorie; ?>
                         <?php echo $widget_letti; ?>
                    </div>
               </div>
          </div>
     </section>