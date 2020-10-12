<?php $post = get_post();
    wp_redirect( get_permalink($post->ID) );
    exit; get_header(); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
    the_post(); ?>
    
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
    
	<?php } // end while
} // end if
?>


<?php get_footer(); ?>