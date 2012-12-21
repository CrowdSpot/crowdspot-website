<header id="banner" class="navbar navbar-fixed-top" role="banner">
  
      
<div id="top"></div>
  
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
      <a class="brand" href="<?php echo home_url(); ?>/">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo-home.png">
      </a>
      
      <div class="clearboth"></div>	
      
      <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
      
      

      
    </div>
  </div>
</header>

