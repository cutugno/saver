<script type="text/javascript">
	
	
	$(document).ready(function(){
	  $("#carousel1").owlCarousel({
		loop:false,
		center:true,
		video:true,
		lazyLoad:true,
		items:1,
		URLhashListener:true,
		animateOut: 'bounceOutRight',
		animateIn: 'bounceInLeft',
	  });
	  $("#carousel2").owlCarousel({
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		loop:true,
		items:3,
		margin: 10
	  });
	  	  
	});		
	
</script>

