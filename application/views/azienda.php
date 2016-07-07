<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<section class="hgroup">
          <div class="container">
               <h1><?php echo $this->lang->line('azienda_1'); ?></h1>
               <h2><?php echo $this->lang->line('azienda_2'); ?></h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li class="active"><?php echo $this->lang->line('azienda_1'); ?>Azienda</li>
               </ul>
          </div>     
     </section>
     <section class="article-text">
     <div class="container">
          <div class="row">
               <div class="col-sm-8 col-md-8">
                    <p><?php echo $this->lang->line('azienda_3'); ?>
                    <?php echo anchor('prodotti/linea-walk-around', 'Walk Around', 'title="Linea Walk Around"'); ?>
                    <?php echo $this->lang->line('azienda_4'); ?>
                    <?php echo anchor('prodotti/linea-fisher', 'Fisher', 'title="Linea Fisher"'); ?><?php echo $this->lang->line('azienda_5'); ?></p>
                    <p class="columns_2"><?php echo $this->lang->line('azienda_6'); ?></p>
                    <!--
                    <p><img src="<?php echo base_url('images/partner-2.jpg'); ?>" width="140" height="70" alt="jquery"></p>
                    <blockquote>
                         <p>Non paghi la tassa di possesso!</p>
					</blockquote>
					-->
               </div>
               <div class="col-sm-4 col-md-4">
                    <div class="service_teaser vertical">
                         <div class="service_photo">
                              <figure style="background-image:url(<?php echo base_url('images/prodotti'.$categoria->img); ?>)"></figure>
                         </div>
                         <div class="service_details">
                              <h2 class="section_header skincolored"><strong><?php echo $this->lang->line('azienda_7'); ?><?php echo $categoria->categoria; ?></strong><small><?php echo $categoria->sottotitolo; ?></small></h2>
                              <a class="btn btn-primary" href="<?php echo site_url('prodotti/linea-'.strtolower(url_title($categoria->categoria))); ?>"><?php echo $this->lang->line('azienda_8'); ?></a> </div>
                    </div>
               </div>
          </div>
     </div>     
     </section>
