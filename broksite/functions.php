<?php 


add_theme_support('menus');


function add_theme_menus(){

	register_nav_menus(

		 array(
		 	'primary-menu' =>  ( 'Primary Menu' ), 
		 	)
	);
		
}
add_action( 'init', 'add_theme_menus');

function getThemeStyles(){
	wp_enqueque_style("bootstrap_css", get_template_directory_uri() . "/assets/css/bootstrap.min.css");
	
	wp_enqueque_style("bs_styles", get_template_directory_uri() . "/assets/css/bs-styles.css");
	
	wp_enqueque_style("centered_navbar", get_template_directory_uri() . "/assets/css/Centered-Navbar.css");
	
	wp_enqueque_style("centered_navbar1", get_template_directory_uri() . "/assets/css/Centered-Navbar1.css");
	
	wp_enqueque_style("fonts", get_template_directory_uri() . "/assets/css/fonts.css");
	
	wp_enqueque_style("footer_basic", get_template_directory_uri() . "/assets/css/Footer-Basic.css");
	
	wp_enqueque_style("header_dark", get_template_directory_uri() . "/assets/css/Header-Dark.css");
	
	wp_enqueque_style("listings", get_template_directory_uri() . "/assets/css/listings.css");
	
	wp_enqueque_style("navigation-with-search1", get_template_directory_uri() . "/assets/css/Navigation_with_Search1.css");

	wp_enqueque_style("photoswipe", get_template_directory_uri() . "/assets/css/photoswipe.css");

	wp_enqueque_style("search_styles", get_template_directory_uri() . "/assets/css/search-styles.css");

	wp_enqueque_style("viewer_min", get_template_directory_uri() . "/assets/css/viewer.min.css");

	wp_enqueque_style("style_css", get_template_directory_uri() . "/style.css");

}

add_action("wp_enqueque_scripts", "getThemeStyles");


function getThemeJS(){

	wp_enqueque_script("mustache_js", get_template_directory_uri() . "assets/js/mustache.min.js");

	wp_enqueque_script("covervid_js", get_template_directory_uri() . "assets/js/covervid.min.js");

	wp_enqueque_script("sticky_js", get_template_directory_uri() . "assets/js/jquery.sticky.js");

	wp_enqueque_script("default_photo_swipe_js", get_template_directory_uri() . "assets/js/photoswipe-ui-default.min.js");

	wp_enqueque_script("min_photo_swipe_js", get_template_directory_uri() . "assets/js/photoswipe.min.js");

	wp_enqueque_script("load_listing_js", get_template_directory_uri() . "assets/js/load-listing.js");

	wp_enqueque_script("viwer_min_js", get_template_directory_uri() . "assets/js/viewer.min.js");

	wp_enqueque_script("main_js", get_template_directory_uri() . "assets/js/main.js");

	wp_enqueque_script("listing_js", get_template_directory_uri() . "assets/js/listing.js");

	wp_enqueque_script("blgpst_js", get_template_directory_uri() . "assets/js/blgpst.js");

	wp_enqueque_script("bs_animation_js", get_template_directory_uri() . "assets/js/bs-animation.js");

	wp_enqueque_script("listing_carousel_js", get_template_directory_uri() . "assets/js/listing-carousel.js");

	wp_enqueque_script("luxhom_js", get_template_directory_uri() . "assets/js/luxhom.js");

}
/*
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
  
*/
add_action( 'wp_enqueque_scripts', 'getThemeJS');





 ?>