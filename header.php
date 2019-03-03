<!doctype html>

<html <?php language_attributes(); ?>>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
      - <?php bloginfo('name'); ?> 
    </title>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/material.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link rel="icon" href="<?php bloginfo('template_url') ?>/images/meetwits.png" type="image/png" sizes="32x32">
        <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133225264-1"></script>
	<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-133225264-1');
	</script>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="android-logo-image" src="<?php bloginfo('template_url') ?>/images/meetwits-logo.png">
          </a>
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              
              <?php get_search_form(); ?>
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 0,
               'container'         => false,
               'menu_class'        => 'mdl-typography--text-uppercase',)
           );
       ?>
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="android-logo-image" src="<?php bloginfo('template_url') ?>/images/meetwits-logo.png">
          </a>
          </span>
        </div>
      </div>
      <div class="android-drawer mdl-layout__drawer">
    <span class="mdl-layout-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img class="android-logo-image" src="<?php bloginfo('template_url') ?>/images/meetwits-logo-white.png">
      </a>
    </span>
         <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'nav',
               'container_class'   => 'mdl-navigation',
               'menu_class'        => 'menu-drawer',)
           );
       ?>
</div>