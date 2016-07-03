<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<aside class="widget">
	  <h4>Articoli più letti</h4>
	  <div class="">
		 <?php if (null!=$newspiuletti) : ?>
		 <?php //var_dump ($newspiuletti); ?>
			<ul class="media-list">
			<?php foreach ($newspiuletti as $key=>$val) : ?>			
				 <li class="media"> <a href="<?php echo site_url(strtolower($val->categoria.'/'.$val->slug.'/'.$val->id)); ?>" class="media-photo" style="background-image:url(<?php echo ($val->allegati!="") ? base_url("images/news/".$val->allegati->url) : base_url('images/no_img.jpg'); ?>)"></a> <a href="<?php echo site_url(strtolower($val->categoria.'/'.$val->slug.'/'.$val->id)); ?>" class="media-date"><?php echo $val->data_ins['giorno']; ?><span><?php echo $val->data_ins['mese']; ?></span></a>
					  <h5 class="media-heading"><a href="<?php echo site_url(strtolower($val->categoria.'/'.$val->slug.'/'.$val->id)); ?>"><?php echo $val->titolo ; ?></a></h5>
					  <p><?php echo word_limiter($val->testo,10); ?></p>
				 </li>
			<?php endforeach ?>
			</ul>
		  <?php endif ?>
	   </div>
 </aside>
