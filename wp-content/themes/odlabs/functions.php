<?php

function odlabs_theme_support()
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("html5", [
        "search-form",
        "comment-form",
        "comment-list",
        "gallery",
        "caption",
    ]);
    add_theme_support("custom-logo", [
        "height" => 96,
        "width" => 316,
        "flex-height" => true,
        "flex-width" => true,
    ]);
}

####################################################

// Register menus
register_nav_menus(
    ["primary-menu" => "Top Navigation"],
    ["footer-menu" => "Footer Navigation"]
);

add_action("after_setup_theme", "odlabs_theme_support");

function add_additional_classes($classes, $item, $args)
{
    if (isset($args->a_class)) {
        $classes[] = $args->a_class;
    }

    return $classes;
}
add_filter("nav_menu_css_class", "add_additional_classes", 10, 3);

class NoListWalker extends Walker_Nav_Menu
{
    public function start_el(
        &$output,
        $item,
        $depth = 0,
        $args = null,
        $current_object_id = 0
    ) {
        $classes = esc_attr(
            implode(
                " ",
                apply_filters(
                    "nav_menu_css_class",
                    $item->classes,
                    $item,
                    $args,
                    $depth
                )
            )
        );
        $url = esc_url($item->url);
        $title = apply_filters("the_title", $item->title, $item->ID);

        $output .= "<a href=\"$url\" class=\"$classes\">$title</a>\n";
    }

    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        // no additional markup
    }
}

####################################################

/**
 * Enqueue styles and scripts for the theme.
 */
function odlabs_register_styles()
{
    $version = wp_get_theme()->get("Version");

    wp_enqueue_style(
        "odlabs-style",
        home_url("/src/output.css"),
        [],
        $version,
        "all"
    );

    wp_enqueue_style(
        "odlabs-bootstrap-icons",
        "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css",
        [],
        "1.13.1",
        "all"
    );
}

add_action("wp_enqueue_scripts", "odlabs_register_styles");

function odlabs_register_scripts()
{
    $version = wp_get_theme()->get("Version");

    wp_enqueue_script(
        "odlabs-header",
        get_template_directory_uri() . "/assets/js/Header.js",
        [],
        $version,
        true
    );

    wp_enqueue_script(
        "odlabs-navigation",
        get_template_directory_uri() . "/assets/js/Navigation.js",
        [],
        $version,
        true
    );
}

add_action("wp_enqueue_scripts", "odlabs_register_scripts");

?>
