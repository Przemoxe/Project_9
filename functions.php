<?php
/**
 * ideo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ideo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ideo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ideo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ideo, use a find and replace
		 * to change 'ideo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ideo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Header Menu Location', 'ideo' ),
			
				
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'ideo_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'ideo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ideo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ideo_content_width', 640 );
}
add_action( 'after_setup_theme', 'ideo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ideo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ideo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ideo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ideo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ideo_scripts() {
	wp_enqueue_style('botstrapCSS', get_theme_file_uri('/vendor/bootstrap/css/bootstrap.min.css'));
	wp_enqueue_style('templatemo-digimediaCSS', get_theme_file_uri('/assets/css/templatemo-digimedia-v1.css'));
	wp_enqueue_style('fontawesomeCSS', get_theme_file_uri('/assets/css/fontawesome.css'));
	wp_enqueue_style('animatedCSS', get_theme_file_uri('/assets/css/animated.css'));
	wp_enqueue_style('singleCSS', get_theme_file_uri('/assets/css/single.css'));
	wp_enqueue_style('owlCSS', get_theme_file_uri('/assets/css/owl.css'));
	wp_enqueue_style('indexCSS', get_theme_file_uri('/assets/css/index.css'));
	wp_enqueue_style('headerCSS', get_theme_file_uri('/assets/css/header.css'));
	wp_enqueue_style('section-7-contactCSS', get_theme_file_uri('/assets/css/section-7-contact.css'));
	wp_enqueue_style('section-6-blogCSS', get_theme_file_uri('/assets/css/section-6-blog.css'));

	wp_style_add_data( 'ideo-style', 'rtl', 'replace' );


    wp_enqueue_script('jqueryJSss', get_theme_file_uri('/vendor/jquery/jquery.min.js'),array(), 1.0, true);
	wp_enqueue_script('bootstrapBundleJS', get_theme_file_uri('/vendor/bootstrap/js/bootstrap.bundle.min.js'),array('jquery'), 1.0, true);
	wp_enqueue_script('owl-carouselJS', get_theme_file_uri('/assets/js/owl-carousel.js'),array('jquery'), 1.0, true);
	wp_enqueue_script('animationJS', get_theme_file_uri('/assets/js/animation.js'),array('jquery'), 1.0, true);
	wp_enqueue_script('imagesloadedJS', get_theme_file_uri('/assets/js/imagesloaded.js'),array('jquery'), 1.0, true);
	wp_enqueue_script('customJS', get_theme_file_uri('/assets/js/custom.js'),array('jquery'), 1.0, true);
	wp_enqueue_script( 'ideo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ideo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Blocks/Sections Gutenberg.
 */

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

          acf_register_block_type(array(
              'name'              => 'section-1-banner',
              'title'             => __('section-1-banner'),
              'description'       => __('A custom section-1-banner block.'),
              'render_template'   => 'template-parts/blocks/section-1-banner.php',
              'category'          => 'formatting',
          ));

          acf_register_block_type(array(
            'name'              => 'section-2-about',
            'title'             => __('section-2-about'),
            'description'       => __('A custom section-2-about block.'),
            'render_template'   => 'template-parts/blocks/section-2-about.php',
            'category'          => 'formatting',
        ));

          acf_register_block_type(array(
            'name'              => 'section-3-services',
            'title'             => __('section-3-services'),
            'description'       => __('A custom section-3-services block.'),
            'render_template'   => 'template-parts/blocks/section-3-services.php',
            'category'          => 'formatting',
        ));


          acf_register_block_type(array(
            'name'              => 'section-4-free-quote',
            'title'             => __('section-4-free-quote'),
            'description'       => __('A custom section-4-free-quote block.'),
            'render_template'   => 'template-parts/blocks/section-4-free-quote.php',
            'category'          => 'formatting',
        ));


		acf_register_block_type(array(
            'name'              => 'section-5-portfolio',
            'title'             => __('section-5-portfolio'),
            'description'       => __('A custom section-5-portfolio block.'),
            'render_template'   => 'template-parts/blocks/section-5-portfolio.php',
            'category'          => 'formatting',
        ));


		acf_register_block_type(array(
            'name'              => 'section-6-blog',
            'title'             => __('section-6-blog'),
            'description'       => __('A custom section-6-blog block.'),
            'render_template'   => 'template-parts/blocks/section-6-blog.php',
            'category'          => 'formatting',
        ));

		acf_register_block_type(array(
            'name'              => 'section-7-contact',
            'title'             => __('section-7-contact'),
            'description'       => __('A custom section-7-contact block.'),
            'render_template'   => 'template-parts/blocks/section-7-contact.php',
            'category'          => 'formatting',
        ));
         
    }
}



/**
 *  Local JSON.
 */

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $path;
    
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    
    
    // return
    return $paths;
    
}

/**
 *  Custom Post Type
 */


 function ideo_post_types(){
	 register_post_type('portfolio', array(
		 'public'   => true,
		 'has_archive' => true,
		 'supports' => array('thumbnail', 'editor', 'title', 'field', 'custom-fields'),
		 'labels'   => array(
			 'name' => 'Portfolio',
			 'add_new' => 'Add New Portfolio' ,
			 'all_items'          => __( 'All Portfolio'),

			 
		 ),
		 'menu_icon' => 'dashicons-embed-photo',
	 ));


 }


 

 add_action('init', 'ideo_post_types');

 function add_custom_taxonomies() {
	// Add new "brand" taxonomy to Posts
	register_taxonomy('brand', 'portfolio', array(
	  // Hierarchical taxonomy (like categories)
	  'hierarchical' => true,
	  'show_ui'                    => true,
	  'show_admin_column'          => true,
	  'show_in_nav_menus'          => true,
	  'show_tagcloud'              => true,
	  
	  
	  // This array of options controls the labels displayed in the WordPress Admin UI
	  'labels' => array(
		'name' => _x( 'Categories', 'taxonomy general name' ),
		'singular_name' => _x( 'Category', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Categories' ),
		'all_items' => __( 'All Categories' ),
		'parent_item' => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item' => __( 'Edit Category' ),
		'update_item' => __( 'Update Category' ),
		'add_new_item' => __( 'Add New Category' ),
		'new_item_name' => __( 'New Category Name' ),
		'menu_name' => __( 'Categories' ),
	  ),
	  // Control the slugs used for this taxonomy
	  'rewrite' => array(
		'slug' => 'Portfolio', // This controls the base slug that will display before each term
		'with_front' => false, // Don't display the category base before "/locations/"
		'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
	  ),
	));
  }
  add_action( 'init', 'add_custom_taxonomies', 0 );



  /**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {
	global $typenow;
	$post_type = 'portfolio'; // change to your post type
	$taxonomy  = 'brand'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'portfolio'; // change to your post type
	$taxonomy  = 'brand'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}

  /**
 * 
 * api
 * 
 */
wp_register_script('aa_js_googlemaps_script',  'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAnLkCdypye1LpXl3Biz4lmt6Pbr8LzeIg'); // with Google Maps API fix
		wp_enqueue_script('aa_js_googlemaps_script');


function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAnLkCdypye1LpXl3Biz4lmt6Pbr8LzeIg');
}
add_action('acf/init', 'my_acf_init');



  /**
 * 
 * hover menu cpt
 * 
 */
