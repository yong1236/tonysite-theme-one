<?php
/**
 *Template Name: Default Index
 */

get_header();
?>
<?php
    /*$categories = get_the_category();
 
    if ( ! empty( $categories ) ) {
        echo "haha";
        echo esc_html( $categories[0]->cat_name );   
    }
    
    //global $wp_query;
    $cat_ID = get_query_var('cat');
    echo $cat_ID;
    echo get_category_parents($cat_ID);
    echo wp_list_categories('category_name=blog');
    echo get_category_by_slug('blog')->count;*/
    $cat_ID = get_query_var('cat');
    //这是一个不好的实现，实属无奈之举。有更高级的方法，只是没时间研究了
?>
<?php if (in_array($cat_ID, array(3,4,5,6,7,8,10))) {?>
<?php include(TEMPLATEPATH .'/category-blog.php'); ?>
<?php }else{?>
<div class="jumbotron bloghead">
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

<!-- 网站主体 -->
<section class="container wrapper">
    <ol class="breadcrumb">
        <li><a href="/">首页</a></li>
        <li class="active">博客</li>
    </ol>
    
    <div class="row">
        <div class="col-sm-9">
            <?php include('includes/new_posts.php'); ?>
        </div>
        <div class="col-sm-3">
            
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
<?php } ?>

<?php get_footer(); ?>
