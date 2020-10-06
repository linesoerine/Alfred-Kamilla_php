<?php
/*
 * The header for our login customer page
 */
 ?><!DOCTYPE html>

 <html <?php language_attributes(); ?> dir="ltr">

   <head>

     <meta charset="<?php bloginfo( 'charset' ); ?>">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Work+Sans&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="styles.css">
     <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title> <?php bloginfo('name'); ?></title>
     <?php wp_head(); ?>

   </head>

   <body <?php body_class(); ?>>
   
     <?php wp_body_open(); ?>
    
    <div class="container">

        <div class="opacity"></div> <!-- END OPACITY -->

            <div class="menu-container">

            <img src="http://localhost:8888/wordpress/wp-content/uploads/2020/09/aogk_neg_logo.png" width="200" height="43">

            <div class="nav-bar">

                <ul>
                <li><a href="customerlogin.html">Forside</a></li>
                <li><a href="concept.html">Om konceptet</a></li>
                <li><a href="contact.html">Kontakt</a></li>
                </ul>

            </div> <!-- END NAV-BAR -->

        </div> <!-- END MENU-CONTAINER -->


