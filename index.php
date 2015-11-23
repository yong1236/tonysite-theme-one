<?php
/**
 *Template Name: Default Index
 */

get_header();
?>

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

</section>
<div class="clearfix"></div>
<!-- 网站主体end -->

<?php get_footer(); ?>
