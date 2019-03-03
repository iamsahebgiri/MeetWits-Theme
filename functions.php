<?php
function theme_setup() {
	//For Nav menu
  register_nav_menu('primary',__( 'Primary Menu' ));

  //For Post Thumbnails
  add_theme_support('post-thumbnails');
}
add_action( 'init', 'theme_setup' );
?>