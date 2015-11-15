<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Tonysite_one
 * @since Tonysite one 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon.png">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/styles/main.css">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/vendor/modernizr.js"></script>    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="page" class="site">
    <!-- <header> -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/"><?php bloginfo('name') ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!--<form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>-->
              <?php 
                  if ( has_nav_menu( 'primary' ) ) : 
                        // Primary navigation menu.
                        wp_nav_menu( array(
                            'container'      => '',
                            'menu_class'     => 'nav navbar-nav navbar-right',
                            'theme_location' => 'primary',
                        ) );
                  endif;
              ?>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->
        </nav>
    <!-- </header> -->

