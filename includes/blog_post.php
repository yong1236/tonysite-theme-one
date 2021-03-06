<h4 class="media-heading"><a href="<?php the_permalink() ?>" rel="bookmark" target="_self" title="详细阅读 <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
<?php if(has_post_thumbnail()): ?>
<div class="media-left article-thumbnail">
    <a href="<?php the_permalink() ?>">
        <!-- <img class="media-object" width="200" src="http://static.bootcss.com/www/assets/img/codeguide.png" alt=""> -->
        <?php the_post_thumbnail('medium'); ?>
    </a>
</div>
<?php endif; ?>
<div class="media-body">
    <div class="article-author"><span>来源：-- </span> 作者：<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php the_author_nickname(); ?></a> 发表时间：<?php the_time('Y年m月d日') ?></div>
    <p>
    <?php 
        if (has_excerpt()){
            the_excerpt();
        } else{ 
            echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 168,"..."); 
        }
    ?>
    </p>
    <div>
        <a href="<?php the_permalink() ?>" rel="bookmark" target="_self" title="<?php the_title(); ?>" class="btn btn-default">阅读全文</a>
    </div>
    <div class="article-action">
        <span>
          <a href="#"><span class="glyphicon glyphicon-folder-open"></span> <?php the_category(', ') ?></a>
          <span class="glyphicon glyphicon-tags"></span> <?php the_tags(', ') ?>
        </span>
        <span class="pull-right">
          <a href="#"><span class="glyphicon glyphicon-heart"></span> 20</a>
          <a href="#"><span class="glyphicon glyphicon-eye-open"></span> 300</a>
          <a href="#"><span class="glyphicon glyphicon-comment"></span> <?php comments_popup_link('0', '1', '%'); ?></a>
          <a href="#"><span class="glyphicon glyphicon-new-window"></span> 56</a>
        </span>
    </div>
</div>
