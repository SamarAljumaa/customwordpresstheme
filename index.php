<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<section class="blogpost">
  <div class="wrapper">
  	<h2>Our Latest Blog Posts</h2>

  	<ul class="posts">
    		<?php get_template_part( 'loop', 'index' );	?> 
  	</ul>

    <!-- <?php get_sidebar(); ?> -->

  </div> <!-- /.wrapper -->
</section> <!-- /.blogpost -->

<?php get_footer(); ?>