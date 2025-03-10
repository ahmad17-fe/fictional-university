<?php

function university_files()
{
    // JS
    wp_enqueue_script("university_main_js", get_theme_file_uri('/build/index.js'), ['jquery'], '1.0', true);

    // CSS
    wp_enqueue_style("google_fonts", 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style("font_awesome", 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style("university_main_styles", get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style("university_extra_styles", get_theme_file_uri('/build/index.css'));
}

add_action("wp_enqueue_scripts", "university_files");

function university_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('firstFooterLocation', 'First Footer Location');
    register_nav_menu('secondFooterLocation', 'Second Footer Location');
    add_theme_support('title-tag');
}

add_action("after_setup_theme", "university_features");

/**
 * TODO: Best Practice this function move into mu-plugins folder
 *
 * ./mu-plugins/university-post-types.php
 * */
function university_post_types()
{
    register_post_type("event", [
        "supports"     => ["title", "editor", "excerpt"],
        "rewrite"      => ["slug" => "events"],
        "has_archive"  => true,
        "public"       => true,
        "show_in_rest" => true,
        'labels'       => [
            "name"          => "Events",
            "add_new_item"  => "Add New Event",
            "edit_item"     => "Edit Event",
            "all_items"     => "All Events",
            "singular_name" => "Event",
        ],
        "menu_icon"    => "dashicons-calendar",
    ]);
}

add_action('init', 'university_post_types');
