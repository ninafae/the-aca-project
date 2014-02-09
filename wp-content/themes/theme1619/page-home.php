<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>
<div id="before_content_area" class="clearfix">
	<?php if ( ! dynamic_sidebar( 'Before Content Area' ) ) : ?>
		<!--Widgetized 'Before Content Area' for the home page-->
	<?php endif ?>
</div>
<div id="home_content_area" class="clearfix">
	<div class="prefix_4 grid_4">
		<?php if ( ! dynamic_sidebar( 'Primary Content Area' ) ) : ?>
			<!--Widgetized 'Primary Content Area' for the home page-->
		<?php endif ?>
	</div>
	<div class="grid_4">
		<?php if ( ! dynamic_sidebar( 'Secondary Content Area' ) ) : ?>
			<!--Widgetized 'Secondary Content Area' for the home page-->
		<?php endif ?>
	</div>
</div>
<?php get_footer(); ?>