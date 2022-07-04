<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();


//can edit
    <?php get_header(); ?>
    <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                                    <?php
                                    // Start the loop.
                                    while ( have_posts() ) : the_post();
                                                    // Include the page content template.
                                                    get_template_part( 'template-parts/content', 'page' );
                                                    // If comments are open or we have at least one comment, load up the comment template.
                                                    if ( comments_open() || get_comments_number() ) {
                                                                    comments_template();
                                                    }
                                                    // End of the loop.
                                    endwhile;
                                    ?>
                    </main><!-- .site-main -->
                    <?php get_sidebar( 'content-bottom' ); ?>
    </div><!-- .content-area -->
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>