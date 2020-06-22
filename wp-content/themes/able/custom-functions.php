<?php

/*
Define directory variables.
*/
require get_template_directory() . '/inc/define.php';

/*
Disable Guttenberg
*/
add_filter( 'use_block_editor_for_post', '__return_false' );

/*
Get eyecatch data (featured image) for posts
*/
function get_eyecatch_data( $post_id, $thumbnail = "full", $noimage = false ) {
    if ( has_post_thumbnail( $post_id ) ) {
        $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $thumbnail, true );

        return $image_data[0];
    } elseif ( empty( $noimage ) ) {
        return false;
    } else {
        return $noimage;
    }
}

/*
Remove Posts from wp-admin menu
*/
function post_remove() { 
   remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove'); 

/*
Register Column Post Type
*/
register_taxonomy('column_category', 'column', array(
    'hierarchical' => true,
    'labels' => array(
        'name' => __('Column Category'),
        'singular_name' => __('column_category'),
        'search_items' => __('Search Category'),
        'popular_items' => __('Popular Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Categories'),
        'parent_item_colon' => __('Parent Categories:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'separate_items_with_commas' => __('Separate categories with commas'),
        'add_or_remove_items' => __('Add or remove Categories'),
        'choose_from_most_used' => __('Choose from the most used Categories'),
        'menu_name' => __('Column Categories'),
    ),
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'column-category'),
));

$column_args = array(
    'labels' => array(
        'name'               => 'Columns',
        'singular_name'      => 'Column',
        'add_new'            => 'New Column',
        'add_new_item'       => 'Add New Column',
        'edit_item'          => 'Edit Column',
        'new_item'           => 'New Column',
        'view_item'          => 'View Column',
        'search_items'       => 'Search Columns',
        'not_found'          => 'No Columns Found',
        'not_found_in_trash' => 'No Columns In The Trash'
    ),
    'description' => 'Columns written by Admin',
    'public' => true,
    'has_archive' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'supports' => array( 'title', 'editor', 'thumbnail',),
    'rewrite' => array('slug' => 'column'),
    'menu_position' => 8,
);
register_post_type( 'column', $column_args );

/*
Register Work Post Type
*/
register_taxonomy('work_category', 'work', array(
    'hierarchical' => true,
    'labels' => array(
        'name' => __('Work Category'),
        'singular_name' => __('work_category'),
        'search_items' => __('Search Category'),
        'popular_items' => __('Popular Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Categories'),
        'parent_item_colon' => __('Parent Categories:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'separate_items_with_commas' => __('Separate categories with commas'),
        'add_or_remove_items' => __('Add or remove Categories'),
        'choose_from_most_used' => __('Choose from the most used Categories'),
        'menu_name' => __('Work Categories'),
    ),
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'work-category'),
));

$work_args = array(
    'labels' => array(
        'name'               => 'Works',
        'singular_name'      => 'Work',
        'add_new'            => 'New Work',
        'add_new_item'       => 'Add New Work',
        'edit_item'          => 'Edit Work',
        'new_item'           => 'New Work',
        'view_item'          => 'View Work',
        'search_items'       => 'Search Works',
        'not_found'          => 'No Works Found',
        'not_found_in_trash' => 'No Works In The Trash'
    ),
    'description' => 'Works written by Admin',
    'public' => true,
    'has_archive' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'supports' => array( 'title', 'editor', 'thumbnail',),
    'rewrite' => array('slug' => 'work'),
    'menu_position' => 8,
);
register_post_type( 'work', $work_args );

/*
Trim text for headings and descriptions
*/
function get_excerpt($text, $charNumber) {
    $text = strip_tags($text);

    if (strlen($text) > $charNumber) {
        $text = substr($text, 0, $charNumber);
        // $text = substr($text, 0, strrpos($text, ' '));
        $text .= '...';
    }
    return $text;
}