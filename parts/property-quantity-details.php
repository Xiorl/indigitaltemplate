<?php

$number_of_bedrooms = get_post_meta( get_the_ID(), 'property_details_number_of_bedrooms', true );
$number_of_bathrooms = get_post_meta( get_the_ID(), 'property_details_number_of_bathrooms', true );
$construction_meters = get_post_meta( get_the_ID(), 'property_details_construction_meters', true );
$meters_of_the_land = get_post_meta( get_the_ID(), 'property_details_meters_of_the_land', true );
$number_of_parking_spaces = get_post_meta( get_the_ID(), 'property_details_number_of_parking_spaces', true );

echo '<div class="details-container">';

// bedrooms
if ($number_of_bedrooms != '') {
	echo '
	<div class="details_item">
		<p>Recámaras</p>
		<div>
			<span class="icon icon--details-bedrooms"></span>
			<span>'.$number_of_bedrooms .'</span>
		</div>
	</div>
	';
}
// bathrooms
if ($number_of_bathrooms != '') {
	echo '
	<div class="details_item">
		<p>Baños</p>
		<div>
			<span class="icon icon--details-bathrooms"></span>
			<span>'. $number_of_bathrooms .'</span>
		</div>
	</div>
	';
}
// construction meter
if ($construction_meters != '') {
	echo '
	<div class="details_item">
		<p>Construcción</p>
		<div>
			<span class="icon icon--details-construction-meters"></span>
			<span>'. $construction_meters .'</span>
		</div>
	</div>
	';
}
// land area
if ( $meters_of_the_land != '' ) {
	echo '
	<div class="details_item">
		<p>Terreno</p>
		<div>
			<span class="icon icon--details-meters-of-the-land"></span>
			<span>'. $meters_of_the_land .'</span>
		</div>
	</div>
	';
}
// parking spaces
if ( $number_of_parking_spaces != '' ) {
	echo '
	<div class="details_item">
		<p>Estacionamientos</p>
		<div>
			<span class="icon icon--details-number-of-parking-spaces"></span>
			<span>'. $number_of_parking_spaces .'</span>
		</div>
	</div>
	';
}

echo '</div>';


?>