<?php  

// 1.0 GLOBAL FUNCTIONS
// 1.1 Declare and ability navigation bars
function nav_menu() {
	register_nav_menus(
		array(
			'main-nav'     	=> __('Menú principal.'),
			'us-nav'     	=> __('Menú del pié con las paginas de nosotros.'),
			'projects-nav'     	=> __('Menú del pié con las paginas de proyectos.'),
			'contact-nav'     	=> __('Menú del pié con la pagina de contactos.'),
			'properties-nav'     	=> __('Menú de los desarrollos por ciudades.'),
			'developments-nav'     	=> __('Menú de las secciones de desarrollos.'),
			'models-nav'     	=> __('Menú de las secciones de modelos.')
		)
	);
}
add_action('init', 'nav_menu');

// Add support for thumbnails
add_theme_support('post-thumbnails', 
	array(
		'post', 
		'page',
		'desarrollos',
		'modelos',
		'article',
		'cities'
	)
);


// Thumbnails sizes
add_image_size('full',    	  1080, 518, true);
add_image_size('tiles',  	   340, 270, true);
// Social cards sizes
add_image_size('share_card',  1200, 630, true);

// Widgets zones
function gr_widgets_zones() {

	register_sidebar( array(
		'name' => 'Footer 01',
		'id' => 'footer_01',
		'description' => 'Descripción de la nueva Zona de Widgets',
		'before_widget' => '<section class="widget widget--footer">',
		'after_widget' => '</section>',
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );

	register_sidebar( array(
		'name' => 'Footer 02',
		'id' => 'footer_02',
		'description' => 'Descripción de la nueva Zona de Widgets',
		'before_widget' => '<section class="widget widget--footer">',
		'after_widget' => '</section>',
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );

	register_sidebar( array(
		'name' => 'Footer 03',
		'id' => 'footer_03',
		'description' => 'Descripción de la nueva Zona de Widgets',
		'before_widget' => '<section class="widget widget--footer">',
		'after_widget' => '</section>',
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );

	register_sidebar( array(
		'name' => 'Footer 04',
		'id' => 'footer_04',
		'description' => 'Descripción de la nueva Zona de Widgets',
		'before_widget' => '<section class="widget widget--footer">',
		'after_widget' => '</section>',
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );
	register_sidebar( array(
		'name' => 'Cloud tags',
		'id' => 'cloud_tags',
		'description' => 'Zona de tags',
		'before_widget' => '<section class="widget widget--aside">',
		'after_widget' => '</section>',
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	) );
	

	}
add_action( 'widgets_init', 'gr_widgets_zones' );


// 2.0 FRONT-END FUNCTIONS
if ( !is_admin() ) {
	
	// 2.1 Clean all base styles, js and tags of Wordpress for initial clean  project
	//include 'functions/cleaner.php';
	// 2.2 Add new head tags
	//include 'functions/head_tags/head_tags.php';
	// 2.3 If project needs, add the snipets for ads
	include 'functions/ads.php';

	// Insert main CSS Styles
	function theme_styles() {

		wp_enqueue_style(
	        'main-styles',
	        get_theme_file_uri('css/styles.css'),
	        array(),
	        '1.0.39'
	    );

	}
	add_action( 'wp_enqueue_scripts', 'theme_styles' );

	// Insert JS
	function gear_js_enqueue() {

		wp_enqueue_script( 
	    	'fly-events', 
	    	get_theme_file_uri( 'assets/js/fly-events.js' ), 
	    	'', 
	    	'', 
	    	true 
	    );
	    wp_enqueue_script( 
	    	'scroll-events', 
	    	get_theme_file_uri( 'assets/js/scroll.js' ), 
	    	'', 
	    	'', 
	    	true 
	    );
	    

	}
	add_action( 'wp_enqueue_scripts', 'gear_js_enqueue' );

}

// 3.0 BACK-END FUNCTIONS

// 4.0 CUSTOM LOGIN
include 'functions/custom_login.php';


// CUSTOM POST TYPES
include_once 'functions/desarrollos.php';
include_once 'functions/modelos.php';
//include_once 'functions/locaciones.php';
include_once 'functions/cities.php';


// CUSTOM METABOXES
include_once 'functions/development.php';
include_once 'functions/models.php';
include_once 'functions/amenities.php';
include_once 'functions/property_details.php';
include_once 'functions/property_type.php';
include_once 'functions/model_dev.php'; 
include_once 'functions/model_type.php';
include_once 'functions/location.php';


// PLUGINS
include_once 'functions/gallery.php';



function charrua_register_query_vars( $vars ) {

    $vars[] = 'house_type';

    return $vars;
} 
add_filter( 'query_vars', 'charrua_register_query_vars' );

/**
 * Build a custom query based on several conditions
 * The pre_get_posts action gives developers access to the $query object by reference
 * any changes you make to $query are made directly to the original object - no return value is requested
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts
 *
 */
function charrua_barco_archive($query) {
    // check if the user is requesting an admin page
    // or current query is not the main query
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    // edit the query only when post type is 'barco'
    // if it isn't, return
    if (!is_post_type_archive('barco')) {
        return;
    }

    $meta_query = array();
    $taxonomy_query = array();

    // add meta_query elements
    if (!empty(get_query_var('pot'))) {
        $meta_query[] = array(
            'key' => 'potencia',
            'value' => get_query_var('pot'),
            'compare' => '=',
            'type' => 'NUMERIC',
        );
    }

    if (!empty(get_query_var('vel'))) {
        $meta_query[] = array(
            'key' => 'velocidad',
            'value' => get_query_var('vel'),
            'compare' => '=',
            'type' => 'NUMERIC',
        );
    }

    //if we have more than 1 meta query fields add relation AND
    if (count($meta_query) > 1) {
        $meta_query['relation'] = 'AND';
    }

    //if we have any meta query fields add them to the query
    if (count($meta_query) > 0) {
        $query->set('meta_query', $meta_query);
    }

    //add taxonomy fields
    if (!empty(get_query_var('cla'))) {
        $taxonomy_query[] = array(
            'taxonomy' => 'clasificacion',
            'field' => 'slug',
            'terms' => get_query_var('cla'),
        );
    }

    //if we have any taxonomy fields add them to the query
    if (count($taxonomy_query) > 0) {
        $query->set('tax_query', $taxonomy_query);
    }

}
add_action('pre_get_posts', 'charrua_barco_archive', 1);

/**
 * Register custom shortcode
 *
 * @link https://codex.wordpress.org/Shortcode_API
 */
function charrua_setup() {
    add_shortcode( 'charrua_search_form', 'charrua_search_form' );
}
add_action( 'init', 'charrua_setup' );

/**
 * Callback function for shortcode charrua_search_form
 *
 * @param array  $atts
 */
function charrua_search_form( $atts ){

    $args = array( 'hide_empty' => true );
    $clasificacion_terms = get_terms( 'clasificacion', $args );

    if( is_array( $clasificacion_terms ) ){
		$select_clasificacion = '<label for="clasificacion">Clasificación</label>';
        $select_clasificacion .= '<select name="cla" id="clasificacion" style="width: 100%">';
        $select_clasificacion .= '<option value="" selected="selected">' . __( 'Seleccionar clasificacion', 'charrua_plugin' ) . '</option>';
        foreach ( $clasificacion_terms as $term ) {
            $select_clasificacion .= '<option value="' . $term->slug . '">' . $term->name . '</option>';
        }
        $select_clasificacion .= '</select>' . "\n";
    }

    $args = array('post_type' => 'cities', 'posts_per_page' => 110);

    $pages = get_posts( $args );
    foreach ( $pages as $page ) : setup_postdata( $page ); 

    $auth_name = $page->post_title;
    $auth_ID   = $page->ID;


	$output = '
		<form class="searchbox searchbox--full action="' . esc_url( home_url() ) . '" method="GET" role="search">
			<h3 class="title title--cta">Encuentra tu propiedad ideal</h3>

			<div class="search-filter">
				<span>Estoy buscando</span>
				<div class="filter-box">
					<label>Casa</label>
					<input type="checkbox" name="" value="casa">
				</div>
				<div class="filter-box">
					<label>Casa de playa</label>
					<input type="checkbox" name="" value="casa-playa">
				</div>
				<div class="filter-box">
					<label>Departamento</label>
					<input type="checkbox" name="" value="departamento">
				</div>
				<div class="filter-box">
					<label>Departamento de playa</label>
					<input type="checkbox" name="" value="departamento-playa">
				</div>
			</div>

			<div class="search-filter">
				<span>Quiero:</span>
				<div class="filter-box">
					<label>Invertir</label>
					<input type="checkbox" name="" value="inverir">
				</div>
				<div class="filter-box">
					<label>Rentarla</label>
					<input type="checkbox" name="" value="rentar">
				</div>
				<div class="filter-box">
					<label>Busco propiedades en:</label>
					<select>
					<option value="null" selected>Todas</option>
					
					<option value="'. $auth_ID .'">'. $auth_name .'</option>

					</select>
				</div>
			</div>

			<div class="search-submit">
				<a href="#" class="btn btn--search">Buscar</a>
			</div>

		</form>'
	;

	endforeach; 
	wp_reset_postdata();

    return $output;
}








?>

