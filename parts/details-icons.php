<?php 

$hallway_switch = get_post_meta( get_the_ID(), 'property_details_hallway_switch', true );
$tv_room_switch = get_post_meta( get_the_ID(), 'property_details_tv_room_switch', true );
$bathroom_dressing_room_switch = get_post_meta( get_the_ID(), 'property_details_bathroom_dressing_room_switch', true );
$terrace_switch = get_post_meta( get_the_ID(), 'property_details_terrace_switch', true );
$bar_area_switch = get_post_meta( get_the_ID(), 'property_details_bar_area_switch', true );
$service_room_switch = get_post_meta( get_the_ID(), 'property_details_service_room_switch', true );
$walkin_closet_switch = get_post_meta( get_the_ID(), 'property_details_walkin_closet_switch', true );
$study_room_switch = get_post_meta( get_the_ID(), 'property_details_study_room_switch', true );
$andining_room_switch = get_post_meta( get_the_ID(), 'property_details_andining_room_switch', true );
$washing_area_switch = get_post_meta( get_the_ID(), 'property_details_washing_area_switch', true );
$private_bathroom_switch = get_post_meta( get_the_ID(), 'property_details_private_bathroom_switch', true );
$solar_heater_switch = get_post_meta( get_the_ID(), 'property_details_solar_heater_switch', true );
$solar_panel_switch = get_post_meta( get_the_ID(), 'property_details_solar_panel_switch', true );
$roof_washing_area_switch = get_post_meta( get_the_ID(), 'property_details_roof_washing_area_switch', true );
$thrid_level_terrace_switch = get_post_meta( get_the_ID(), 'property_details_thrid_level_terrace_switch', true );
$multiple_hall_switch = get_post_meta( get_the_ID(), 'property_details_multiple_hall_switch', true );
$breakfast_area_switch = get_post_meta( get_the_ID(), 'property_details_breakfast_area_switch', true );
$back_terrace_switch = get_post_meta( get_the_ID(), 'property_details_back_terrace_switch', true );
$dinning_room_switch = get_post_meta( get_the_ID(), 'property_details_dinning_room_switch', true );
$kitchen_switch = get_post_meta( get_the_ID(), 'property_details_kitchen_switch', true );
$receiver_switch = get_post_meta( get_the_ID(), 'property_details_receiver_switch', true );
$yard_switch = get_post_meta( get_the_ID(), 'property_details_yard_switch', true );
$cellar_switch = get_post_meta( get_the_ID(), 'property_details_cellar_switch', true );
$laundry_room_switch = get_post_meta( get_the_ID(), 'property_details_laundry_room_switch', true );
$rooftop_laundry_area_switch = get_post_meta( get_the_ID(), 'property_details_rooftop_laundry_area_switch', true );
$garden_terrace_switch = get_post_meta( get_the_ID(), 'property_details_garden_terrace_switch', true );
$balcony_switch = get_post_meta( get_the_ID(), 'property_details_balcony_switch', true );
$full_bathroom_switch = get_post_meta( get_the_ID(), 'property_details_full_bathroom_switch', true );


echo '
	<div class="details-extra">
';


if ($hallway_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Pasillo</h4>
		<span class="icon icon--details-hallway bolder"></span>
	</div>
	';
}
if ($tv_room_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Sala TV</h4>
		<span class="icon icon--details-tv-room bolder"></span>
	</div>
	';
}
if ($bathroom_dressing_room_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Baño vestidor</h4>
		<span class="icon icon--details-bathroom-dressing-room bolder"></span>
	</div>
	';
}
if ($terrace_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Terraza</h4>
		<span class="icon icon--details-terrace bolder"></span>
	</div>
	';
}
if ($bar_area_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Área bar</h4>
		<span class="icon icon--details-bar-area bolder"></span>
	</div>
	';
}
if ($service_room_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Cuarto de servicio</h4>
		<span class="icon icon--details-service-room bolder"></span>
	</div>
	';
}
if ($walkin_closet_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Closet vestidor</h4>
		<span class="icon icon--details-walkin-closet bolder"></span>
	</div>
	';
}
if ($study_room_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Sala de estudio</h4>
		<span class="icon icon--details-study-room bolder"></span>
	</div>
	';
}
if ($study_room_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Ancomedor</h4>
		<span class="icon icon--details-andining-room bolder"></span>
	</div>
	';
}
if ($washing_area_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Área de lavado</h4>
		<span class="icon icon--details-washing-area bolder"></span>
	</div>
	';
}
if ($private_bathroom_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Baño privado</h4>
		<span class="icon icon--details-private-bathroom bolder"></span>
	</div>
	';
}
if ($solar_heater_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Calentador solar</h4>
		<span class="icon icon--details-solar-heater bolder"></span>
	</div>
	';
}
if ($solar_panel_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Panel solar</h4>
		<span class="icon icon--details-solar-panel bolder"></span>
	</div>
	';
}
if ($roof_washing_area_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Área de lavado techado</h4>
		<span class="icon icon--details-roof-washing-area bolder"></span>
	</div>
	';
}
if ($thrid_level_terrace_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>3er nivel terraza</h4>
		<span class="icon icon--details-thrid-level-terrace bolder"></span>
	</div>
	';
}
if ($multiple_hall_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Salón múltiples</h4>
		<span class="icon icon--details-multiple-hall bolder"></span>
	</div>
	';
}
if ($breakfast_area_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Desayunador</h4>
		<span class="icon icon--details-breakfast-area bolder"></span>
	</div>
	';
}
if ($dinning_room_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Comedor</h4>
		<span class="icon icon--details-dinning-room bolder"></span>
	</div>
	';
}
if ($kitchen_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Cocina</h4>
		<span class="icon icon--details-kitchen bolder"></span>
	</div>
	';
}
if ($receiver_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Recibidor</h4>
		<span class="icon icon--details-receiver bolder"></span>
	</div>
	';
}
if ($yard_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Patio</h4>
		<span class="icon icon--details-yard bolder"></span>
	</div>
	';
}
if ($cellar_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Bodega</h4>
		<span class="icon icon--details-cellar bolder"></span>
	</div>
	';
}
if ($laundry_room_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Cuarto de lavado</h4>
		<span class="icon icon--details-laundry-room bolder"></span>
	</div>
	';
}
if ($rooftop_laundry_area_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Área de lavado techado en azotea</h4>
		<span class="icon icon--details-rooftop-laundry-area bolder"></span>
	</div>
	';
}
if ($garden_terrace_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Terraza jardín</h4>
		<span class="icon icon--details-garden-terrace bolder"></span>
	</div>
	';
}
if ($balcony_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Balcón</h4>
		<span class="icon icon--details-balcony bolder"></span>
	</div>
	';
}
if ($full_bathroom_switch != '') {
	echo '
	<div class="details-extra-item">
		<h4>Baño completo en planta baja</h4>
		<span class="icon icon--details-full-bathroom bolder"></span>
	</div>
	';
}

echo '
	</div>
';
  

?>