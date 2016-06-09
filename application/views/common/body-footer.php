<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<footer>
		<!--
          <section class="twitter_feed_wrapper">
               <div class="container">
                    <div class="row wow animated fadeInUp">
                         <div class="twitter_feed_icon col-sm-1 col-md-1"><a href="#twitter"><i class="fa fa-twitter"></i></a></div>
                         <div class="col-sm-11 col-md-11">
                              <blockquote>
                                   <p>This Clean, Flexible, Multipurpose Bootstrap 3.1.1 HTML5 Template will soon become a Wordpress theme with great support!  <a href="#">http://unhub.com/LIot</a></p>
                                   — LeonArt (@leonartgr) <a href="https://twitter.com/plethorathemes/">April 4, 2014</a></blockquote>
                         </div>
                    </div>
               </div>
          </section>
          -->
          <section id="footer_teasers_wrapper">
               <div class="container">
                    <div class="row">
                         <div class="footer_teaser col-sm-4 col-md-4">
                              <h3>Contatti</h3>
                              <p><i class="fa fa-map-marker"></i> Viale Regione Siciliana, 32 - Loc.tà Zappardino - 98060 Piraino (ME)</p>
                              <p><i class="fa fa-phone"></i> 0941 302147</p>
                              <p><i class="fa fa-print"></i> 0941 303534</p>
                              <p><i class="fa fa-envelope"></i> <a href="mailto:saverimbarcazioni@tiscali.it">saverimbarcazioni@tiscali.it</a></p>
                         </div>
                         <div class="footer_teaser col-sm-4 col-md-4">
                              <h3>Ultime notizie</h3>
                              <?php // var_dump ($news); ?>
                              <?php if (null!=$newsfooter) : ?>
                              <ul class="media-list">
								     <?php foreach ($newsfooter as $key=>$val) :?>
									 <li class="media"> <a href="<?php echo site_url(strtolower($val->categoria.'/'.$val->slug.'/'.$val->id)); ?>" class="media-photo" style="background-image:url(<?php echo base_url($val->allegati->url); ?>)"></a> <a href="#" class="media-date"><?php echo $val->data_ins['giorno']; ?><span><?php echo $val->data_ins['mese']; ?></span></a>
										<h5 class="media-heading"><a href="<?php echo site_url(strtolower($val->categoria.'/'.$val->slug.'/'.$val->id)); ?>"><?php echo $val->titolo; ?></a></h5>
										<p><?php echo word_limiter($val->testo,10); ?></p>
								     </li>								     
								     <?php endforeach ?>
                              </ul>
                              <?php else : ?>
                              Nessun elemento disponibile
                              <?php endif ?>
                         </div>

                         <div class="footer_teaser col-sm-4 col-md-4" >
                              <h3>Social</h3>

                         </div>
                         
                    </div>
               </div>
          </section>
          <section class="copyright">
               <div class="container">
                    <div class="row">
                         <div class="text-right col-md-6 col-md-offset-6"> Powered by <a href="#">DuePi</a> </div>
                    </div>
               </div>
          </section>
     </footer>