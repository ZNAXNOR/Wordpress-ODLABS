<?php
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
        "odlabs-navigation",
        get_template_directory_uri() . "/assets/js/Navigation.js",
        [],
        $version,
        true
    );
}

add_action("wp_enqueue_scripts", "odlabs_register_scripts");

?>
