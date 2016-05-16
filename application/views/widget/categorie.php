<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<aside class="widget">
	  <h4>Categorie Blog</h4>
	  <ul class="nav nav-pills nav-stacked">
		   <li<?php echo $sidebarblogactive; ?>><a href="<?php echo site_url('blog'); ?>">Tutte</a></li>
		   <li<?php echo $newsactive; ?>><a href="<?php echo site_url('blog/news'); ?>">News</a></li>
		   <li<?php echo $pressactive; ?>><a href="<?php echo site_url('blog/rassegna-stampa'); ?>">Rassegna stampa</a></li>
	  </ul>
 </aside>    