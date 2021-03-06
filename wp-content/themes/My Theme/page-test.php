<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
		<div class="col-sm-12 col-md-8 col-md-push-4">
		<?php else:?>
		<div class="col-sm-12">
		<?php endif; ?>
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
			
						// Include the page content template.
						get_template_part( 'template-parts/content', 'test' );
			
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
		</div><!-- .col -->
		<?php get_sidebar(); ?>
	</div><!--.row -->
</div><!-- .container -->
<?php get_footer(); ?>
