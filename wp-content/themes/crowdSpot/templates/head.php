<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

  
  <script type="text/javascript" src="//use.typekit.net/jyi2eej.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  	

  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  

  
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.png" />
  
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/menu.js"></script>

  <?php wp_head(); ?>
  
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/wp-content/themes/crowdSpot/style.css" />
  
    <!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href=""<?php bloginfo('template_url'); ?>/wp-content/themes/crowdSpot/assets/css/ie7.css"">
<![endif]-->
  
  <!--[if IE]>
	<link rel="stylesheet" type="text/css" href="all-ie-only.css" />
<![endif]-->

  
  
  <script type="text/javascript">
  	
  	// On window load. This waits until images have loaded which is essential
  	$(window).load(function(){
  		
  		// Fade in images so there isn't a color "pop" document load and then on window load
  		$(".home .thumbnail img").fadeIn(500);
  		
  		// clone image
  		$('.home .thumbnail img').each(function(){
  			var el = $(this);
  			el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"998","opacity":"0"}).insertBefore(el).queue(function(){
  				var el = $(this);
  				el.parent().css({"width":this.width,"height":this.height});
  				el.dequeue();
  			});
  			this.src = grayscale(this.src);
  		});
  		
  		// Fade image 
  		$('.home .thumbnail img').mouseover(function(){
  			$(this).parent().find('img:first').stop().animate({opacity:1}, 500);
  		})
  		$('.img_grayscale').mouseout(function(){
  			$(this).stop().animate({opacity:0}, 1000);
  		});		
  		
  		// portfolio thumb detail
  		
//  		$('#portfolio-list .portfolio-item').hover(function () {
//  			$(this).find('.excerpt').slideUp();
//  		}, function () {
//  			$(this).find('.excerpt').slideDown();
//  		})
  	});
  	
  	// Grayscale w canvas method
  	function grayscale(src){
  		var canvas = document.createElement('canvas');
  		var ctx = canvas.getContext('2d');
  		var imgObj = new Image();
  		imgObj.src = src;
  		canvas.width = imgObj.width;
  		canvas.height = imgObj.height; 
  		ctx.drawImage(imgObj, 0, 0); 
  		var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
  		for(var y = 0; y < imgPixels.height; y++){
  			for(var x = 0; x < imgPixels.width; x++){
  				var i = (y * 4) * imgPixels.width + x * 4;
  				var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
  				imgPixels.data[i] = avg; 
  				imgPixels.data[i + 1] = avg; 
  				imgPixels.data[i + 2] = avg;
  			}
  		}
  		ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
  		return canvas.toDataURL();
      }
  	    
  </script>
  
  <script type="text/javascript">
jQuery(document).ready(function($) {
    // $() will work as an alias for jQuery() inside of this function
$(document).ready(function() {
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');
  $('a[href*=#]').each(function() {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target) {
        var targetOffset = $target.offset().top;
        $(this).click(function(event) {
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 1200, function() {
            location.hash = target;
          });
        });
      }
    }
  });

  // use the first element that is "scrollable"

  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }
});
});
</script>



  <?php if (wp_count_posts()->publish > 0) : ?>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <?php endif; ?>
</head>
