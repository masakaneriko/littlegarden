<?php
// // Displays the name of the Template used
// add_action('wp_head', 'show_template');
// function show_template()
// {
//     global $template;
//     echo basename($template);
// }


// Enable Maintenance Mode
// function wp_maintenance_mode()
// {
//     if (!current_user_can('edit_themes') || !is_user_logged_in()) {
//         wp_die('<h1>Under Maintenance</h1><br />Website under planned maintenance. Please check back later.');
//     }
// }
// add_action('get_header', 'wp_maintenance_mode');



// Disable WordPress Automatic Updates 
define('WP_AUTO_UPDATE_CORE', false);

// Enable Recaptcha on cf7 pages only
function block_recaptcha_badge()
{
    if (!is_page(array('contact', '1032'))) {
        wp_dequeue_script('google-recaptcha');
        wp_deregister_script('google-recaptcha');
        add_filter('wpcf7_load_js', '__return_false');
        add_filter('wpcf7_load_css', '__return_false');
    }
}
add_action('wp_print_scripts', 'block_recaptcha_badge');



// 404 Redirect
add_action('wp_head', 'not_found_redirect');
function not_found_redirect()
{
    if (is_404()) {
        echo '<meta http-equiv="refresh" content="5; URL=' . home_url() . '">';
    }
}

//Add Google Tag Manager to <head>
add_action('wp_head', 'google_tag_head');
function google_tag_head()
{
?>
    <meta name="google-site-verification" content="ZacENMgD1SHW0Ip4EqfDLDk8QTOeV0pnakbY5tBPCJ4" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W45V4ZK');
    </script>
    <!-- End Google Tag Manager -->
<?php
}


//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

// Remove rankmath from admin bar
function remove_rankmath($wp_admin_bar)
{
    $wp_admin_bar->remove_node('rank-math');
}
add_action('admin_bar_menu', 'remove_rankmath', 999);


// Enable thumbnail support for posts
add_theme_support('post-thumbnails');
// Disable WP Image Resizing
add_filter('big_image_size_threshold', '__return_false');


// add the defer attribute to all js files except jQuery
function defer_parsing_of_js($url)
{
    if (is_user_logged_in()) return $url; //don't break WP Admin
    if (FALSE === strpos($url, '.js')) return $url;
    if (strpos($url, 'jquery.js')) return $url;
    return str_replace(' src', ' defer src', $url);
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);

// Enqueue GSAP
add_action('wp_enqueue_scripts', 'add_gsap_animation');
function add_gsap_animation()
{
    wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js', null, null, true);
    wp_enqueue_script('gsap-tween-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', null, null, true);
    wp_enqueue_script('gsap-scrolltrigger-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js', null, null, true);
    wp_enqueue_script('gsap-text-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/TextPlugin.min.js', null, null, true);
    wp_enqueue_script('theme-js', get_stylesheet_directory_uri() . '/js/script.js', null, null, true);
}

// Enqueue the main styles
add_action('wp_enqueue_scripts', 'main_style');
function main_style()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', array(), null);
    // wp_enqueue_style('sass-style', get_template_directory_uri() . '/css/main.css', array(), null);
    wp_enqueue_style('sass-style', get_template_directory_uri() . '/css/main.min.css', array(), null);
}

// Enqueue Slick.css
add_action('wp_enqueue_scripts', 'slick_css');
function slick_css()
{
    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
}

// Enqueue Font Awesome 6.1.1
add_action('wp_enqueue_scripts', 'font_awesome');
function font_awesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
}
// Enqueue Google Font
add_action('wp_enqueue_scripts', 'google_fonts');
function google_fonts()
{
    wp_enqueue_style('google-fonts-en', 'https://fonts.googleapis.com/css2?family=Caveat&display=block', false);
    wp_enqueue_style('google-fonts-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=block', false);
    wp_enqueue_style('google-fonts-kiwi', 'https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=block', false);
    wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=block', false);
    wp_enqueue_style('google-fonts-fredericka', 'https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=block', false);
}


// Enqueue script for Service-Annual-Events
add_action('wp_enqueue_scripts', 'enqueue_scripts_events');
function enqueue_scripts_events()
{
    // Only enqueue on specified page
    if (is_single('annual-events')) {
        wp_enqueue_script('annual-events-js', get_stylesheet_directory_uri() . '/js/annual-events.js', null, null, true);
    }
}
// Enqueue script for Contact
add_action('wp_enqueue_scripts', 'enqueue_scripts_contact');
function enqueue_scripts_contact()
{
    // Only enqueue on specified page
    if (is_page_template('contact.php')) {
        wp_enqueue_script('contact-js', get_stylesheet_directory_uri() . '/js/contact.js', null, null, true);
    }
}
// Enqueue script for Download-Form page
add_action('wp_enqueue_scripts', 'enqueue_scripts_download_form');
function enqueue_scripts_download_form()
{
    // Only enqueue on specified page
    if (is_page('1032')) {
        wp_enqueue_script('download-form-js', get_stylesheet_directory_uri() . '/js/download-form.js', null, null, true);
    }
}


// Register Custom Post 'Blog'
function create_post_type_blog()
{
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
    );
    $labels = array(
        'name'          => __('Blogs'),
        'singular_name' => __('Blog'),
        'all_items'     => __('All Blogs'),
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'blog'),
        'show_in_rest'  => true, // To use Gutenberg editor
        'supports'      => $supports,
        'hierarchical'  => false,
        'menu_position' =>  5,
        'menu_icon'     => 'dashicons-edit-page',
    );
    register_post_type('blog', $args);
}
add_action('init', 'create_post_type_blog', 0);

// Register Custom Taxonomy 'Schools'
function custom_taxonomy_school()
{
    $labels = array(
        'name'                       => _x('Schools', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x('School', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __('Schools', 'text_domain'),
        'all_items'                  => __('All Schools', 'text_domain'),
        'parent_item'                => __('Parent School', 'text_domain'),
        'parent_item_colon'          => __('Parent School:', 'text_domain'),
        'new_item_name'              => __('New School Name', 'text_domain'),
        'add_new_item'               => __('Add New School', 'text_domain'),
        'edit_item'                  => __('Edit School', 'text_domain'),
        'update_item'                => __('Update School', 'text_domain'),
        'separate_items_with_commas' => __('Separate Schools with commas', 'text_domain'),
        'search_items'               => __('Search Schools', 'text_domain'),
        'add_or_remove_items'        => __('Add or Remove Schools', 'text_domain'),
        'choose_from_most_used'      => __('Choose from Most Used Schools', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'show_tagcloud'              => false,
        'rewrite'                    => array('slug' => 'blog/%school%'),
    );

    register_taxonomy('school', 'blog', $args);
}
add_action('init', 'custom_taxonomy_school', 10);

// Register Custom Taxonomy 'Class'
function custom_taxonomy_class()
{
    $labels = array(
        'name'                       => _x('Class', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x('Class', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __('Classes', 'text_domain'),
        'all_items'                  => __('All Classes', 'text_domain'),
        'parent_item'                => __('Parent Class', 'text_domain'),
        'parent_item_colon'          => __('Parent Class:', 'text_domain'),
        'new_item_name'              => __('New Class Name', 'text_domain'),
        'add_new_item'               => __('Add New Class', 'text_domain'),
        'edit_item'                  => __('Edit Class', 'text_domain'),
        'update_item'                => __('Update Class', 'text_domain'),
        'separate_items_with_commas' => __('Separate Classes with commas', 'text_domain'),
        'search_items'               => __('Search Classes', 'text_domain'),
        'add_or_remove_items'        => __('Add or Remove Classes', 'text_domain'),
        'choose_from_most_used'      => __('Choose from Most Used Classes', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'show_tagcloud'              => false,
        'rewrite'                    => array('slug' => 'blog/%class%'),
    );

    register_taxonomy('class', 'blog', $args);
}
add_action('init', 'custom_taxonomy_class', 0);



// Remove 'Post' from admin sidebar. Using Custom Post 'News' below instead for news
function post_remove()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'post_remove');

// Register Custom Post 'News'
function create_post_type_news()
{
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
    );
    $labels = array(
        'name'          => __('News'),
        'singular_name' => __('News'),
        'all_items'     => __('All News'),
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'news'),
        'show_in_rest'  => true, // To use Gutenberg editor
        'supports'      => $supports,
        'hierarchical'  => false,
        'menu_position' =>  5,
        'menu_icon'     => 'dashicons-welcome-write-blog',
    );
    register_post_type('news', $args);
}
add_action('init', 'create_post_type_news', 0);



// Register Custom Post 'Center'
function create_post_type_center()
{
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
    );
    $labels = array(
        'name'          => __('Centers'),
        'singular_name' => __('Center'),
        'all_items'     => __('All Centers'),
        'edit_item'     => __('Edit Center', 'text_domain'),
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'center'),
        'show_in_rest'  => true, // To use Gutenberg editor
        'supports'      => $supports,
        'hierarchical'  => false,
        'menu_position' =>  5,
        'menu_icon'     => 'dashicons-admin-multisite',
    );
    register_post_type('center', $args);
}
add_action('init', 'create_post_type_center', 0);

// // Register Custom Taxonomy 'Centers'
function custom_taxonomy_centers()
{
    $labels = array(
        'name'                       => _x('Centers', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x('Center', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __('Centers', 'text_domain'),
        'all_items'                  => __('All Centerss', 'text_domain'),
        'parent_item'                => __('Parent Center', 'text_domain'),
        'parent_item_colon'          => __('Parent Center:', 'text_domain'),
        'new_item_name'              => __('New Center Name', 'text_domain'),
        'add_new_item'               => __('Add New Center', 'text_domain'),
        'edit_item'                  => __('Edit Center', 'text_domain'),
        'update_item'                => __('Update Center', 'text_domain'),
        'separate_items_with_commas' => __('Separate Centers with commas', 'text_domain'),
        'search_items'               => __('Search Centers', 'text_domain'),
        'add_or_remove_items'        => __('Add or Remove Centers', 'text_domain'),
        'choose_from_most_used'      => __('Choose from Most Used Centers', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'show_tagcloud'              => false,
        'rewrite'                    => array('slug' => 'center/%centers%'),
    );

    register_taxonomy('centers', 'center', $args);
}
add_action('init', 'custom_taxonomy_centers', 0);



// Custom Post 'Service'
function create_post_type_service()
{
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
    );
    $labels = array(
        'name' => __('Services'),
        'singular_name' => __('Service'),
        'all_items' => __('All Services'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'service'),
        'show_in_rest'  => true,
        'supports' => $supports,
        'hierarchical' => false,
        'menu_position' =>  5,
        'menu_icon' =>  'dashicons-buddicons-activity',
    );
    register_post_type('service', $args);
}
add_action('init', 'create_post_type_service');




// ####################
// Paginations
// ####################
//  Set Posts per page
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    if ($query->is_archive('blog')) {
        $query->set('posts_per_page', '10'); //  Set Posts per page
    }
    if ((is_category() || is_tag()) && $query->is_archive() && empty($query->query_vars['suppress_filters'])) {
        $query->set('post_type', array(
            'post', 'blog'
        ));
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

// Fix pagination for custom post 'Blog'
function fix_kb_category_pagination($wp_rewrite)
{
    unset($wp_rewrite->rules['blog/([^/]+)/page/?([0-9]{1,})/?$']);
    $wp_rewrite->rules = array(
        'blog/?$' => $wp_rewrite->index . '?post_type=blog',
        'blog/page/?([0-9]{1,})/?$' => $wp_rewrite->index . '?post_type=blog&paged=' . $wp_rewrite->preg_index(1),
        'blog/([^/]+)/page/?([0-9]{1,})/?$' => $wp_rewrite->index . '?school=' . $wp_rewrite->preg_index(1) . '&paged=' . $wp_rewrite->preg_index(2),
    ) + $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'fix_kb_category_pagination');



// ####################
// Custom Short Codes 
// ####################

// Calls the shortcodes.php file 
include 'shortcodes/shortcodes.php';
