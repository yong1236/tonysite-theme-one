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
    //$curCat = get_category($cat_ID);
    //这是一个不好的实现，实属无奈之举。有更高级的方法，只是没时间研究了

    $blogCatId = get_category_by_slug('blog')->cat_ID;
    $cats = get_categories(array('child_of'=>$blogCatId));
    $cat_IDs = array();
    foreach($cats as $key=>$value){
        $cat_IDs[] = $value->cat_ID;
    }
?>
<?php if (in_array($cat_ID, $cat_IDs)) {?>
<?php include(TEMPLATEPATH .'/category-blog.php'); ?>
<?php }else{?>
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

<!-- 网站主体 -->
<section class="container wrapper" style="margin-top:30px">
    <?php if ( function_exists('ts_breadcrumbs') ) : ts_breadcrumbs(); endif;?>
    <ol class="breadcrumb hidden">
        <li><a href="/">首页</a></li>
        <li class="active">博客</li>
    </ol>
    
    <div class="row">
        <div class="col-sm-9">
            <?php include('includes/blog_posts.php'); ?>
        </div>
        <div class="col-sm-3">
            
        </div>
    </div>

</section>
<div class="clearfix"></div>
<!-- 网站主体end -->
<?php } ?>

<?php get_footer(); ?>
