<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?> class="article">
	<?php
		// Post thumbnail.
		//twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header page-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title text-center">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
		<div class="article-author text-center"><span>来源：原创</span> 作者：<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php the_author_nickname(); ?></a> 发表时间：<?php the_time('Y年m月d日') ?></div>
	</header><!-- .entry-header -->
	
	<div class="entry-content article-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<aside class="post-copyright">
      <div class="post-copy">
        <span><?php the_title( '<span class="entry-title text-center">《', '》</span>' ); ?> 为 <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php the_author_nickname(); ?></a> 原创，于 <?php the_time('Y年m月d日') ?> 发表在 <?php the_category(', ') ?> 分类下。 </span> <br/>
        <span>欢迎转载，并保留本文有效链接： <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), ' | ' . get_bloginfo('name') . '</a>' ); ?> </span>
      </div>
    </aside>

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php //twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
	
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
    <hr class="article-split"/>
</article><!-- #post-## -->
