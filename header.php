<?php
/*
 * The header for our login customer page
 */
 ?><!DOCTYPE html>

 <html <?php language_attributes(); ?> dir="ltr">

   <head>

     <meta charset="<?php bloginfo( 'charset' ); ?>">
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Work+Sans&display=swap" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script type="text/javascript" src="/js/script.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
     <title> <?php bloginfo('name'); ?></title>
     <?php wp_head(); ?>

   </head>

   <body <?php body_class(); ?>>
   
     <?php wp_body_open(); ?>

     <div class="front_container">

    <div class="front_opacity"></div>

    <div class="menu-container">

    <img src="http://localhost:8888/wordpress/wp-content/uploads/2020/09/aogk_neg_logo.png" width="200" height="43">

      <div class="nav-bar">

        <ul>
          <li><a href="">Forside</a></li>

          <div class="dropdown">
            <span><a href="#.html">Indstillinger</a></span>
            <div class="dropdown-content">
              <a href="profile">Profil</a>
              <a href="standard">Ændre standarter</a>
              <a href="pay">Betaling</a>
            </div> <!-- END DROPDOWN-CONTENT -->

          </div> <!-- END DROPDOWN -->

          <div class="dropdown">

            <span><a href="contact">Kontakt</a></span>
            <div class="dropdown-content">
              <a href="faq">FAQ</a>
            </div> <!-- END DROPDOWN-CONTENT -->

          </div> <!-- END DROPDOWN -->

          <li><a href="login">Logud</a></li>
        </ul>

      </div> <!-- END NAV-BAR -->

    </div> <!-- END MENU-CONTAINER -->

  </div> <!-- END FRONT_CONTAINER -->


  <div class="white_container">
    
    