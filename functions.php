<?php 

function theme_style() {
    wp_enqueue_style('style', get_stylesheet_uri());
   
  }
  add_action( 'wp_enqueue_scripts', 'theme_style' );
  
  function cool_scripts() {
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', 1.1, true);
  }
  add_action( 'wp_enqueue_scripts', 'cool_scripts' );


  function send_to_latest_week( $redirect_to, $request, $user ) {

    return home_url();
  }
  
  add_filter( 'login_redirect', 'send_to_latest_week', 10, 3 ); 

  if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
      'page_title' 	=> 'Frokostordning',
      'menu_title'	=> 'Frokostordning',
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));	
  }
  
?> 

