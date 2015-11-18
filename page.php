<?php
/**
 *Template Name: Page
 */

get_header();
?>

    <div class="container">
        <div classs="row">
            <div class="col-sm-12">
                <h1></h1>
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
