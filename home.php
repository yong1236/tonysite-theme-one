<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Tonysite_one
 * @since Tonysite one 1.0
 */
    
get_header();
?>

    <div class="jumbotron masthead">
      <div id="no-particleground"></div>
      <div id="no-particleground2"></div>
      <div class="container">
        <h1>Tony Een</h1>
        <h2>一匹来自北方的狼</h2>
        <p>漫漫长路，起伏不能由我；人海漂泊，尝尽人情淡薄</p>
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
    <?php
        $sticky = get_option('sticky_posts');
        rsort( $sticky );  
    ?>
    
    <?php 
        //$sticky = array_slice( $sticky, 0, 4);  
        query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1, 'category_name' => 'blog', 'posts_per_page' => 8 ) );
        if(have_posts()):
    ?>
    <div class="container articles">
      <div class="articles-header page-header">
        <h2>Tony发表或收藏他人的精品文章推荐</h2>
        <p>这些文章是Tony在成长中的积累，或是探索、或是教训、或是经验</p>
      </div>
      
      <div class="row">
      <?php
        while (have_posts()) : the_post();
      ?>
        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="<?php the_permalink(); ?>" title="<?php  the_title(); ?>" target="_blank" rel="bookmark" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'codeguide'])">
            <?php the_post_thumbnail('medium'); ?>
            <!-- <img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/codeguide.png" alt="Headroom.js"> -->
            </a>
            <div class="caption">
              <h3>
                <a href="<?php the_permalink(); ?>" title="<?php  the_title(); ?>" target="_blank" rel="bookmark" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'codeguide'])"><?php the_title(); ?><br><small>by @mdo</small></a>
              </h3>
              <p>
                <?php 
                    if (has_excerpt()){
                        the_excerpt();
                    } else{ 
                        echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 168,"..."); 
                    }
                ?>
              </p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
        <!-- <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="http://codeguide.bootcss.com" title="Bootstrap 编码规范" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'codeguide'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/codeguide.png" alt="Headroom.js"></a>
            <div class="caption">
              <h3>
                <a href="http://codeguide.bootcss.com" title="Bootstrap 编码规范：编写灵活、稳定、高质量的 HTML 和 CSS 代码的规范。" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'codeguide'])">Bootstrap 编码规范<br><small>by @mdo</small></a>
              </h3>
              <p>
                Bootstrap 编码规范：编写灵活、稳定、高质量的 HTML 和 CSS 代码的规范。
              </p>
            </div>
          </div>
        </div>
        -->
      </div>
    </div><!-- /.articles -->
    <?php endif; ?>

    <?php
        query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1, 'category_name' => 'projects', 'posts_per_page' => 8 ) );
        if(have_posts()): 
    ?>
    <div class="container projects">
      <div class="projects-header page-header">
        <h2>Tony发起或参与的优质项目推荐</h2>
        <p>这些项目或者是对XXX进行了有益的补充，或者是基于XXX开发的</p>
      </div>

      <div class="row">
        <!-- <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="/p/unslider/" title="Unslider" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'unslider'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/unslider.png" alt="Unslider"></a>
            <div class="caption">
              <h3>
                <a href="/p/unslider/" title="Unslider" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'unslider'])">Unslider<br><small>jQuery轮播插件</small></a>
              </h3>
              <p>
                Unslider &mdash; 一个超小的 jQuery 轮播（slider） 插件。支持主流浏览器、键盘导航、自动调整高度和响应式布局。
              </p>
            </div>
          </div>
        </div> -->
        
      <?php 
        while (have_posts()) : the_post();
      ?>
        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="<?php the_permalink(); ?>" title="<?php  the_title(); ?>" target="_blank" rel="bookmark" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'codeguide'])">
            <?php the_post_thumbnail('medium'); ?>
            <!-- <img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/codeguide.png" alt="Headroom.js"> -->
            </a>
            <div class="caption">
              <h3>
                <a href="<?php the_permalink(); ?>" title="<?php  the_title(); ?>" target="_blank" rel="bookmark" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'codeguide'])"><?php the_title(); ?><br><small>by @mdo</small></a>
              </h3>
              <p>
                <?php 
                    if (has_excerpt()){
                        the_excerpt();
                    } else{ 
                        echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 168,"..."); 
                    }
                ?>
              </p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

      </div>
    </div><!-- /.projects -->
    <?php endif; ?>

<?php get_footer(); ?> 
