<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Tonysite_One
 * @since Tonysite One 1.0
 */

get_header(); ?>

<div class="jumbotron bloghead hidden">
  <div id="particleground3"></div>
  <div id="particleground4"></div>
  <div class="container">
    <h1>博客</h1>
    <h2>记录生活，记录人生！</h2>
    <!--<p class="masthead-button-links">
      <a class="btn btn-lg btn-primary btn-shadow" href="http://v3.bootcss.com/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap3中文文档'])">Bootstrap3中文文档(v3.3.5)</a>
    </p>-->
    <!--<ul class="masthead-links">
      <li>
        <a href="http://v2.bootcss.com/" target="_blank" role="button" onclick="_hmt.push(['_trackEvent', 'masthead', 'click', 'masthead-Bootstrap2中文文档'])">Bootstrap2中文文档(v2.3.2)</a>
      </li>
    </ul>-->
  </div>
</div>
<div>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand hidden" href="/">Blog</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <?php 
                  if ( has_nav_menu( 'blog' ) ) : 
                        // Blog navigation menu.
                        wp_nav_menu( array(
                            'container'      => '',
                            'menu_class'     => 'nav navbar-nav navbar-left',
                            'theme_location' => 'blog',
                        ) );
                  endif;
              ?>
            </div>
        </div>
    </nav>
</div>

<section>
  <div class="container">
  <?php if ( function_exists('ts_breadcrumbs') ) : ts_breadcrumbs(); endif;?>
    <!-- <ol class="breadcrumb">
      <li><a href="/">首页</a></li>
      <li><a href="/">博客</a></li>
      <li><a href="/">系列文章</a></li>
      <li><a href="/">Java基础</a></li>
      <li class="active">概念抽象、接口和类</li>
    </ol> -->

    <div class="row">
      <div class="col-sm-9">
        
        <?php
		// Start the loop.
		//while ( have_posts() ) : the_post();
        if ( have_posts() ) : the_post();
        ?>
        <div class="box-common">
        <?php
			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );
		?>
		</div>
		<div class="box-common">
		<?php	
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . '下一篇：' . '</span> ' .
					'<span class="screen-reader-text">' . '下一篇' . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . '上一篇：' . '</span> ' .
					'<span class="screen-reader-text">' . '上一篇' . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
        ?>
        </div>
        <div class="box-common">
        <?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
        ?>
        </div>
        <?php
		// End the loop.
		//endwhile;
		endif;
		?>
        
      </div>
      <div class="col-sm-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('博客边栏') ) : ?>
		<?php endif; ?>
      </div>
    </div>
  </div>
</section>	

<?php get_footer(); ?>
