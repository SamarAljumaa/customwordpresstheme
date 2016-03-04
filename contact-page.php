<?php /* Template Name: Contact Page */ ?>
<?php get_header();  ?>

<section class="contact">
  <div class="wrapper">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php
       $title = get_the_title(); 
       echo $title;
      ?></h2>
      <?php the_content(); ?>
			<ul class="contactInfo clearfix">
				<li>
					<h5>Email</h5>
					<p>email@email.com</p>
				</li>
				<li>
					<h5>Call</h5>
					<p>+1 (234)567-8901</p>
				</li>
				<li>
					<h5>Address</h5>
					<p>767 Fifth Ave.</p>
					<p>New York, NY 10153</p>
				</li>
			</ul>

    <?php endwhile; // end the loop?>
		<!-- <form action="//formspree.io/your@email.com"
      method="POST">
	    <input type="text" name="name">
	    <input type="email" name="_replyto">
	    <input type="submit" value="Send">
		</form> -->

  </div> <!-- /.wrapper -->
</section> <!-- /.contact -->

<?php get_footer(); ?>