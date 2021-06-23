<?php

function ziishop_link() {



    /*
     
                        CSS HERE
       
    */

    wp_register_style( 'ziishop_googleapis',"https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700ii%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic", array(), _S_VERSION );
    wp_enqueue_style('ziishop_googleapis');

	wp_register_style( 'ziishop_awesome', get_template_directory_uri()."/css/font-awesome.min.css", array(), _S_VERSION );
    wp_enqueue_style('ziishop_awesome');


	wp_register_style( 'ziishop_bootstrap', get_template_directory_uri()."/css/bootstrap.min.css", array(), _S_VERSION );
    wp_enqueue_style('ziishop_bootstrap');

	wp_register_style( 'ziishop_rangeSlider', get_template_directory_uri()."/css/ion.rangeSlider.css", array(), _S_VERSION );
    wp_enqueue_style('ziishop_rangeSlider');

	wp_register_style( 'ziishop_rangeSlider_rangeSlider', get_template_directory_uri()."/css/ion.rangeSlider.skinFlat.css", array(), _S_VERSION );
    wp_enqueue_style('ziishop_rangeSlider_rangeSlider');

	wp_register_style( 'ziishop_bxslider', get_template_directory_uri()."/css/jquery.bxslider.css", array(), _S_VERSION );
    wp_enqueue_style('ziishop_bxslider');

	wp_register_style( 'ziishop_fancybox', get_template_directory_uri()."/css/jquery.fancybox.css", array(), _S_VERSION );
    wp_enqueue_style('ziishop_fancybox');

	wp_register_style( 'ziishop_flexslider', get_template_directory_uri()."/css/flexslider.css", array(), _S_VERSION );
    wp_enqueue_style('ziishop_flexslider');

	wp_register_style( 'ziishop_swiper', get_template_directory_uri()."/css/swiper.css", array(), _S_VERSION );
    wp_enqueue_style('ziishop_swiper');

	wp_register_style( 'ziishop_main_style', get_template_directory_uri()."/css/style.css", array(), _S_VERSION );
    wp_enqueue_style('ziishop_main_style');

	wp_register_style( 'ziishop_media_main', get_template_directory_uri()."/css/media.css", array(), _S_VERSION );
    wp_enqueue_style('ziishop_media_main');

	wp_register_style( 'ziishop-', get_template_directory_uri()."/", array(), _S_VERSION );

	wp_register_style( 'ziishop-', get_template_directory_uri()."/", array(), _S_VERSION );






    /*
     
                        JS HERE
       
    */



    wp_register_script( 'ziishop_jquery', get_template_directory_uri()."/jquery-1.11.2.min.", array(), _S_VERSION );
    wp_enqueue_script('ziishop_jquery');


    wp_register_script( 'ziishop_bxslider', get_template_directory_uri()."/jquery.bxslider.min.", array(), _S_VERSION );
    wp_enqueue_script('ziishop_bxslider');





    wp_register_script( 'ziishop_thumbs', get_template_directory_uri()."/js/fancybox/helpers/jquery.fancybox-thumbs.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_thumbs');


    wp_register_script( 'ziishop_fancybox', get_template_directory_uri()."/js/fancybox/fancybox.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_fancybox');




    wp_register_script( 'ziishop_flexslider', get_template_directory_uri()."/js/jquery.flexslider-min.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_flexslider');


    wp_register_script( 'ziishop_swiper', get_template_directory_uri()."/js/swiper.jquery.min.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_swiper');


    wp_register_script( 'ziishop_waypoints', get_template_directory_uri()."/js/jquery.waypoints.min.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_waypoints');


    wp_register_script( 'ziishop_progressbar', get_template_directory_uri()."/js/progressbar.min.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_progressbar');


    wp_register_script( 'ziishop_rangeSlider', get_template_directory_uri()."/js/ion.rangeSlider.min.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_rangeSlider');


    wp_register_script( 'ziishop_chosen', get_template_directory_uri()."/js/chosen.jquery.min.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_chosen');


    wp_register_script( 'ziishop_Brazzers', get_template_directory_uri()."/js/jQuery.Brazzers-Carousel.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_Brazzers');


    wp_register_script( 'ziishop_plugins', get_template_directory_uri()."/js/plugins.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_plugins');


    wp_register_script( 'ziishop_main_js', get_template_directory_uri()."/js/main.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_main_js');


    wp_register_script( 'ziishop_googleapis', "https://maps.googleapis.com/maps/api/js?key=AIzaSyDhAYvx0GmLyN5hlf6Uv_e9pPvUT3YpozE", array(), _S_VERSION );
    wp_enqueue_script('ziishop_googleapis');


    wp_register_script( 'ziishop_gmap', get_template_directory_uri()."/js/gmap.js", array(), _S_VERSION );
    wp_enqueue_script('ziishop_gmap');


};
add_action( 'wp_enqueue_scripts', 'ziishop_link' );



?>