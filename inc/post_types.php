<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-7-17
 * Time: 下午11:27
 */
add_action('init', 'slideshow_type');
function slideshow_type() {
    register_post_type( 'slider_type',
        array(
            'labels' => array(
                'name' => 'Slideshow',
                'singular_name' => 'Slideshow',
                'add_new' => 'Add',
                'add_new_item' => 'Add a new slideshow',
                'edit_item' => 'Edit a slideshow',
                'new_item' => 'New slideshow'
            ),
            'public' => true,
            'has_archive' => false,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'supports' => array( 'title','thumbnail','custom-fields'),
        )
    );
    register_post_type( 'game_slider_type',
        array(
            'labels' => array(
                'name' => 'Game Slideshow',
                'singular_name' => 'GameSlideshow',
                'add_new' => 'Add',
                'add_new_item' => 'Add a new slideshow',
                'edit_item' => 'Edit a slideshow',
                'new_item' => 'New slideshow'
            ),
            'public' => true,
            'has_archive' => false,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'supports' => array( 'title','thumbnail','custom-fields'),
        )
    );
}

add_filter( 'manage_edit-slider_type_columns', 'slider_type_custom_columns' );
add_filter( 'manage_edit-game_slider_type_columns', 'slider_type_custom_columns' );
function slider_type_custom_columns( $columns ) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => 'Name',
        'hasLink' => 'Link to',
        'thumbnail' => 'Thumbnail',
        'date' => 'Date'
    );
    return $columns;
}

add_action( 'manage_slider_type_posts_custom_column', 'slider_type_manage_custom_columns', 10, 2 );
add_action( 'manage_game_slider_type_posts_custom_column', 'slider_type_manage_custom_columns', 10, 2 );
function slider_type_manage_custom_columns($column, $post_id ) {
    global $post;
    switch( $column ) {
        case "hasLink":
            if(get_post_meta($post->ID, "sp_link", true)){
                echo get_post_meta($post->ID, "sp_link", true);
            } else {echo '----';}
            break;
        case "thumbnail":
            $slider_pic = get_post_meta($post->ID, "slider_pic", true);
            echo '<img src="'.$slider_pic.'" width="95" height="41" alt="" />';
            break;
        default :
            break;
    }
}