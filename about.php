<?php
/**
 *Template Name: About
 */

get_header();
?>

    <div class="container">
        <div classs="row">
            <div class="col-sm-2">
                <ul class="list-group">
                  <?php 
                    wp_list_pages(array(
                        'child_of'      => 7,
                        'title_li'      => ''
                    )); 
                  ?>
                </ul>
            </div>
            <div class="col-sm-10">
                <h1>关于页面</h1>
                <div>
                <?php
	                // Start the loop.
	                while ( have_posts() ) : the_post();

		                // Include the page content template.
		                //get_template_part( 'content', 'page' );
		                the_content('<p class="serif">Read the rest of this page »</p>');

		                // If comments are open or we have at least one comment, load up the comment template.
		                if ( comments_open() || get_comments_number() ) :
			                comments_template();
		                endif;

	                // End the loop.
	                endwhile;
	            ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
