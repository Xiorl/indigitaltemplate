<?php

// Register Custom Taxonomy
function locations_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Locaciones', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Locacion', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Locaciones', 'text_domain' ),
		'all_items'                  => __( 'Todos los artículos', 'text_domain' ),
		'parent_item'                => __( 'Elemento principal', 'text_domain' ),
		'parent_item_colon'          => __( 'Elemento principal', 'text_domain' ),
		'new_item_name'              => __( 'Nombre del nuevo elemento', 'text_domain' ),
		'add_new_item'               => __( 'Agregar elemento nuevo', 'text_domain' ),
		'edit_item'                  => __( 'Editar elemento', 'text_domain' ),
		'update_item'                => __( 'Actualizar elemento', 'text_domain' ),
		'view_item'                  => __( 'Ver elemento', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separe los elementos con comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Agregar o quitar elementos', 'text_domain' ),
		'choose_from_most_used'      => __( 'Elige entre los más usados', 'text_domain' ),
		'popular_items'              => __( 'Elementos populares', 'text_domain' ),
		'search_items'               => __( 'Buscar elementos', 'text_domain' ),
		'not_found'                  => __( 'No encontrada', 'text_domain' ),
		'no_terms'                   => __( 'No hay elementos', 'text_domain' ),
		'items_list'                 => __( 'Lista de elementos', 'text_domain' ),
		'items_list_navigation'      => __( 'Navegación de la lista de elementos', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'locaciones', array( 'modelos', 'desarrollos' ), $args );

}
add_action( 'init', 'locations_taxonomy', 0 );

?>