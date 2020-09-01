<?php


function julio_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'julio_theme_support');

//MENUS
function register_my_menu() {
register_nav_menu('side-menu',__( 'Sidebar Menu' ));
}
add_action( 'init', 'register_my_menu' );

function julio_register_styles(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('julio-stylesheet', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'julio_register_styles');

function julio_register_scripts(){
  wp_enqueue_script('julio-script', get_template_directory_uri()."/assets/js/main.js", array(), 1.0, true);
}

add_action('wp_enqueue_scripts', 'julio_register_scripts');

//image header
function themename_custom_header_setup() {
$args = array(
'default-image' => get_template_directory_uri() . '/assets/images/image-main-iceberg-min.jpeg',
'width' => 500,
'height' => 500,
'flex-width' => true,
'flex-height' => true,
);
add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );

//truc de célia
function newSloganWp(){
$var = get_bloginfo('description');
$table = [];
$table = explode( " ", $var );
$numberKey = count($table);
$numberkeySplit = $numberKey / 2;
$slogan1 = [];
$slogan2 = [];
foreach ($table as $key => $value) {
if($key < $numberkeySplit){
array_push($slogan1, $value);
} else {
array_push($slogan2, $value);
}
}
$slogan1 = implode( " ", $slogan1 );
$slogan2 = implode( " ", $slogan2 );
echo $slogan1 . "</span></br>" . "<span class='julio-title-layer2'>" . $slogan2 . "</span>";
}

// Catégories Articles


 ?>
