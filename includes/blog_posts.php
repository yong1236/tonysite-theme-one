<ul class="media-list article-list">
<?php 
    $scrollcount = 10;//get_option('sl_new_post');
    $query_str = 'showposts='.$scrollcount.'&caller_get_posts=10';
    if(is_category()){
        $cat_ID = get_query_var('cat');
        $query_str = $query_str.'&cat='.$cat_ID;
    }else{
        $query_str = $query_str.'&category_name=blog';
    }
?>
<?php 
    query_posts($query_str);
    while ( have_posts() ) : the_post();
    //$do_not_duplicate[] = $post->ID; 
?>
<li class="media">
<?php include(TEMPLATEPATH .'/includes/blog_post.php'); ?>
</li>
<?php endwhile; ?>
</ul>

