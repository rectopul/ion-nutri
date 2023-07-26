<?php  
function theme_enqueue_scripts()
{
	//wp_enqueue_script('jquery');

	/**
	 * FURN
	 */

	wp_enqueue_style('Furn Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', false, '4.2.1');
	wp_enqueue_style('Furn Style', get_template_directory_uri() . '/assets/css/style.min.css', false, '4.2.1');
	wp_enqueue_style('RCT Style', get_template_directory_uri() . '/assets/css/style.css', false, '4.2.8');
	wp_enqueue_style('slick-slide', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', false, '1.8.1');
	wp_enqueue_style('slick-slide', get_template_directory_uri() . '/assets/css/slick-theme.css', false, '1.8.1');
	wp_enqueue_style('slick-slide2', get_template_directory_uri() . '/assets/css/slick.css', false, '1.8.1');
	wp_enqueue_style('Open Sans Font', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap', false, '1.0.0');

	//Get Bootstrap JS
	wp_enqueue_script('slick-slide-js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.8.1', true); 
	wp_enqueue_script('Bootstrap JS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '4.2.1', true); 
    wp_register_script('font-awesome', 'https://kit.fontawesome.com/0b8a3876f8.js', array(), '3.3.1', true);
    wp_script_add_data('font-awesome', ['crossorigin'], ['anonymous']);
    //wp_enqueue_script('font-awesome');

	//  main
	//wp_enqueue_script( 'main' );

	wp_register_script('main', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '4.2.1', true);
	wp_enqueue_script('main');

	wp_enqueue_script( 'wp-api' );

	wp_localize_script( 'wp-api', 'wpApiSettings', array(
		'root' => esc_url_raw( rest_url() ),
		'nonce' => wp_create_nonce( 'wc_store_api' )
	) );


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

if (!function_exists('custom_theme_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function custom_theme_setup()
	{
		/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on auaha, use a find and replace
	 * to change 'auaha' to the name of your theme in all the template files.
	 */
		load_theme_textdomain('auaha', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
		add_theme_support('title-tag');

		/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'On nutri'),
		));

		/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('auaha_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 *	Custom images size
		 *	Add Images sizes customizables in system
		 */

		add_image_size('solutions_thumbnail', 376, 185, true);
		add_image_size('case', 831, 398, false);
		add_image_size('perfil', 190, 190, false);
		add_image_size('marketplace', 630, 113, true);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 126,
			'width'       => 126,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array('site-title', 'site-description')
		));

		add_theme_support('post-thumbnails', array('marketplace', 'post', 'gallery-items', 'audio-items', 'video-items', 'page', 'event-items', 'staff'));

		/**
		 * Add custom header
		 */
		$args = array(
			'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
			'default-text-color' => '000',
			'width'              => 1920,
			'height'             => 1888,
			'flex-width'         => true,
			'flex-height'        => true,
		);
		add_theme_support('custom-header', $args);

		add_filter('show_admin_bar', '__return_false');

		
	}
endif;
add_action('after_setup_theme', 'custom_theme_setup');

/**
 * Insert Custom Controls
 */
require get_template_directory() . '/inc/custom_controls.php';


// Função para registrar o custom post type
function registrar_custom_post_type() {
    $labels = array(
        'name' => 'Diferenciais',
        'singular_name' => 'Diferencial',
        'add_new' => 'Novo Diferencial',
        'add_new_item' => 'Adicionar Novo Diferencial',
        'edit_item' => 'Editar Diferencial',
        'new_item' => 'Novo Diferencial',
        'view_item' => 'Ver Diferencial',
        'search_items' => 'Buscar Diferenciais',
        'not_found' => 'Nenhum diferencial encontrado',
        'not_found_in_trash' => 'Nenhum diferencial encontrado na lixeira',
        'parent_item_colon' => '',
        'menu_name' => 'Meus Diferenciais',
        'menu_icon' => 'dashicons-book'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
		'show_ui' => true,
		'show_in_menu' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'diferenciais'),
        'taxonomies' => array( 'category', 'post_tag' ),
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'author', 'comments'),
        'menu_position' => null,
        'exclude_from_search' => false,
        'show_in_rest' => true // Para habilitar o uso do Gutenberg (Gutenberg é o editor de blocos do WordPress).
    );

    register_post_type('diferenciais', $args);

    $parceiros_labels = array(
        'name' => 'Parceiros',
        'singular_name' => 'Parceiro',
        'add_new' => 'Novo Parceiro',
        'add_new_item' => 'Adicionar Novo Parceiro',
        'edit_item' => 'Editar Parceiro',
        'new_item' => 'Novo Parceiro',
        'view_item' => 'Ver Parceiro',
        'search_items' => 'Buscar Parceiros',
        'not_found' => 'Nenhum Parceiro encontrado',
        'not_found_in_trash' => 'Nenhum Parceiro encontrado na lixeira',
        'parent_item_colon' => '',
        'menu_name' => 'Meus Parceiros',
        'menu_icon' => 'dashicons-book'
    );

    $parceiros_args = array(
        'labels' => $parceiros_labels,
        'public' => true,
        'has_archive' => true,
		'show_ui' => true,
		'show_in_menu' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'parceiros'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('thumbnail'),
        'menu_position' => null,
        'exclude_from_search' => false,
        'show_in_rest' => true // Para habilitar o uso do Gutenberg (Gutenberg é o editor de blocos do WordPress).
    );

    register_post_type('parceiros', $parceiros_args);
}
add_action('init', 'registrar_custom_post_type');
