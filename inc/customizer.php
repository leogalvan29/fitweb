<?php
/**
 * fitness_theme Theme Customizer
 *
 * @package fitness_theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fitness_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'fitness_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'fitness_theme_customize_partial_blogdescription',
			)
		);

		// Añadir Sección
		$wp_customize->add_section('header_section', array(
			'title'    => __('Opciones Header', 'fitness_theme'),
			'priority' => 30,
		));

		// Añadir Configuración
		$wp_customize->add_setting('ancho_logo', array(
			'default'           => '50',
			'sanitize_callback' => 'absint', // Asegura que la entrada es un número entero absoluto.
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
		));
	
		// Añadir Control logo movil
		$wp_customize->add_control('ancho_logo', array(
			'label'       => __('Ancho Logotipo Movil', 'fitness_theme'),
			'section'     => 'header_section',
			'settings'    => 'ancho_logo',
			'type'        => 'range',
			'input_attrs' => array(
				'min'  => 10,    
				'max'  => 200,   
				'step' => 1,     
			),
		));

		$wp_customize->add_setting('ancho_logo_desktop', array(
			'default'           => '50',
			'sanitize_callback' => 'absint', 
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
		));
	
		// Añadir Control logo desktop
		$wp_customize->add_control('ancho_logo_desktop', array(
			'label'       => __('Ancho Logotipo Desktop', 'fitness_theme'),
			'section'     => 'header_section',
			'settings'    => 'ancho_logo_desktop',
			'type'        => 'range',
			'input_attrs' => array(
				'min'  => 10,    
				'max'  => 200,   
				'step' => 1,     
			),
		));

		 // Añadir setting para la imagen
		 $wp_customize->add_setting( 'imagen_section_1', array(
			'default'   => '', // URL por defecto de la imagen
			'transport' => 'refresh', // O puedes usar 'postMessage' si planeas usar JS para previsualizaciones en vivo
		));
	
		// Añadir control de imagen
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'imagen_section_1', array(
			'label'    => __( 'Imagen de fondo section 1', 'fitness_theme' ), // Reemplaza 'mi_tema' con tu text domain
			'section'  => 'header_section', // Esto añade el control a la sección "Identidad del Sitio", puedes cambiarlo por una sección diferente
			'settings' => 'imagen_section_1',
			'priority' => 8, // Cambia la prioridad si es necesario para posicionar tu control
		)));

		  // texto cta header
		  $wp_customize->add_setting( 'cta_txt_header' , array(
			'default'   => __( 'Valor por defecto', 'mi-tema' ),
			'transport' => 'refresh',
		) );
	
		// texto cta header
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_txt_header', array(
			'label'      => __( 'Texto para el cta header', 'fitness_theme' ),
			'section'    => 'header_section',
			'settings'   => 'cta_txt_header',
		) ) );

		// Añadir un setting de URL
$wp_customize->add_setting( 'url_cta_header' , array(
    'default'   => '',
    'transport' => 'refresh',
) );

// Añadir un control de URL
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'url_cta_header', array(
    'label'      => __( 'URL Personalizado', 'fitness_theme' ),
    'section'    => 'header_section',
    'settings'   => 'url_cta_header',
    'type'       => 'url',
) ) );

// Añadir un setting de color
$wp_customize->add_setting( 'color_cta_header' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );

// Añadir un control de color
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_cta_header', array(
    'label'      => __( 'Color Personalizado', 'fintess_theme' ),
    'section'    => 'header_section',
    'settings'   => 'color_cta_header',
) ) ); 

// Btn cta section2
$wp_customize->add_setting( 'texto_cta_2' , array(
    'default'   => '',
    'transport' => 'refresh',
) );
$wp_customize->add_control( 'texto_cta_2', array(
    'label'      => __( 'Texto boton cta 2', 'fitness_theme' ),
    'section'    => 'header_section',
    'settings'   => 'texto_cta_2',
    'type'       => 'text',
) );

// Setting y Control de URL
$wp_customize->add_setting( 'url_cta_2' , array(
    'default'   => '',
    'transport' => 'refresh',
) );
$wp_customize->add_control( 'url_cta_2', array(
    'label'      => __( 'Link cta 2', 'mi-tema' ),
    'section'    => 'header_section',
    'settings'   => 'url_cta_2',
    'type'       => 'url',
) );

// Setting y Control de Color
$wp_customize->add_setting( 'color_cta_2' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_cta_2', array(
    'label'      => __( 'Color Cta 2', 'fitness_theme' ),
    'section'    => 'header_section',
    'settings'   => 'color_cta_2',
) ) );


// cta 3 -----------------------

$wp_customize->add_setting( 'texto_cta_3' , array(
    'default'   => '',
    'transport' => 'refresh',
) );
$wp_customize->add_control( 'texto_cta_3', array(
    'label'      => __( 'Texto boton cta 3', 'fitness_theme' ),
    'section'    => 'header_section',
    'settings'   => 'texto_cta_3',
    'type'       => 'text',
) );
$wp_customize->add_setting('color_cta_3', array(
	'default' => '#000000',
	'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'color_cta_3' , array(
	 'label'=> __('Color cta 3', 'fitness_theme'),
	 'section'=>'header_section',
	 'setttings' => 'color_cta_3'
)));

$wp_customize->add_setting( 'url_cta_3' , array(
    'default'   => '',
    'transport' => 'refresh',
) );
$wp_customize->add_control( 'url_cta_3', array(
    'label'      => __( 'Link cta 3', 'fitness_theme' ),
    'section'    => 'header_section',
    'settings'   => 'url_cta_3',
    'type'       => 'url',
) );

$wp_customize->add_setting('color_fondo_marcas', array(
	'default' => '#000000',
	'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'color_fondo_marcas' , array(
	 'label'=> __('Color fondo Marcas', 'fitness_theme'),
	 'section'=>'header_section',
	 'setttings' => 'color_fondo_marcas'
)));

	}

}
add_action( 'customize_register', 'fitness_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function fitness_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function fitness_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function fitness_theme_customize_preview_js() {
	wp_enqueue_script( 'fitness_theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'fitness_theme_customize_preview_js' );
