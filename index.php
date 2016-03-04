<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<section class="blogpost">
  <div class="container">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <!-- <?php get_sidebar(); ?> -->

  </div> <!-- /.container -->
</section> <!-- /.blogpost -->

<?php get_footer(); ?>