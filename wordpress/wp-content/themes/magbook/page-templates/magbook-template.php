<?php
/**
 * Template Name: Magbook Template
 *
 * Displays Magazine template.
 *
 * @package Theme Freesia
 * @subpackage Magbook
 * @since Magbook 1.0
 */
get_header(); ?>
<div class="wrap">
	<?php 	if( is_active_sidebar( 'magbook_primary_fullwidth' ) && class_exists('Magbook_Plus_Features') ){ 
		dynamic_sidebar ('magbook_primary_fullwidth');
	} ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php 
			if( is_active_sidebar( 'magbook_template_section' )){
				dynamic_sidebar( 'magbook_template_section' );
			}

		the_content(); ?>
		</main><!-- end #main -->
	</div> <!-- end #primary -->
	
		<?php if( is_active_sidebar( 'magbook_template_sidebar_section' )){ ?>
		<aside id="secondary" class="widget-area">
			<?php dynamic_sidebar( 'magbook_template_sidebar_section' ); ?>
		</aside> <!-- end #secondary -->
	<?php	}
	if( is_active_sidebar( 'magbook_seondary_fullwidth' ) && class_exists('Magbook_Plus_Features') ){ 
		dynamic_sidebar ('magbook_seondary_fullwidth');
	} ?>
	
</div><!-- end .wrap -->


<?php get_footer(); ?>