<?php
function theme_styles() {
    wp_enqueue_style ('bootstrap_css', get_template_directory_uri() . 'css/bootstrap.min.css');
    wp_enqueue_style ('main_css', get_template_directory_uri() . '/style.css');
}
 add_action( 'wp_enqueue_scripts', 'theme_styles' );

 function theme_js(){
    global $wp_scripts;

    wp_enqueue_scripts('bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array ('jquery'), '', true);
    
    wp_enqueue_scripts('theme_js', get_template_directory_uri().'/js/theme.js', array ('jquery'), '', true);
 } 
 add_action( 'wp_enqueue_scripts', 'theme_js' );

 add_theme_support( 'menus' );
 add_theme_support( 'post-thumbnails' );

 function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );

function create_widget ($name, $id, $description) {
    register_sidebar( array(
        'name' => __($name),
        'id' => $id,
        'description' => __($description),
        'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
    ));
}
create_widget('Início Esquerda', 'front-left', 'Coluna da esquerda da página inicial');
create_widget('Início Centro', 'front-center', 'Coluna do meio da página inicial');
create_widget('Início Direita', 'front-right', 'Coluna da direita da página inicial');

create_widget('Lateral da Página', 'page', 'Coluna da página inicial');
create_widget('Lateral do Blog', 'blog', 'Coluna da página do blog');
?>