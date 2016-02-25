<?php
/**
 * losercoffee functions and definitions
 *
 * @package losercoffee
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'losercoffee_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function losercoffee_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on losercoffee, use a find and replace
	 * to change 'losercoffee' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'losercoffee', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'losercoffee' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'losercoffee_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // losercoffee_setup
add_action( 'after_setup_theme', 'losercoffee_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function losercoffee_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'losercoffee' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'losercoffee_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function losercoffee_scripts() {
	wp_enqueue_style( 'losercoffee-style', get_stylesheet_uri() );

	wp_enqueue_script( 'losercoffee-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'losercoffee-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'losercoffee_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Add Woocommerce compatibility
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

function clean_text () {
	ob_start();
		the_content();
		$old_content = ob_get_clean();
		$new_content = strip_tags($old_content, '<p><a><b><br />');
		echo $new_content;
}

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Header-Bild',
            'id' => 'header-image',
            'post_type' => 'page'
        )
    );
}

function header_img() {
	if (class_exists('MultiPostThumbnails')) :
    MultiPostThumbnails::the_post_thumbnail(
        get_post_type(),
        'header-image'
    );
	endif;
}

// Übersetzungen
add_filter('gettext', 'translate_text');
add_filter('ngettext', 'translate_text');

function translate_text($translated) {
$translated = str_ireplace('In den Warenkorb', 'Warenkorb', $translated);
$translated = str_ireplace('Ausführung wählen', 'Varianten', $translated);
$translated = str_ireplace('Ähnliche Produkte', 'Andere Kunden kauften auch', $translated);
$translated = str_ireplace('Wähle eine Ausführung', 'Mahlgrad', $translated);
return $translated;
}

// Hide Tabs
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

// Custom Tabs Product View
add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {

	// Adds the new tab

	$tabs['test_tab'] = array(
		'title' 	=> __( 'Produktbeschreibung', 'woocommerce' ),
		'priority' 	=> 50,
		'callback' 	=> 'woo_new_product_tab_content'
	);

	return $tabs;

}
function woo_new_product_tab_content() {

	// The new tab content
	global $post;
	global $product;
	$desc = $post->post_content;
	$cat = $product->get_categories();
	var_dump($cat);
	if (strpos($cat, "filterkaffee") !== false) {
		$catOut .=  "<span class='icon-filterkaffee' title='Filter'></span>";
	}
	if (strpos($cat, "herdkanne") !== false) {
		$catOut .=  "<span class='icon-espressokocher' title='Herdkanne'></span>";
		}
	if (strpos($cat, "frenchpress") !== false) {
		$catOut .=  "<span class='icon-frenchpress' title='Frenchpress'></span>";
		}
	if (strpos($cat, "siebtraeger") !== false) {
		$catOut .=  "<span class='icon-siebtraeger' title='Siebträger'></span>";
		}
	if (strpos($cat, "vollautomat") !== false) {
		$catOut .=  "<span class='icon-vollautomat' title='Vollautomat'></span>";
		}

	echo '
		<row class="col-md-6">
			<h2>Produktbeschreibung</h2>
			<p>
				'.$desc.'
			</p>
		</row>
		<row class="col-md-6">
			<h2>Besonders geeignet für</h2>
			<p class="icons">
				'.$catOut.'
			</p>
			<p class="socialMedia">
				<a href=""><span class="icon-facebook" title="Facebook"></span></a>
				<a href=""><span class="icon-facebook" title="Facebook"></span></a>
				<a href=""><span class="icon-facebook" title="Facebook"></span></a>
				<a href=""><span class="icon-facebook" title="Facebook"></span></a>
			</p>
		</row>

	';

}

// Mindespreis anzeigen in Übersicht
add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);
function custom_variation_price( $price, $product ) {
$price = '';
if ( !$product->min_variation_price || $product->min_variation_price !== $product->max_variation_price ) $price .= '<span class="from">' . _x('', 'min_price', 'woocommerce') . ' </span>';
$price .= woocommerce_price($product->min_variation_price);
return $price;
}
