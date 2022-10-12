<?php
// @package customTheme

//function for adding stylesheet
function addStyles(){
    //register styles
    wp_register_style( 'style-css', get_template_directory_uri() . '/style.css', false , fileatime(get_template_directory() . '/style.css'),'all');
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', false ,'all');

    //add javascript
    wp_register_script( 'main-js', get_template_directory_uri() .'/assets/js/main.js', fileatime(get_template_directory() . '/style.css'),false );
    wp_register_script( 'bundle-js', get_template_directory_uri() .'/assets/library/js/bootstrap.bundle.js', false , 'all' );

    //call style 
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_script('main-js');
    wp_enqueue_script('bundle-js');
}
// call fucntion for stylesheet
add_action( 'wp_enqueue_scripts', 'addStyles' );

//register menu for your theme
register_nav_menus(
    array('Primary-manu'=>'Header Menu')
);

//add featured image option in admin dashboard
add_theme_support( 'post-thumbnails' );

//get header logo
add_theme_support('custom-header' );


//make widged visible 
register_sidebar( 
    array(
        'name'=>'sidebar location',
        'id'=>'sidebar'

    )
 )

?>