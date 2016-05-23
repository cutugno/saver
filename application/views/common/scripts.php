<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('js/jquery-1.9.0.min.js'); ?>"><\/script>')</script>
<script src="<?php echo base_url('js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('js/jquery.flexslider.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('js/jquery.prettyPhoto.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('js/jquery.isotope.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('js/owl.carousel.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('js/jquery-eu-cookie-law-popup.js'); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('js/jquery.ui.totop.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/easing.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/wow.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/snap.svg-min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/restart_theme.js'); ?>"></script>

<script type="text/javascript">
	// cambia lingua
	$("#c_lan").click(function() {
		var lang=$(this).attr("lang");
		var url="<?php echo site_url('lingua'); ?>";
		var dati="lang="+lang;
		// chiamata ajax a controller che cambia sessione lingua
		$.post(url,dati,function(data) {
			window.location.reload();
		});
	});
</script>