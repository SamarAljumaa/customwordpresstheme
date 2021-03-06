<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="wrapper clearfix">

    <nav class="clearfix">
      <div class="logo">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>
      </div>  
      <div id="nav-icon1">
        <button class="btn-open">☰</button>
      </div>  
    </nav>
  </div> <!-- /.wrapper -->

     <div class="overlayMenu">

       <div class="wrapper">
         <i class="fa fa-times"></i>
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'primary'
          )); ?>
        </div>
      </div>

</header><!--/.header-->

