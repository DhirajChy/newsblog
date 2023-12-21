<?php
/**
 * newsblog Theme Customizer
 *
 * @package newsblog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function newsblog_customize_register( $wp_customize ) {



	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_panel('theme_options', array(
		'title' => 'Theme Options',
		'description' => 'A theme option for additional customization',
		'priority' => 100

	));
//Category Design Post
	$wp_customize->add_section('category_option', array(
		'title' => __('category Design', 'newsblog'),
		'priority' => 1,
		'panel' => 'theme_options'
	));
	$categories = array(
        'Beauty' => 'Beauty',
        'Fashion and Style' => 'Fashion and Style',
        'Food and Wellness' => 'Food and Wellness',
        'Lifestyle' => 'Lifestyle',
    );
	
	$wp_customize->add_setting('first_column', array(
		'default' => '',
		
	));
	$wp_customize->add_control('first_column', array(
		'label' => __('First Column', 'newsblog'),
		'section' => 'category_option',
		'type' => 'radio',
		'choices' => $categories,
		
	));

	$wp_customize->add_setting('second_column', array(
		'default' => '',
		
	));
	$wp_customize->add_control('second_column', array(
		'label' => __('Second Column', 'newsblog'),
		'section' => 'category_option',
		'type' => 'radio',
		'choices' => $categories,
	));

	$wp_customize->add_setting('third_column', array(
		'default' => '',
		
	));
	$wp_customize->add_control('third_column', array(
		'label' => __('Third Column', 'newsblog'),
		'section' => 'category_option',
		'type' => 'radio',
		'choices' => $categories,
	));

	$wp_customize->add_setting('fourth_column', array(
		'default' => '',
		
	));
	$wp_customize->add_control('fourth_column', array(
		'label' => __('Fourth Column', 'newsblog'),
		'section' => 'category_option',
		'type' => 'radio',
		'choices' => $categories,
	));
	$wp_customize->add_setting('categorydesign-checkbox', array(
		'default' => true,
		
	));
	$wp_customize->add_control('categorydesign-checkbox', array(
		'label' => __('Show/Hide Posts', 'newsblog'),
		'section' => 'category_option',
		'type' => 'checkbox',
		
	));

// Editors Post
$wp_customize->add_section('editors_picks', array(
	'title' => __('Editors Picks', 'newsblog'),
	'priority' => 2,
	'panel' => 'theme_options'
));


$wp_customize->add_setting('title', array(
	'default' => '',
	
));
$wp_customize->add_control('title', array(
	'label' => __('Title', 'newsblog'),
	'section' => 'editors_picks',
	'type' => 'text',
	
	
));

$wp_customize->add_setting('Editors-checkbox', array(
	'default' => true,
	
));
$wp_customize->add_control('Editors-checkbox', array(
	'label' => __('Show/Hide Posts', 'newsblog'),
	'section' => 'editors_picks',
	'type' => 'checkbox',
	
));


//Top picks of the month post
$wp_customize->add_section('month_picks', array(
	'title' => __('Top Picks Of Month', 'newsblog'),
	'priority' => 3,
	'panel' => 'theme_options'
));


$wp_customize->add_setting('toppicks_heading', array(
	'default' => '',
	
));
$wp_customize->add_control('toppicks_heading', array(
	'label' => __('Title', 'newsblog'),
	'section' => 'month_picks',
	'type' => 'text',
	
	
));

$wp_customize->add_setting('top_picks_checkbox', array(
	'default' => true,
	
));
$wp_customize->add_control('top_picks_checkbox', array(
	'label' => __('Show/Hide Posts', 'newsblog'),
	'section' => 'month_picks',
	'type' => 'checkbox',
	
));

//Fashion and style
$wp_customize->add_section('fashion_style', array(
	'title' => __('Fashion and Style', 'newsblog'),
	'priority' => 4,
	'panel' => 'theme_options'
));


$wp_customize->add_setting('fas-style-heading', array(
	'default' => '',
	
));
$wp_customize->add_control('fas-style-heading', array(
	'label' => __('Title', 'newsblog'),
	'section' => 'fashion_style',
	'type' => 'text',
	
	
));

$wp_customize->add_setting('fas-style-checkbox', array(
	'default' => true,
	
));
$wp_customize->add_control('fas-style-checkbox', array(
	'label' => __('Show/Hide Posts', 'newsblog'),
	'section' => 'fashion_style',
	'type' => 'checkbox',
	
));

//Beauty Post

$wp_customize->add_section('beauty', array(
	'title' => __('Beauty', 'newsblog'),
	'priority' => 5,
	'panel' => 'theme_options'
));


$wp_customize->add_setting('beauty-heading', array(
	'default' => '',
	
));
$wp_customize->add_control('beauty-heading', array(
	'label' => __('Title', 'newsblog'),
	'section' => 'beauty',
	'type' => 'text',
	
	
));

$wp_customize->add_setting('beauty-checkbox', array(
	'default' => true,
	
));
$wp_customize->add_control('beauty-checkbox', array(
	'label' => __('Show/Hide Posts', 'newsblog'),
	'section' => 'beauty',
	'type' => 'checkbox',
	
));

//slider Post
$wp_customize->add_section('slider_option', array(
	'title' => __('Slider Post', 'newsblog'),
	'priority' => 6,
	'panel' => 'theme_options'
));

$wp_customize->add_setting('first_text', array(
	'default' => '',
	
));
$wp_customize->add_control('first_text', array(
	'label' => __(' Title 1', 'newsblog'),
	'section' => 'slider_option',
	'type' => 'text',
	
	
));

$wp_customize->add_setting('second_text', array(
	'default' => '',
	
));
$wp_customize->add_control('second_text', array(
	'label' => __(' Title 2', 'newsblog'),
	'section' => 'slider_option',
	'type' => 'text',
	
	
));

$wp_customize->add_setting('third_text', array(
	'default' => '',
	
));
$wp_customize->add_control('third_text', array(
	'label' => __('Title 3', 'newsblog'),
	'section' => 'slider_option',
	'type' => 'text',
	
	
));

$wp_customize->add_setting('fourth_text', array(
	'default' => '',
	
));
$wp_customize->add_control('fourth_text', array(
	'label' => __('Title 4', 'newsblog'),
	'section' => 'slider_option',
	'type' => 'text',
	
	
));
$wp_customize->add_setting('slider-checkbox', array(
	'default' => true,
	
));
$wp_customize->add_control('slider-checkbox', array(
	'label' => __('Show/Hide Posts', 'newsblog'),
	'section' => 'slider_option',
	'type' => 'checkbox',
	
));

//Trending Now Post

$wp_customize->add_section('trending_now', array(
	'title' => __('Trending Now Post', 'newsblog'),
	'priority' => 7,
	'panel' => 'theme_options'
));
$wp_customize->add_setting('trending_title', array(
	'default' => '',
	
));
$wp_customize->add_control('trending_title', array(
	'label' => __(' Title', 'newsblog'),
	'section' => 'trending_now',
	'type' => 'text',
));

$wp_customize->add_setting('heading_text1', array(
	'default' => '',
	
));
$wp_customize->add_control('heading_text1', array(
	'label' => __(' Heading Post1', 'newsblog'),
	'section' => 'trending_now',
	'type' => 'text',
));


$wp_customize->add_setting('subheading_text1', array(
'default' => '',

));
$wp_customize->add_control('subheading_text1', array(
'label' => __('Subheading Post1', 'newsblog'),
'section' => 'trending_now',
'type' => 'text',
));
$wp_customize->add_setting( 'post_image1', array(
'default' => '',
'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control( 'post_image1', array(
'label' => 'Post Image1 url',
'section' => 'trending_now',
'type' => 'text',

));



$wp_customize->add_setting('heading_text2', array(
'default' => '',

));
$wp_customize->add_control('heading_text2', array(
'label' => __(' Heading Post2', 'newsblog'),
'section' => 'trending_now',
'type' => 'text',
));


$wp_customize->add_setting('subheading_text2', array(
'default' => '',

));
$wp_customize->add_control('subheading_text2', array(
'label' => __('Subheading Post2', 'newsblog'),
'section' => 'trending_now',
'type' => 'text',
));
$wp_customize->add_setting( 'post_image2', array(
'default' => '',
'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control( 'post_image2', array(
'label' => 'Post Image2 url',
'section' => 'trending_now',
'type' => 'text',

));
$wp_customize->add_setting('trending-checkbox', array(
'default' => true,

));
$wp_customize->add_control('trending-checkbox', array(
'label' => __('Show/Hide Posts', 'newsblog'),
'section' => 'trending_now',
'type' => 'checkbox',

));


//Footer Logo and copyright
	
$wp_customize->add_section('footerlogo_copyright', array(
	'title' => __('Footerlogo and Copyright', 'newsblog'),
	'priority' => 8,
	'panel' => 'theme_options'
));


$wp_customize->add_setting('logo', array(
	'default' => '',
	
));
$wp_customize->add_control('logo', array(
	'label' => __(' Logo', 'newsblog'),
	'section' => 'footerlogo_copyright',
	'type' => 'text',
));


$wp_customize->add_setting('copyright', array(
'default' => '',

));
$wp_customize->add_control('copyright', array(
'label' => __('Copyright', 'newsblog'),
'section' => 'footerlogo_copyright',
'type' => 'textarea',
));
$wp_customize->add_setting( 'text_link', array(
'default' => '',

));

$wp_customize->add_control( 'text_link', array(
'label' => 'Text and Link',
'section' => 'footerlogo_copyright',
'type' => 'text',

));

//Footer1 
$wp_customize->add_section('footer1_customize', array(
	'title' => __('Footer1 Customize', 'newsblog'),
	'priority' => 9,
	'panel' => 'theme_options'
));
$wp_customize->add_setting('main_text', array(
	'default' => '',
 
));

$wp_customize->add_control('main_text', array(
	'label' => 'Main Text',
	'section' => 'footer1_customize', 
	'settings' => 'main_text',
));
$wp_customize->add_setting('text1', array(
	'default' => '',
   
));

$wp_customize->add_control('text1', array(
	'label' => ' Text1',
	'section' => 'footer1_customize', 
	'settings' => 'text1',
));

$wp_customize->add_setting('text2', array(
	'default' => '',
   
));

$wp_customize->add_control('text2', array(
	'label' => ' Text2',
	'section' => 'footer1_customize', 
	'settings' => 'text2',
));

$wp_customize->add_setting('text3', array(
	'default' => '',
   
));

$wp_customize->add_control('text3', array(
	'label' => ' Text3',
	'section' => 'footer1_customize', 
	'settings' => 'text3',
));

$wp_customize->add_setting('text4', array(
	'default' => '',
   
));

$wp_customize->add_control('text4', array(
	'label' => ' Text4',
	'section' => 'footer1_customize', 
	'settings' => 'text4',
));

//Categories FOOTER
$wp_customize->add_section('categories_footer', array(
	'title' => __('Categories Footer', 'newsblog'),
	'priority' => 10,
	'panel' => 'theme_options'
));
$wp_customize->add_setting('categoriesmain_text', array(
	'default' => '',
 
));

$wp_customize->add_control('categoriesmain_text', array(
	'label' => ' categories Main Text',
	'section' => 'categories_footer', 
	
));
$wp_customize->add_setting('categoriestext1', array(
	'default' => '',
   
));

$wp_customize->add_control('categoriestext1', array(
	'label' => 'categories Text1',
	'section' => 'categories_footer', 
	
));

$wp_customize->add_setting('categoriestext2', array(
	'default' => '',
   
));

$wp_customize->add_control('categoriestext2', array(
	'label' => 'Categories Text2',
	'section' => 'categories_footer', 
	
));

$wp_customize->add_setting('categoriestext3', array(
	'default' => '',
   
));

$wp_customize->add_control('categoriestext3', array(
	'label' => ' Categories Text3',
	'section' => 'categories_footer', 
   
));

$wp_customize->add_setting('categoriestext4', array(
	'default' => '',
   
));

$wp_customize->add_control('categoriestext4', array(
	'label' => ' Categories Text4',
	'section' => 'categories_footer', 

));

//social icon footer

$wp_customize->add_section('socialicon_footer', array(
	'title' => __('Social Icon Footer', 'newsblog'),
	'priority' => 11,
	'panel' => 'theme_options'
));
$wp_customize->add_setting('socialiconmain_text', array(
	'default' => '',

));

$wp_customize->add_control('socialiconmain_text', array(
	'label' => ' Social icon Main Text',
	'section' => 'socialicon_footer', 
	
));
$wp_customize->add_setting('facebook_link', array(
	'default' => '',
	'sanitize_callback'=>'esc_url_raw',
   
));

$wp_customize->add_control('facebook_link', array(
	'label' => 'Social icon Text1',
	'section' => 'socialicon_footer', 
	
));

$wp_customize->add_setting('twitter_link', array(
	'default' => '',
	'sanitize_callback'=>'esc_url_raw',
));

$wp_customize->add_control('twitter_link', array(
	'label' => 'Social icon Text2',
	'section' => 'socialicon_footer', 
	
));

$wp_customize->add_setting('linkedin_link', array(
	'default' => '',
	'sanitize_callback'=>'esc_url_raw',
));

$wp_customize->add_control('linkedin_link', array(
	'label' => ' Social icon Text3',
	'section' => 'socialicon_footer', 
   
));

$wp_customize->add_setting('dribbble_link', array(
	'default' => '',
	'sanitize_callback'=>'esc_url_raw',
));

$wp_customize->add_control('dribbble_link', array(
	'label' => ' Social icon Text4',
	'section' => 'socialicon_footer', 

));
//sidebar 
$wp_customize->add_section('sidebar', array(
	'title' => __('Sidebar', 'newsblog'),
	'priority' => 12,
	'panel' => 'theme_options'
));
$wp_customize->add_setting('sidebar_text1', array(
	'default' => '',
 
));

$wp_customize->add_control('sidebar_text1', array(
	'label' => 'Sidebar Text1',
	'section' => 'sidebar', 
	
));
$wp_customize->add_setting('sidebar_text2', array(
	'default' => '',
   
));

$wp_customize->add_control('sidebar_text2', array(
	'label' => 'Sidebar Text2',
	'section' => 'sidebar', 
	
));

$wp_customize->add_setting('sidebar_text3', array(
	'default' => '',
   
));

$wp_customize->add_control('sidebar_text3', array(
	'label' => 'Sidebar Text3',
	'section' => 'sidebar', 
	
));
$wp_customize->add_setting('sidebar_text4', array(
	'default' => '',
   
));

$wp_customize->add_control('sidebar_text4', array(
	'label' => 'Sidebar Text4',
	'section' => 'sidebar', 
	
));
$wp_customize->add_setting('sidebar_text5', array(
	'default' => '',
   
));

$wp_customize->add_control('sidebar_text5', array(
	'label' => 'Sidebar Text5',
	'section' => 'sidebar', 
	
));
$wp_customize->add_setting('sidebar-checkbox', array(
	'default' => true,
	
));
$wp_customize->add_control('sidebar-checkbox', array(
	'label' => __('Show/Hide Posts', 'newsblog'),
	'section' => 'sidebar',
	'type' => 'checkbox',
	
));


$wp_customize->add_section('sponsor_sidebar', array(
	'title' => __('sponsor sidebar', 'newsblog'),
	'priority' => 13,
	'panel' => 'theme_options'
));



$wp_customize->add_setting('sidebar_text6', array(
'default' => '',

));

$wp_customize->add_control('sidebar_text6', array(
'label' => 'Sidebar Text6',
'section' => 'sponsor_sidebar', 

));
$wp_customize->add_setting('sidebar_text7', array(
'default' => '',
'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control('sidebar_text7', array(
'label' => 'Sidebar Text7',
'section' => 'sponsor_sidebar', 

));
$wp_customize->add_setting('sidebar_text8', array(
'default' => '',


));

$wp_customize->add_control('sidebar_text8', array(
'label' => 'Sidebar Text8',
'section' => 'sponsor_sidebar', 

));

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'newsblog_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'newsblog_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'newsblog_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function newsblog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function newsblog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function newsblog_customize_preview_js() {
	wp_enqueue_script( 'newsblog-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'newsblog_customize_preview_js' );
