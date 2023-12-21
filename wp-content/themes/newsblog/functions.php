<?php
/**
 * newsblog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newsblog
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function newsblog_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on newsblog, use a find and replace
		* to change 'newsblog' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'newsblog', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'newsblog' ),
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
			'newsblog_custom_background_args',
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
add_action( 'after_setup_theme', 'newsblog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function newsblog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'newsblog_content_width', 640 );
}
add_action( 'after_setup_theme', 'newsblog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function newsblog_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'newsblog' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'newsblog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'newsblog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function newsblog_scripts() {
	wp_enqueue_style( 'newsblog-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'newsblog-style-starter-style', get_template_directory_uri() .'/css/style-starter.css', array(), _S_VERSION );
	wp_enqueue_style( 'newsblog-goggle-api-style', '//fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'newsblog-googleapi-style','//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap', array(), _S_VERSION );





	wp_style_add_data( 'newsblog-style', 'rtl', 'replace' );

	wp_enqueue_script( 'newsblog-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'newsblog-jquery-navigation', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsblog-theme-change-navigation', get_template_directory_uri() . '/js/theme-change.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsblog-owl-carousel-navigation', get_template_directory_uri() . '/js/owl.carousel.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'newsblog-boostrap-navigation', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'newsblog_scripts' );

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

//
function menu_register(){
			
	register_nav_menus(
		array(
			'header_menu' => __('Header Menu'),
			'footer_menu' => __('Footer Menu'),  )

   );
   
}
add_action('init','menu_register');

//





function editorsinfo() {
	$post_id = get_the_ID();
    $editor_info = get_post_meta($post_id, 'editors_info', true);
    $is_checked = !empty($editor_info) && $editor_info === '1' ? 'checked="checked"' : '';

    echo '<div>
        <input type="checkbox" name="editorspic" value="1" ' . $is_checked . '>
        <label>Editor\'s Pick</label>
    </div>';
	
 
 
 }
 
 function Editors_meta_box() {
	
	add_meta_box('Editors', 'Editors', 'editorsinfo', 'post', 'normal', 'high');
}
 
 add_action('add_meta_boxes', 'Editors_meta_box');
 
 // Save post
 add_action('save_post', 'editors_infos');
 
 function editors_infos($post_id) {
	 global $post;
	if (isset($_POST['editorspic'])) {
		
		
			$editorspic = $_POST['editorspic'];
			update_post_meta($post_id, 'editors_info', '1');

	}
	else {
        // If the checkbox is not checked, you may want to delete the post meta.
        delete_post_meta($post_id, 'editors_info');
	}
	
	
	
 }
 function customize_trendingnow($wp_customize) {
	
	
}
add_action('customize_register', 'customize_trendingnow');

//
function register_homesidebar_post() {
    register_sidebar(array(
        'name'          => ' My Custom post1', 
        'id'            => 'custom-post1',
        'description'   => __('Custom footer sidebar ', 'newsblog'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'register_homesidebar_post');



function addressinfo() { ?>
	
	
	<div>
	<label>Address</label>
	<input type="text"  name="address" value="<?php echo get_post_meta(get_the_ID(), 'address_info', true); ?>">
	</div>
	<label>Phone Number</label>
	<input type="text" class="regular-text" name="phonenum" value="<?php echo get_post_meta(get_the_ID(), 'phone_num', true); ?>">
	<label>Email</label>
	<input type="textarea" name="email" value="<?php echo get_post_meta(get_the_ID(), 'Email', true); ?>">
	<label>Google Map</label>
	<textarea id="google" name="google" rows="4" cols="50">
	<?php echo get_post_meta(get_the_ID(), 'Google', true); ?>
	</textarea>
	
 <?php
 }
 
 function address_add_meta_box() {
	$current_page_template = get_page_template_slug();
	if($current_page_template == 'contact-page.php'){

	add_meta_box('Adress', 'Address Information', 'addressinfo', 'page', 'normal', 'high');
 }
}
 
 add_action('add_meta_boxes', 'address_add_meta_box');
 
 // Save post
 add_action('save_post', 'address_info');
 
 function address_info($page_id) {
	 global $post;
	if (isset($_POST['address'])) {
		
		
		// Check for incoming data
		update_post_meta($page_id, 'address_info', $_POST['address']);
	}
	global $post;
	if (isset($_POST['phonenum'])) {
  
		// Check for incoming data
		update_post_meta($page_id, 'phone_num',$_POST['phonenum']);
 
	}
	global $post;
	if (isset($_POST['email'])) {
  
		// Check for incoming data
		update_post_meta($page_id, 'Email',$_POST['email']);
 
	}
	global $post;
	if (isset($_POST['google'])) {
  
		// Check for incoming data
		update_post_meta($page_id, 'Google',$_POST['google']);
 
	}
 }


 function custom_categories_meta_box($term) {
	$categories_option = get_term_meta($term->term_id, 'categories_option', true);?>
    <label for="category_Layout">Categories Layout:</label>
            <select name="categories_option" id="categories_option">
                <option value="small" <?php selected($categories_option, 'small'); ?>>Small Layout</option>
                <option value="big" <?php selected($categories_option, 'big'); ?>>Big Layout</option>
                
            </select>
          
    
		
	<?php
 }
add_action('category_edit_form_fields', 'custom_categories_meta_box');

function save_custom_category_data($term_id) {
    if (isset($_POST['categories_option'])) {
        $categories_option = sanitize_text_field($_POST['categories_option']);
        update_term_meta($term_id, 'categories_option', $categories_option);
    }
}
add_action('edited_category', 'save_custom_category_data');








