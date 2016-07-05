<script src="<?php echo site_url('js/jquery.rwdImageMaps.min.js'); ?>" type="text/javascript"></script>

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
	  //mappa sensitive responsive
	  $('.sensitive img').rwdImageMaps();	  
	  
	  $("#carousel1").owlCarousel({		
		center:true,
		video:true,
		lazyLoad:true,
		items:1,
		URLhashListener:true,
		animateOut: 'bounceOutLeft',
		animateIn: 'bounceInRight',
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
	
	// hover area sensitive
	function changePartImg(elem,dest,callback) {
		var srcimg=elem.attr("data-img");
		srcimg=imgroot+"/"+srcimg;
		dest.attr("src",srcimg);		
		callback;
	}
	function resetPartImg(dest) {
		dest.attr("src","");		
	}
	function fadeInImg(cont) {
		cont.fadeIn(250);
	}
	function fadeOutImg(dest) {
		$("#particolare").fadeOut(200, function() {
			resetPartImg($("#particolare"));
		});
	}
	
	var imgroot="<?php echo site_url('images/prodotti/sensitive'); ?>";
	
	$(".map_circle").hover(		
		function() {
			changePartImg($(this),$("#particolare"),fadeInImg($("#particolare")));			
		},
		function() {
			$("#particolare").fadeOut(200, function() {
				resetPartImg($("#particolare"));
			});
		}
	);
	
</script>

