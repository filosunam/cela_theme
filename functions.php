<?php
// Registrar localización de widgets
if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar general',
		'id'   => 'general',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));	
}

if (function_exists( 'register_nav_menu' )) {
	register_nav_menu( 'mega-1', 'Principal');
}

?>
