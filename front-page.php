<?php get_header();  ?>


<section class="hero">
  <div class="wrapper heroImage"  style="background-image: url(<?php echo hackeryou_get_thumbnail_url($post) ?>)">
    <h1>
      <?php bloginfo( 'name' ); ?>
    </h1>
    <div class="half"></div>
  </div> <!-- /.wrapper -->
</section>

<div class="content">
  <?php // Start the loop ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <!-- <h2><?php the_title(); ?></h2> -->
    <?php the_content(); ?>

  <?php endwhile; // end the loop?>
</div> <!-- /,content --> 

<?php get_footer(); ?>