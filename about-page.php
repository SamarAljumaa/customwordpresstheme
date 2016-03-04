<?php /* Template Name: About Page */ ?>
<?php get_header();  ?>

<section class="about">
  <div class="wrapper">
	  <?php // Start the loop ?>
	  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	    <h2><?php
	     $title = get_the_title(); 
	     echo $title;
	    ?></h2>
	    <?php the_content(); ?>

	  <?php endwhile; // end the loop?>
  </div> <!-- /.wrapper -->
</section> <!-- /.section -->

<?php get_footer(); ?>