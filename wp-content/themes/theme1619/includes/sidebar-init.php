<?php
function elegance_widgets_init() {
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Sidebar',
		'id' 						=> 'main-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Before Content Area
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Before Content Area',
		'id' 						=> 'before-content-area',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s" class="grid_3">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Primary Content Area
	// Location: in the bottom of the Home content
	register_sidebar(array(
		'name'					=> 'Primary Content Area',
		'id' 						=> 'primary-content-area',
		'description'   => __( 'Located in the bottom of the Home content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	));
	// Secondary Content Area
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Secondary Content Area',
		'id' 						=> 'secondary-content-area',
		'description'   => __( 'Located in the bottom of the Home content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'					=> 'Footer',
		'id' 						=> 'footer-sidebar',
		'description'   => __( 'Located at the bottom of pages.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>