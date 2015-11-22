<?php
/**
 *Template Name: Default Index
 */

get_header();
?>

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

<!-- 网站主体 -->
<section class="container wrapper">
    <?php if ( function_exists('ts_breadcrumbs') ) : ts_breadcrumbs(); endif;?>
    <!-- <ol class="breadcrumb">
        <li><a href="/">首页</a></li>
        <li class="active">博客</li>
    </ol> -->
    
    <div class="row">
        <div class="col-sm-9">
            <?php include('includes/blog_posts.php'); ?>
        </div>
        <div class="col-sm-3">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('博客边栏') ) : ?>
		    <?php endif; ?>
        </div>
    </div>  
    
	<!-- 最新文章与文章列表 -->
	<div class="content-wrap left">
		<!-- 最新文章 -->
		<?php //include('includes/new_posts.php'); ?>
		<!-- 最新文章end -->
		<!-- 文章列表 -->
		<?php //include('includes/cms.php'); ?>
		<!-- 文章列表end -->
	</div>
	<!-- 最新文章与文章列表end -->
	<!-- 首页边栏 -->
		<?php //get_sidebar(); ?>
	<!-- 首页边栏end -->
</section>
<div class="clearfix"></div>
<!-- 网站主体end -->

<?php get_footer(); ?>
