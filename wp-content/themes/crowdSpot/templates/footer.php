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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo GOOGLE_ANALYTICS_ID; ?>']);
  _gaq.push(['_setDomainName', '<?php echo GOOGLE_ANALYTICS_DOMAIN; ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<?php endif; ?>

<?php wp_footer(); ?>
</div>