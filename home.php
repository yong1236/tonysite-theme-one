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
      <div id="particleground"></div>
      <div id="particleground2"></div>
      <div class="container">
        <h1>Tony Een</h1>
        <!--<h2>朴实、真诚、简单的底层IT工作者，在人海漂泊。</h2>-->
        <h2>漫漫长路，起伏不能由我；人海漂泊，尝尽人情淡薄</h2>
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

    <div class="container articles">
      <div class="articles-header page-header">
        <h2>Tony发表或收藏他人的精品文章推荐</h2>
        <p>这些文章是Tony在成长中的积累，或是探索、或是教训、或是经验</p>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 ">
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

        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="http://www.jquery123.com/api/" title="jQuery API 中文文档/手册" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'jQueryAPI中文手册'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/jqueryapi.png" alt="jQuery API 中文文档/手册"></a>
            <div class="caption">
              <h3>
                <a href="http://www.jquery123.com/api/" title="jQuery API 中文文档/手册" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'jQueryAPI中文手册'])">jQuery API <br><small>中文手册</small></a>
              </h3>
              <p>
                根据最新的 jQuery 1.11.x 和 2.1.x 版本翻译的 jQuery API 中文文档/手册。
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="http://www.bootcdn.cn/" title="Bootstrap中文网开放CDN服务" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'bootcdn'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/opencdn.png" alt="Open CDN"></a>
            <div class="caption">
              <h3>
                <a href="http://www.bootcdn.cn/" title="Bootstrap中文网开放CDN服务" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'bootcdn'])">Open CDN<br><small>开放CDN服务</small></a>
              </h3>
              <p>Bootstrap中文网联合又拍云存储共同推出了开放CDN服务，我们对广泛的前端开源库提供了稳定的存储和带宽的支持，例如Bootstrap、jQuery等。
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="http://expo.bootcss.com/" title="Bootstrap优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/expo.png" alt="Bootstrap优站精选"></a>
            <div class="caption">
              <h3>
                <a href="http://expo.bootcss.com/" title="Bootstrap优站精选" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'youzhan'])">优站精选<br><small>Bootstrap网站实例</small></a>
              </h3>
              <p>Bootstrap优站精选频道收集了众多基于 Bootstrap 构建、设计精美的、有创意的网站。
              </p>
            </div>
          </div>
        </div>

      </div>
    </div><!-- /.articles -->

    <div class="container projects">
      <div class="projects-header page-header">
        <h2>Tony发起或参与的优质项目推荐</h2>
        <p>这些项目或者是对XXX进行了有益的补充，或者是基于XXX开发的</p>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 ">
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
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="/p/layoutit/" title="Bootstrap可视化布局系统" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'layoutit'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/layoutit.png" alt="Layoutit"></a>
            <div class="caption">
              <h3>
                <a href="/p/layoutit/" title="Bootstrap可视化布局系统" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'layoutit'])">LayoutIt!<br><small>Bootstrap可视化布局</small></a>
              </h3>
              <p>
                LayoutIt! 可拖放排序在线编辑的Bootstrap可视化布局系统。由<a href="https://github.com/dodgepudding" target="_blank">4wer</a>同学汉化整理。
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="/p/bootstrap-wysiwyg/" title="bootstrap-wysiwyg" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'wysiwyg'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/bootstrap-wysiwyg.png" alt="Bootstrap WYSIWYG"></a>
            <div class="caption">
              <h3>
                <a href="/p/bootstrap-wysiwyg/" title="bootstrap-wysiwyg" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'wysiwyg'])">bootstrap-wysiwyg<br><small>为Bootstrap定制的可视编辑器</small></a>
              </h3>
              <p>
                bootstrap-wysiwyg是一个jQuery Bootstrap插件（5KB, &lt; 200 行代码）可以将任何一个DIV转变成一个WYSIWYG富文本编辑器。
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="/p/chart.js/" title="Chart.js" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'chartjs'])"><img class="lazy" src="http://static.bootcss.com/www/assets/img/null.png?v2" width="300" height="150" data-src="http://static.bootcss.com/www/assets/img/chart.js.png" alt="Chart.js"></a>
            <div class="caption">
              <h3>
                <a href="/p/chart.js/" title="Chart.js" target="_blank" onclick="_hmt.push(['_trackEvent', 'tile', 'click', 'chartjs'])">Chart.js<br><small>精巧的JS图表绘制工具库</small></a>
              </h3>
              <p>
                Chart.js是一个简单、面向对象、为设计者和开发者准备的图表绘制工具库。
              </p>
            </div>
          </div>
        </div>

      </div>
    </div><!-- /.projects -->

<?php get_footer(); ?> 
