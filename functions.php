<?php
/**
 * Estatein functions and definitions
 *
 * @package Estatein
 */

if ( ! function_exists( 'estatein_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function estatein_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		register_nav_menus(
			array(
				'header-menu' => esc_html__( 'Header Menu', 'estatein' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'estatein' ),
			)
		);

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
	}
endif;
add_action( 'after_setup_theme', 'estatein_setup' );

/**
 * Enqueue scripts and styles.
 */
function estatein_scripts() {
	wp_enqueue_style( 'estatein-style', get_stylesheet_uri(), array(), '1.1.0' );
}
add_action( 'wp_enqueue_scripts', 'estatein_scripts' );

/**
 * Register Custom Post Types
 */
function estatein_register_cpts() {
	// Properties (Properties CPT)
	register_post_type( 'properties', array(
		'labels' => array(
			'name'          => __( 'Properties', 'estatein' ),
			'singular_name' => __( 'Property', 'estatein' ),
		),
		'public'      => true,
		'has_archive' => true,
		'menu_icon'   => 'dashicons-admin-home',
		'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'show_in_rest' => true,
	) );

	// Testimonials
	register_post_type( 'testimonials', array(
		'labels' => array(
			'name'          => __( 'Testimonials', 'estatein' ),
			'singular_name' => __( 'Testimonial', 'estatein' ),
		),
		'public'      => true,
		'menu_icon'   => 'dashicons-testimonial',
		'supports'    => array( 'title', 'editor' ),
		'show_in_rest' => true,
	) );

	// FAQs (Preguntas Frecuentes)
	register_post_type( 'faqs', array(
		'labels' => array(
			'name'          => __( 'Preguntas Frecuentes', 'estatein' ),
			'singular_name' => __( 'Pregunta Frecuente', 'estatein' ),
		),
		'public'      => true,
		'menu_icon'   => 'dashicons-editor-help',
		'supports'    => array( 'title', 'editor' ),
		'show_in_rest' => true,
	) );

	// Team Members (Equipo)
	register_post_type( 'team', array(
		'labels' => array(
			'name'          => __( 'Equipo de Trabajo', 'estatein' ),
			'singular_name' => __( 'Miembro de Equipo', 'estatein' ),
		),
		'public'      => true,
		'menu_icon'   => 'dashicons-groups',
		'supports'    => array( 'title', 'editor', 'thumbnail' ),
		'show_in_rest' => true,
	) );

	// Services (Business Services)
	register_post_type( 'services', array(
		'labels' => array(
			'name'          => __( 'Business Services', 'estatein' ),
			'singular_name' => __( 'Service', 'estatein' ),
		),
		'public'      => true,
		'menu_icon'   => 'dashicons-admin-tools',
		'supports'    => array( 'title', 'editor', 'thumbnail' ),
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'estatein_register_cpts' );

/**
 * REGISTER ACF LOCAL FIELD GROUPS (Professional Backend Implementation)
 */
if ( function_exists( 'acf_add_local_field_group' ) ) :

	// Property Details Fields
	acf_add_local_field_group( array(
		'key' => 'group_property_details',
		'title' => 'Property details',
		'fields' => array(
			array(
				'key' => 'field_property_price',
				'label' => 'Precio',
				'name' => 'property_price',
				'type' => 'text',
				'description' => 'Ej: $500,000',
			),
			array(
				'key' => 'field_property_location',
				'label' => 'Ubicación',
				'name' => 'property_location',
				'type' => 'text',
				'description' => 'Ej: Malibu, CA',
			),
			array(
				'key' => 'field_property_bedrooms',
				'label' => 'Habitaciones',
				'name' => 'property_bedrooms',
				'type' => 'number',
				'wrapper' => array( 'width' => '33' ),
			),
			array(
				'key' => 'field_property_bathrooms',
				'label' => 'Baños',
				'name' => 'property_bathrooms',
				'type' => 'number',
				'wrapper' => array( 'width' => '33' ),
			),
			array(
				'key' => 'field_property_size',
				'label' => 'Superficie (m2)',
				'name' => 'property_size',
				'type' => 'text',
				'wrapper' => array( 'width' => '33' ),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'properties',
				),
			),
		),
	) );

	// Hero Section Fields (Home)
	acf_add_local_field_group( array(
		'key' => 'group_hero_home',
		'title' => 'Gestión del Hero (Home)',
		'fields' => array(
			array(
				'key' => 'field_hero_title',
				'label' => 'Título del Hero',
				'name' => 'hero_title',
				'type' => 'text',
			),
			array(
				'key' => 'field_hero_description',
				'label' => 'Descripción',
				'name' => 'hero_description',
				'type' => 'textarea',
			),
			array(
				'key' => 'field_hero_image',
				'label' => 'Imagen de Fondo',
				'name' => 'hero_image',
				'type' => 'image',
				'return_format' => 'url',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
				),
			),
		),
	) );

endif;
