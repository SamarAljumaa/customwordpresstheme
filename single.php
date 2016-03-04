<?php get_header(); ?>

<section class="article">
  <div class="postImage" style="background-image: url(<?php echo hackeryou_get_thumbnail_url($post) ?>)">
    <!-- <div class="wrapper"> -->
      <div class="articleOverlay">
        <div class="entry-meta"><p>
        <?php hackeryou_posted_on(); ?></p>
        </div><!-- .entry-meta -->
        <h2 class="entry-title"><?php the_title(); ?></h2>
        
      </div> 
    <!-- </div> -->
  </div>
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
          <?php the_content(); ?>
          <?php wp_link_pages(array(
            'before' => '<div class="page-link"> Pages: ',
            'after' => '</div>'
          )); ?>
        </div><!-- .entry-content -->
        <!-- <div class="entry-utility">
          <?php hackeryou_posted_in(); ?>
          <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
        </div>--> <!-- .entry-utility --> 
      </div><!-- #post-## -->

      <div id="nav-below" class="navigation clearfix">
        <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
        <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
      </div><!-- #nav-below -->
      
        <?php comments_template( '', true ); ?> 

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

   <!--  <?php get_sidebar(); ?> -->

  </div> <!-- /.container -->
</section> <!-- /.section -->

<?php get_footer(); ?>