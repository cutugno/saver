<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
	
	<section class="hgroup">
          <div class="container">
               <h1><?php echo $this->lang->line('rete_1'); ?></h1>
               <h2><?php echo $this->lang->line('rete_2'); ?></h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li class="active"><?php echo $this->lang->line('rete_1'); ?></li>
               </ul>
           </div>
      </section>
      <section>
		  <?php // var_dump ($affiliati); ?>
          <div class="container">
               <div class="row">
                    
                    <div class="scheda-affiliato col-sm-8 col-md-8" id="descr">
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <button class="btn btn-default" data-toggle="modal" data-target="#avviso_utenti"><?php echo $this->lang->line('rete_3'); ?></button>
                    </div>
               </div>
           </div>
		   <div class="modal fade" id="avviso_utenti" tabindex="-1" role="dialog" aria-labelledby="avviso_utenti">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"><?php echo $this->lang->line('rete_3'); ?></h4>
				  </div>
				  <div class="modal-body">
						<p><?php echo $this->lang->line('rete_4'); ?></p>
						<ul>
							<li><?php echo $this->lang->line('rete_5'); ?></li>
							<li><?php echo $this->lang->line('rete_6'); ?></li>
							<li><?php echo $this->lang->line('rete_7'); ?></li>
							<li><?php echo $this->lang->line('rete_8'); ?></li>
						</ul>
						<p><?php echo $this->lang->line('rete_9'); ?></p>
				  </div>				  
				</div>
			  </div>
		   </div>
      </section>