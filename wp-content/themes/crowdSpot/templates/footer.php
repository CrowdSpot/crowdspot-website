<div id="footer-bg">

<div id="backtotop"><a href="#top">top</a></div>
<footer id="content-info" class="container" role="contentinfo">


<div id="footerWrap">
<div id="footer-widget1" class="span2">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
<?php endif; ?>
</div>
<div id="footer-widget2" class="span3">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
<?php endif; ?>
</div>
<div id="footer-widget3" class="span3">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
<?php endif; ?>
</div>

<div id="footer-widget4" class="span3">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
<?php endif; ?>
</div>

</div>

<div class="span12">
<?php echo date("Y") ?> &copy; CrowdSpot<br>
<p>&nbsp;</p>
</div>

</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>



<?php endif; ?>

<?php wp_footer(); ?>
</div>