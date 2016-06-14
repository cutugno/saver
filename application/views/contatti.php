<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
	
	<section class="hgroup">
          <div class="container">
               <h1>Contatti</h1>
               <h2>Per qualsiasi richiesta scriveteci o telefonateci, siamo a disposizione!</h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a> </li>
                    <li class="active">Contatti</li>
               </ul>
           </div>
      </section>
      <section>
          <div class="container">
               <div class="row">
                    <div class="office_address col-sm-4 col-md-4">
                         <div class="team_member">
                         	<img src="images/logo_saver.png" alt="Logo Saver">
                         	<h5>SAVER</h5>
                              <small>Cantiere Nautico</small><br><br>
                              <div class="team_social"> <a href="https://www.facebook.com/saversrl.prodotti" target="_blank"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-envelope"></i></a> </div>
                              <address>
                              <strong></strong><br>
                              Viale Regione Siciliana, 32<br>
                              Loc.tà Zappardino - 98060 Piraino (ME)<br>
                              Tel: 0941 302147<br>
                              Fax: 0941 303534<br>
                              </address>
                              <address>
                              E-mail: <a href="mailto:saverimbarcazioni@tiscali.it">saverimbarcazioni@tiscali.it</a>
                              </address>
                         </div>
                    </div>
                    <div class="contact_form col-sm-8 col-md-8">
                         <form name="contact_form" id="contact_form" method="post">
                              <div class="row">
                                   <div class="col-sm-6 col-md-6">
                                        <label>Nome</label>
                                        <input name="nome" id="nome" class="form-control" type="text" value="">
                                   </div>
                                   <div class="col-sm-6 col-md-6">
                                        <label>E-mail</label>
                                        <input name="email" id="email" class="form-control" type="text" value="">
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-sm-12 col-md-12">
                                        <label>Oggetto</label>
                                        <input name="oggetto" id="oggetto" class="form-control" type="text">
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-sm-12 col-md-12">
                                        <label>Messaggio</label>
                                        <textarea name="messaggio" id="messaggio" rows="8" class="form-control"></textarea>
                                   </div>
                                   <div class="col-sm-12 col-md-12"><br/>
                                        <a id="submit_btn" class="btn btn-primary" name="submit">INVIA MESSAGGIO</a> <span id="notice" class="alert alert-warning alert-dismissable hidden" style="margin-left:20px;"></span> </div>
                              </div>
                         </form>
                    </div>
               </div>
           </div>
      </section>
