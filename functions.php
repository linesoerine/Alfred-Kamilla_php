<?php 

function theme_style() {
    wp_enqueue_style('style', get_stylesheet_uri());
   
  }
  add_action( 'wp_enqueue_scripts', 'theme_style' );
  
  function cool_scripts() {
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', 1.1, true);
  }
  add_action( 'wp_enqueue_scripts', 'cool_scripts' );

  function wptricks_recipe() {

    $labels = array(
      'name'                  => 'Varer',
      'singular_name'         => 'Vare',
      'add_new'               => 'Tilføj ny',
      'add_new_item'          => 'Tilføj ny vare',
      'edit_item'             => 'rediger varen',
      'new_item'              => 'Ny vare',
      'view_item'             => 'Se varen',
      'search_items'          => 'Søg varer',
      'not_found'             => 'Ingen vare fundet',
      'not_found_in_trash'    => 'Ingen vare fundet i papirkurven',
      'all_items'             => 'Alle varer',
      'featured_image'        => 'Varer billede',
      'set_featured_image'    => 'Tilføj billede',
      'remove_featured_image' => 'Fjern billede'
    );
  
    $args = array(
      'labels'                => $labels,
      'supports'              => array(
        'title',
        'thumbnail',
        'editor',
        'custom_fields'
      ),
      'taxonomies'            => array('vare'),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'menu_position'         => 3,
      'menu_icon'             => 'dashicons-list-view'
    );
  
    register_post_type('froskostordning', $args);
  }

  add_action('init', 'wptricks_recipe');

  function wptricks_cats() {

    $labels = [
      'name'                  => 'Kategorier',
      'singular_name'         => 'Kategori',
      'search_items'          => 'Søg i kategorier',
      'all_items'             => 'Alle kategorier',
      'edit_item'             => 'Rediger kategori',
      'update_item'           => 'Opdater kategori',
      'add_new_item'          => 'Tilføj ny kategori',
      'new_item_name'         => 'Ny kategori',
      'menu_name'             => 'Kategorier'
    ];
  
    register_taxonomy('kategori', ['opskrift'], [
      'hierarchical'          => true,
      'labels'                => $labels,
      'show_ui'               => true,
      'show_admin_column'     => true,
    ]);
  
  }
  add_action('init', 'wptricks_cats', 0);


  
?> 

