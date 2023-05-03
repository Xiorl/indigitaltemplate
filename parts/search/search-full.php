<?php 

// vars
$args = array('post_type' => 'cities', 'posts_per_page' => 110);


// echo do_shortcode('[charrua_search_form]');


?>

<form class="searchbox searchbox--full" name="search" method="get" action="<?php bloginfo('home'); ?>/">

	<h2 class="title title--cta">
		Encuentra tu propiedad ideal
	</h2>

	<div class="search-filter">
		<span>Estoy buscando</span>
		<div class="filter-box">
			<label>Casa</label>
			<input type="checkbox" name="">
		</div>
		<div class="filter-box">
			<label>Casa de playa</label>
			<input type="checkbox" name="">
		</div>
		<div class="filter-box">
			<label>Departamento</label>
			<input type="checkbox" name="">
		</div>
		<div class="filter-box">
			<label>Departamento de playa</label>
			<input type="checkbox" name="">
		</div>
	</div>

	<div class="search-filter">
		<span>Quiero:</span>
		<div class="filter-box">
			<label>Invertir</label>
			<input type="checkbox" name="">
		</div>
		<div class="filter-box">
			<label>Habitar</label>
			<input type="checkbox" name="">
		</div>
		<div class="filter-box">
			<label>Busco propiedades en:</label>
			<select onchange="copyTextValue()" id="select">

			<?php
				echo '<option value="null" selected>Todas</option>';

				$pages = get_posts( $args );
				foreach ( $pages as $page ) : setup_postdata( $page ); 

				$auth_name = $page->post_title;
				$auth_ID   = $page->ID;

				echo '<option value="'. $auth_name .'">'. $auth_name .'</option>';

				endforeach; 
				wp_reset_postdata();
			?>

			</select>
		</div>
	</div>

	

	<input type="hidden" name="s" value="" placeholder="Introduce tu búsqueda" id="search" class="txt" />
	<div class="btn--full"><button type="submit" class="btn btn--search">Buscar<span></span></button></div>
</form>

<script>
function copyTextValue() {
    var e = document.getElementById("select");
    var val = e.options[e.selectedIndex].value;
    document.getElementById("search").value = val;
}
</script>













