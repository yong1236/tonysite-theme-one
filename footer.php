<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Tonysite_one
 * @since Tonysite one 1.0
 */
?>
    <!-- </div> --><!-- /.site-content -->
    <footer class="footer">
      <div class="container">
        <div class="row footer-top hidden">
          <div class="col-sm-6 col-lg-6">
            <h4>
              <img src="http://static.bootcss.com/www/assets/img/logo.png">
            </h4>
            <p>本网站所列开源项目的中文版文档全部由<a href="http://www.bootcss.com/">Bootstrap中文网</a>成员翻译整理，并全部遵循 <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">CC BY 3.0</a>协议发布。</p>
          </div>
          <div class="col-sm-6  col-lg-5 col-lg-offset-1">
            <div class="row about">
              <div class="col-xs-3">
                <h4>关于</h4>
                <ul class="list-unstyled">
                  <li><a href="/about/">关于我们</a></li>
                  <li><a href="/ad/">广告合作</a></li>
                  <li><a href="/links/">友情链接</a></li>
                  <li><a href="/hr/">招聘</a></li>
                </ul>
              </div>
              <div class="col-xs-3">
                <h4>联系方式</h4>
                <ul class="list-unstyled">
                  <li><a href="http://weibo.com/bootcss" title="Bootstrap中文网官方微博" target="_blank">新浪微博</a></li>
                  <li><a href="mailto:admin@bootcss.com">电子邮件</a></li>
                </ul>
              </div>
              <div class="col-xs-3">
                <h4>旗下网站</h4>
                <ul class="list-unstyled">
                  <li><a href="http://www.golaravel.com/" target="_blank">Laravel中文网</a></li>
                  <li><a href="http://www.ghostchina.com/" target="_blank">Ghost中国</a></li>
                </ul>
              </div>
              <div class="col-xs-3">
                <h4>赞助商</h4>
                <ul class="list-unstyled">
                  <li><a href="http://www.ucloud.cn/" target="_blank">UCloud</a></li>
                  <li><a href="https://www.upyun.com" target="_blank">又拍云</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
        <hr/>
        <div class="row footer-bottom">
          <ul class="list-inline text-center">
            <li><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a></li><li>京公网安备11010802014853</li>
          </ul>
        </div>
      </div>
    </footer><!-- /.footer -->
</div><!-- /.site -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/vendor.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/plugins.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/main.js"></script>
</body>
</html>
