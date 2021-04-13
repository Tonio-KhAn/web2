<?php
    function zoo_post_types(){
        register_post_type('event',array(
            'capability_type' => 'event',
            'map_meta_cap'=> true,
            'public' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => 'Event'
            ),
            'menu_icon' => 'dashicons-calendar',
            'rewrite'=> array('slug' => 'events'),
            'has_archive' => true,
            'supports' => array('title', 'editor','excerpt', 'custom-fields')
        ));
        
        register_post_type('locations',array(
            'capability_type' => 'location',
            'map_meta_cap'=> true,
            'public' => true,
            'labels' => array(
                'name' => 'Location',
                'add_new_item' => 'Add New Location',
                'edit_item' => 'Edit Location',
                'all_items' => 'All Locations',
                'singular_name' => 'Location'
            ),
            'menu_icon' => 'dashicons-admin-site',
            'rewrite'=> array('slug' => 'information/locations'),
            'has_archive' => true,
            'supports' => array('title', 'editor','excerpt', 'custom-fields')
        ));
        
        register_post_type('animal-information',array(
            'capability_type' => 'animal-information',
            'map_meta_cap'=> true,
            'public' => true,
            'labels' => array(
                'name' => 'Animal Information',
                'add_new_item' => 'Add New Animal Information',
                'edit_item' => 'Edit Animal Information',
                'all_items' => 'All Animal Information',
                'singular_name' => 'Animal Information'
            ),
            'menu_icon' => 'dashicons-analytics',
            'rewrite'=> array('slug' => 'information/animal-information'),
            'has_archive' => true,
            'supports' => array('title', 'editor','excerpt', 'custom-fields')
        ));
        
        register_post_type('animal',array(
            'capability_type' => 'animal',
            'map_meta_cap'=> true,
            'public' => true,
            'labels' => array(
                'name' => 'Animals',
                'add_new_item' => 'Add New Animal',
                'edit_item' => 'Edit Animal',
                'all_items' => 'All Animals',
                'singular_name' => 'Animal'
            ),
            'description' => 'Information about our animals.',
            'menu_icon' => 'dashicons-pets',
            'rewrite'=> array('slug' => 'animals'),
            'has_archive' => true,
            'supports' => array('title', 'editor','excerpt', 'custom-fields')
        ));
    }
    
    add_action('init', 'zoo_post_types');
?>