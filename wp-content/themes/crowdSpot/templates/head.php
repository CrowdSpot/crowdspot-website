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

  <?php wp_head(); ?>
  
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/wp-content/themes/crowdSpot/style.css" />
  
    <!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href=""<?php bloginfo('template_url'); ?>/wp-content/themes/crowdSpot/assets/css/ie7.css"">
<![endif]-->
  
  <!--[if IE]>
	<link rel="stylesheet" type="text/css" href="all-ie-only.css" />
<![endif]-->


  
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
