<?php 
/*
 * Plugin Name: natwoj-wp-custom-plugin
 * Plugin URI: https://wejdzonline.pl 
 * Description: My first plugin
 * Version: 1.0
 * Author: Natalia Wojcik
*/

function natwoj_register_post_type() {

 
    $labels = array( 
 
        'name' => __( 'Movies' , 'wejdzonline' ),
 
        'singular_name' => __( 'Movie' , 'wejdzonline' ),
 
        'add_new' => __( 'New Movie' , 'wejdzonline' ),
 
        'add_new_item' => __( 'Add New Movie' , 'wejdzonline' ),
 
        'edit_item' => __( 'Edit Movie' , 'wejdzonline' ),
 
        'new_item' => __( 'New Movie' , 'wejdzonline' ),
 
        'view_item' => __( 'View Movie' , 'wejdzonline' ),
 
        'search_items' => __( 'Search Movies' , 'wejdzonline' ),
 
        'not_found' =>  __( 'No Movies Found' , 'wejdzonline' ),
 
        'not_found_in_trash' => __( 'No Movies found in Trash' , 'wejdzonline' ),
 
    );
 
    $args = array(
 
        'labels' => $labels,
 
        'has_archive' => true,
 
        'public' => true,
 
        'hierarchical' => false,
 
        'supports' => array(
 
            'title', 
 
            'editor', 
 
            'excerpt', 
 
            'custom-fields', 
 
            'thumbnail',
 
            'page-attributes'
 
        ),
 
        'rewrite'   => array( 'slug' => 'movies' ),
 
        'show_in_rest' => true
 
    );
 
}

add_action( 'init', 'natwoj_register_post_type' );


 