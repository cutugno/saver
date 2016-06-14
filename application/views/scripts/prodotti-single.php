<script type="text/javascript">
	
	function changeVideoHeight(videoItem) { 
		var minw=750;
		var maxw=1170;
		var videoh=0;
		var ww=$(window).width();
		console.log(ww);
		if (ww<minw) {
			videoh=(ww-40)/1.5;
		} else if ((ww>=minw) && (ww<=maxw)) {
			videoh=((ww*0.66)-30)/1.5;
		} else {
			videoh=((maxw*0.66)-30)/1.5;
		}
		console.log(videoh);
		$(videoItem).css("height",videoh);
	}
	
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
		items:4,
		margin:10
	  });
	  
	  changeVideoHeight(".owl-carousel .item-video");
	});		
	
	$(window).resize(function() {
	  changeVideoHeight(".owl-carousel .item-video");
	});
	
	// cambio lingua caratteristiche
	$("#car_lingua").change(function(){
		var lang=$(this).val();
		$(".carcont").hide();
		$("#"+lang).show();
		
	});
	
</script>

