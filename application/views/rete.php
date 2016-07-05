<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
	
	<section class="hgroup">
          <div class="container">
               <h1>Rete vendita</h1>
               <h2>Clicca sul segnalino per avere maggiori informazioni sull'affiliato</h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li class="active">Rete vendita</li>
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
                        <button class="btn btn-default" data-toggle="modal" data-target="#avviso_utenti">Avviso per gli utenti</button>
                    </div>
               </div>
           </div>
		   <div class="modal fade" id="avviso_utenti" tabindex="-1" role="dialog" aria-labelledby="avviso_utenti">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Avviso per gli utenti</h4>
				  </div>
				  <div class="modal-body">
						<p>S'informa la spettabile clientela SAVER e tutti i diportisti interessati ai nostri prodotti e residenti nella regione Lazio che gli unici dealer ufficiali da noi autorizzati a vendere ed a promuovere sotto qualsiasi forma ed attraverso qualsiasi mezzo pubblicitario (editoria specializzata e non, web, promo, TV, etc) i prodotti a marchio SAVER sono i seguenti:</p>
						<ul>
							<li>Alimar a fiumicino (RM)</li>
							<li>Autonautica Diglio a Bolsena (VT)</li>
							<li>G.B. Nautico Unipersonale a Borgo Grappa (LT)</li>
							<li>Nautica Lieto a Gaeta (LT)</li>
						</ul>
						<p>Invitiamo pertanto tutti i diportisti, già clienti SAVER e non, a diffidare di qualsiasi proposta od offerta riguardante i nostri prodotti proveniente da dealer non presenti in questo elenco, in quanto gli stessi, non facendo parte della nostra rete di vendita ufficiale, non sono autorizzati a nessun tipo di intermediazione, promozione e vendita. La SAVER si riserve inoltre la facolta di riconoscere o meno eventuali garanzie su prodotti non acquistati direttamente ed esclusivamente dalla sua rete di vendita ufficiale.</p>
				  </div>				  
				</div>
			  </div>
		   </div>
      </section>