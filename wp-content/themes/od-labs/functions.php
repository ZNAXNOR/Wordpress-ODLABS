<?php
/**
 * OD LABS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OD LABS
 * @since OD LABS 1.0
 */

/**
 * Register theme support features.
 */

function od_labs_theme_support()
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

/**
 * Register block styles.
 */

if (!function_exists("od_labs_block_styles")):
    /**
     * Register custom block styles
     *
     * @since OD LABS 1.0
     * @return void
     */
    function od_labs_block_styles()
    {
        register_block_style("core/details", [
            "name" => "arrow-icon-details",
            "label" => __("Arrow icon", "od-labs"),
            /*
             * Styles for the custom Arrow icon style of the Details block
             */
            "inline_style" => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
        ]);
        register_block_style("core/post-terms", [
            "name" => "pill",
            "label" => __("Pill", "od-labs"),
            /*
             * Styles variation for post terms
             * https://github.com/WordPress/gutenberg/issues/24956
             */
            "inline_style" => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
        ]);
        register_block_style("core/list", [
            "name" => "checkmark-list",
            "label" => __("Checkmark", "od-labs"),
            /*
             * Styles for the custom checkmark list block style
             * https://github.com/WordPress/gutenberg/issues/51480
             */
            "inline_style" => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
        ]);
        register_block_style("core/navigation-link", [
            "name" => "arrow-link",
            "label" => __("With arrow", "od-labs"),
            /*
             * Styles for the custom arrow nav link block style
             */
            "inline_style" => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
        ]);
        register_block_style("core/heading", [
            "name" => "asterisk",
            "label" => __("With asterisk", "od-labs"),
            "inline_style" => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
        ]);
    }
endif;

add_action("init", "od_labs_block_styles");

/**
 * Enqueue block stylesheets.
 */

if (!function_exists("od_labs_block_stylesheets")):
    /**
     * Enqueue custom block stylesheets
     *
     * @since OD LABS 1.0
     * @return void
     */
    function od_labs_block_stylesheets()
    {
        /**
         * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
         * for a specific block. These will only get loaded when the block is rendered
         * (both in the editor and on the front end), improving performance
         * and reducing the amount of data requested by visitors.
         *
         * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
         */
        wp_enqueue_block_style("core/button", [
            "handle" => "od-labs-button-style-outline",
            "src" => get_parent_theme_file_uri("assets/css/button-outline.css"),
            "ver" => wp_get_theme(get_template())->get("Version"),
            "path" => get_parent_theme_file_path(
                "assets/css/button-outline.css"
            ),
        ]);

        wp_enqueue_block_style("core/tailwindcss", [
            "handle" => "od-labs-tailwindcss",
            "src" => home_url("/src/output.css"),
            "ver" => wp_get_theme(get_template())->get("Version"),
            "path" => home_url("/src/output.css"),
        ]);
    }
endif;

add_action("init", "od_labs_block_stylesheets");

/**
 * Register pattern categories.
 */

if (!function_exists("od_labs_pattern_categories")):
    /**
     * Register pattern categories
     *
     * @since OD LABS 1.0
     * @return void
     */
    function od_labs_pattern_categories()
    {
        register_block_pattern_category("od_labs_page", [
            "label" => _x("Pages", "Block pattern category", "od-labs"),
            "description" => __(
                "A collection of full page layouts.",
                "od-labs"
            ),
        ]);
    }
endif;

add_action("init", "od_labs_pattern_categories");

/**
 * Register pattern categories.
 */

register_nav_menus(
    ["primary-menu" => "Top Navigation"],
    ["footer-menu" => "Footer Navigation"]
);

add_action("after_setup_theme", "od_labs_theme_support");

function add_additional_classes($classes, $item, $args)
{
    if (isset($args->a_class)) {
        $classes[] = $args->a_class;
    }

    return $classes;
}
add_filter("nav_menu_css_class", "add_additional_classes", 10, 3);

/**
 * Register walkers
 */

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

/**
 * Register Styles
 */

function od_labs_register_styles()
{
    $version = wp_get_theme()->get("Version");

    wp_enqueue_style(
        "od_labs-tailwind-css",
        home_url("/src/output.css"),
        [],
        $version,
        "all"
    );

    wp_enqueue_style(
        "od_labs-bootstrap-icons",
        "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css",
        [],
        "1.13.1",
        "all"
    );
}

add_action("wp_enqueue_scripts", "od_labs_register_styles");

/**
 * Register Scripts
 */

function od_labs_register_scripts()
{
    $version = wp_get_theme()->get("Version");

    wp_enqueue_script(
        "od_labs_header",
        get_template_directory_uri() . "/assets/js/Header.js",
        [],
        $version,
        true
    );

    wp_enqueue_script(
        "od_labs_navigation",
        get_template_directory_uri() . "/assets/js/Navigation.js",
        [],
        $version,
        true
    );

    wp_enqueue_script(
        "tailwind_cdn",
        "https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4",
        [],
        "4",
        true
    );
}

add_action("wp_enqueue_scripts", "od_labs_register_scripts");
