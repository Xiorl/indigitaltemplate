<?php

$development_id = isset($args['development_id']) ? $args['development_id'] : get_the_ID();
$terrace_switch = get_post_meta( $development_id, 'amenities_terrace_switch', true );
$crossfit_circuit_switch = get_post_meta( $development_id, 'amenities_crossfit_circuit_switch', true );

 //$terrace_switch = get_post_meta( get_the_ID(), 'amenities_terrace_switch', true );
 //$crossfit_circuit_switch = get_post_meta( get_the_ID(), 'amenities_crossfit_circuit_switch', true );
 $rappelling_wall_switch = get_post_meta( $development_id, 'amenities_rappelling_wall_switch', true );
 $theater_switch = get_post_meta( $development_id, 'amenities_theater_switch', true );
 $rest_area_switch = get_post_meta( $development_id, 'amenities_rest_area_switch', true );
 $paddel_switch = get_post_meta( $development_id, 'amenities_paddel_switch', true );
 $jogger_switch = get_post_meta( $development_id, 'amenities_jogger_switch', true );
 $spot_for_photos_switch = get_post_meta( $development_id, 'amenities_spot_for_photos_switch', true );
 $sundeck_switch = get_post_meta( get_the_ID(), 'amenities_sundeck_switch', true );
 $swings_with_overlooking_switch = get_post_meta( $development_id, 'amenities_swings_with_overlooking_switch', true );
 $swim_lane_switch = get_post_meta( get_the_ID(), 'amenities_swim_lane_switch', true );
 $outdoor_exerciser_switch = get_post_meta( $development_id, 'amenities_outdoor_exerciser_switch', true );
 $ping_pong_table_switch = get_post_meta( $development_id, 'amenities_ping_pong_table_switch', true );
 $jumper_switch = get_post_meta( $development_id, 'amenities_jumper_switch', true );
 $climbing_wall_switch = get_post_meta( $development_id, 'amenities_climbing_wall_switch', true );
 $skate_park_switch = get_post_meta( $development_id, 'amenities_skate_park_switch', true );
 $multiple_tables_switch = get_post_meta( $development_id, 'amenities_multiple_tables_switch', true );
 $walkers_switch = get_post_meta( $development_id, 'amenities_walkers_switch', true );
 $yoga_area_switch = get_post_meta( $development_id, 'amenities_yoga_area_switch', true );
 $techonology_and_ecotechnology_switch = get_post_meta( $development_id, 'amenities_techonology_and_ecotechnology_switch', true );
 $jacuzzi_switch = get_post_meta( $development_id, 'amenities_jacuzzi_switch', true );
 $agora_theater_switch = get_post_meta( $development_id, 'amenities_agora_theater_switch', true );
 $clubhouse_livingroom_kitchen_stoveoven_switch = get_post_meta( $development_id, 'amenities_clubhouse_livingroom_kitchen_stoveoven_switch', true );
 $giant_chess_switch = get_post_meta( $development_id, 'amenities_giant_chess_switch', true );
 $semi_olympic_pool_switch = get_post_meta( $development_id, 'amenities_semi_olympic_pool_switch', true );
 $fishing_switch = get_post_meta( $development_id, 'amenities_fishing_switch', true );
 $beach_club_switch = get_post_meta( $development_id, 'amenities_beach_club_switch', true );
 $party_boat_switch = get_post_meta( $development_id, 'amenities_party_boat_switch', true );
 $water_activities_switch = get_post_meta( $development_id, 'amenities_water_activities_switch', true );
 $stokers_switch = get_post_meta( $development_id, 'amenities_stokers_switch', true );
 $pier_switch = get_post_meta( $development_id, 'amenities_pier_switch', true );
 $palapas_switch = get_post_meta( $development_id, 'amenities_palapas_switch', true );
 $volleyball_court_switch = get_post_meta( $development_id, 'amenities_volleyball_court_switch', true );
 $miniature_golf_switch = get_post_meta( $development_id, 'amenities_miniature_golf_switch', true );
 $event_room_switch = get_post_meta( $development_id, 'amenities_event_room_switch', true );
 $elevator_switch = get_post_meta( $development_id, 'amenities_elevator_switch', true );
 $terrace_for_events_switch = get_post_meta( $development_id, 'amenities_terrace_for_events_switch', true );
 $roof_garden_switch = get_post_meta( $development_id, 'amenities_roof_garden_switch', true );
 $co_working_switch = get_post_meta( $development_id, 'amenities_co_working_switch', true );
 $independent_access_switch = get_post_meta( $development_id, 'amenities_independent_access_switch', true );
 $soccer_field_switch = get_post_meta( $development_id, 'amenities_soccer_field_switch', true );
 $jogging_track_switch = get_post_meta( $development_id, 'amenities_jogging_track_switch', true );
 $track_carts_skates_switch = get_post_meta( $development_id, 'amenities_track_carts_skates_switch', true );
 $hammock_switch = get_post_meta( $development_id, 'amenities_hammock_switch', true );
 $sports_field_switch = get_post_meta( $development_id, 'amenities_sports_field_switch', true );
 $wading_pool_switch = get_post_meta( $development_id, 'amenities_wading_pool_switch', true );
 $green_areas_switch = get_post_meta( $development_id, 'amenities_green_areas_switch', true );
 $grill_area_switch = get_post_meta( $development_id, 'amenities_grill_area_switch', true );
 $gym_switch = get_post_meta( $development_id, 'amenities_gym_switch', true );
 $kids_games_switch = get_post_meta( $development_id, 'amenities_kids_games_switch', true );
 $pool_switch = get_post_meta( $development_id, 'amenities_pool_switch', true );
 $clubhouse_switch = get_post_meta( $development_id, 'amenities_clubhouse_switch', true );
 $exercisers_area_switch = get_post_meta( $development_id, 'amenities_exercisers_area_switch', true );
 $dog_park_switch = get_post_meta( $development_id, 'amenities_dog_park_switch', true );
 $controlled_access_switch = get_post_meta( $development_id, 'amenities_controlled_access_switch', true );
 $park_switch = get_post_meta( $development_id, 'amenities_park_switch', true );
 $side_aisle_switch = get_post_meta( $development_id, 'amenities_side_aisle_switch', true );
 $tv_room_switch = get_post_meta( $development_id, 'amenities_tv_room_switch', true );
 $bathroom_dressing_room_switch = get_post_meta( $development_id, 'amenities_bathroom_dressing_room_switch', true );
 $bar_area_switch = get_post_meta( $development_id, 'amenities_bar_area_switch', true );
 $service_room_switch = get_post_meta( $development_id, 'amenities_service_room_switch', true );
 $walkin_closet_switch = get_post_meta( $development_id, 'amenities_walkin_closet_switch', true );
 $dinning_room_switch = get_post_meta( $development_id, 'amenities_dinning_room_switch', true );
 $washing_area_switch = get_post_meta( $development_id, 'amenities_washing_area_switch', true );
 $private_bathroom_switch = get_post_meta( $development_id, 'amenities_private_bathroom_switch', true );
 $solar_heater_switch = get_post_meta( $development_id, 'amenities_solar_heater_switch', true );
 $study_room_switch = get_post_meta( $development_id, 'amenities_study_room_switch', true );
 $solar_panel_switch = get_post_meta( $development_id, 'amenities_solar_panel_switch', true );
 $covered_area_switch = get_post_meta( $development_id, 'amenities_covered_area_switch', true );
 $terrace_level_switch = get_post_meta( $development_id, 'amenities_terrace_level_switch', true );
 $breakfast_area_switch = get_post_meta( $development_id, 'amenities_breakfast_area_switch', true );
 $back_terrace_switch = get_post_meta( $development_id, 'amenities_back_terrace_switch', true );
 $multiple_living_switch = get_post_meta( $development_id, 'amenities_multiple_living_switch', true );
 $swim_lane_switch = get_post_meta( $development_id, 'amenities_swim_lane_switch', true );
 $visitor_parking_switch = get_post_meta( $development_id, 'amenities_visitor_parking_switch', true );
 
 echo '
 <nav class="nav nav--amenities">
 <ul>
';

 if ($terrace_switch != '') {
	echo '<li> <p>Terraza</p> <span class="icon icon--amenities-terrace"></span> </li>';
   
 }
 if ($crossfit_circuit_switch != '') {
	echo '<li> <p>Circuito de crossfit</p> <span class="icon icon--amenities-crossfit-circuit"></span> </li>';
    
 }
 if ($rappelling_wall_switch != '') {
	echo '<li> <p>Muro Rapel</p> <span class="icon icon--amenities-rappelling-wall"></span> </li>';
    
 }
 if ($theater_switch != '') {
	echo '<li> <p>Teatro</p> <span class="icon icon--amenities-theather"></span> </li>';
    
 }
 if ($rest_area_switch != '') {
	echo '<li> <p>Área de descanso</p> <span class="icon icon--amenities-rest-area"></span> </li>';
    
 }
 if ($paddel_switch != '') {
	echo '<li> <p>Padel</p> <span class="icon icon--amenities-paddel"></span> </li>';
    
 }
 if ($jogger_switch != '') {
	echo '<li> <p>Trotapista</p> <span class="icon icon--amenities-jogger"></span> </li>';
    
 }
 if ($spot_for_photos_switch != '') {
	echo '<li> <p>Spot para fotos</p> <span class="icon icon--amenities-spot-for-photos"></span> </li>';
    
 }
 if ($sundeck_switch != '') {
	echo '<li> <p>Asoleadero</p> <span class="icon icon--amenities-sundeck"></span> </li>';
    
 }
 if ($swings_with_overlooking_switch != '') {
	echo '<li> <p>Columpios con vista al canal de navegación</p> <span class="icon icon--amenities-swings-with-overlooking"></span></li>';
    
 }
 if ($swim_lane_switch != '') {
	echo '<li> <p>Carril de nado</p> <span class="icon icon--amenities-swim-lane"></span></li>';
    
 }
 if ($outdoor_exerciser_switch != '') {
	echo '<li> <p>Ejercitador al aire libre</p> <span class="icon icon--amenities-outdoor-exersicer"></span></li>';
    
 }
 if ($ping_pong_table_switch != '') {
	echo '<li> <p>Mesa Ping Pong</p> <span class="icon icon--amenities-ping-pong-table"></span></li>';
    
 }
 if ($jumper_switch != '') {
	echo '<li> <p>Brincolín</p> <span class="icon icon--amenities-jumper"></span></li>';
    
 }
 if ($climbing_wall_switch != '') {
	echo '<li> <p>Muro de escalar</p> <span class="icon icon--amenities-climbing-wall"></span></li>';
    
 }
 if ($skate_park_switch != '') {
	echo '<li> <p>Skate park</p> <span class="icon icon--amenities-skate-park"></span></li>';
    
 }
 if ($multiple_tables_switch != '') {
	echo '<li> <p>Mesas múltiples</p> <span class="icon icon--amenities-multiple-tables"></span></li>';
    
 }
 if ($walkers_switch != '') {
	echo '<li> <p>Andadores</p> <span class="icon icon--amenities-walkers"></span></li>';
    
 }
 if ($yoga_area_switch != '') {
	echo '<li> <p>Área de Yoga</p> <span class="icon icon--amenities-yoga-area"></span></li>';
    
 }
 if ($techonology_and_ecotechnology_switch != '') {
	echo '<li> <p>Tecnología y Ecotecnología</p> <span class="icon icon--amenities-techonology-and-ecotechnology"></span></li>';
    
 }
 if ($jacuzzi_switch != '') {
	echo '<li> <p>Jacuzzi</p> <span class="icon icon--amenities-jacuzzi"></span></li>';
    
 }
 if ($agora_theater_switch != '') {
	echo '<li> <p>Ágora, Cine bajo las Estrellas</p> <span class="icon icon--amenities-agora-theater"></span></li>';
    
 }
 if ($clubhouse_livingroom_kitchen_stoveoven_switch != '') {
	echo '<li> <p>Casa Club con Sala, Cocina y Horno de Piedra</p> <span class="icon icon--amenities-clubhouse-livingroom-kitchen-stoveoven"></span></li>';
    
 }
 if ($giant_chess_switch != '') {
	echo '<li> <p>Ajedrez Gigante</p> <span class="icon icon--amenities-giant-chess"></span></li>';
    
 }
 if ($semi_olympic_pool_switch != '') {
	echo '<li> <p>Alberca Semi-Olímpica</p> <span class="icon icon--amenities-semi-olympic-pool"></span></li>';
    
 }
 if ($fishing_switch  != '') {
	echo '<li> <p>Pesca</p> <span class="icon icon--amenities-fishing"></span></li>';
    
 }
 if ($beach_club_switch  != '') {
	echo '<li> <p>Club de Playa</p>  <span class="icon icon--amenities-beach-club"></span></li>';
    
 }
 if ($party_boat_switch != '') {
	echo '<li> <p>Party Boat</p> <span class="icon icon--amenities-party-boat"></span></li>';
    
 }
 if ($water_activities_switch != '') {
	echo '<li> <p>Actividades Acuáticas</p>  <span class="icon icon--amenities-water-activities"></span></li>';
    
 }
 if ($stokers_switch != '') {
	echo '<li> <p>Fogateros</p> <span class="icon icon--amenities-stokers"></span></li>';
    
 }
 if ($pier_switch != '') {
	echo '<li> <p>Embarcadero</p> <span class="icon icon--amenities-pier"></span></li>';
    
 }
 if ($palapas_switch != '') {
	echo '<li> <p>Palapas</p> <span class="icon icon--amenities-palapas"></span></li>';
    
 }
 if ($volleyball_court_switch != '') {
	echo '<li> <p>Cancha de Voleibol</p> <span class="icon icon--amenities-volleyball-court"></span></li>';
    
 }
 if ($miniature_golf_switch != '') {
	echo '<li> <p>Golfito</p> <span class="icon icon--amenities-miniature-golf"></span></li>';
    
 }
 if ($event_room_switch != '') {
	echo '<li> <p>Salón para Eventos</p> <span class="icon icon--amenities-event-room"></span></li>';
    
 }
 if ($elevator_switch != '') {
	echo '<li> <p>Elevador</p> <span class="icon icon--amenities-elevator"></span></li>';
    
 }
 if ($terrace_for_events_switch != '') {
	echo '<li> <p>Terraza para Eventos</p> <span class="icon icon--amenities-terrace-for-events"></span></li>';
    
 }
 if ($roof_garden_switch != '') {
	echo '<li> <p>Roof Garden</p> <span class="icon icon--amenities-roof-garden"></span></li>';
    
 }
 if ($co_working_switch != '') {
	echo '<li> <p>Co working</p> <span class="icon icon--amenities-co-working"></span></li>';
    
 }
 if ($independent_access_switch != '') {
	echo '<li> <p>Acceso Independiente a Privadas</p> <span class="icon icon--amenities-independent-access"></span></li>';
    
 }
 if ($soccer_field_switch != '') {
	echo '<li> <p>Cancha de Fútbol</p> <span class="icon icon--amenities-soccer-field"></span></li>';
    
 }
 if ($jogging_track_switch != '') {
	echo '<li> <p>Pista de Jogging</p> <span class="icon icon--amenities-jogging-track"></span></li>';
    
 }
 if ($track_carts_skates_switch != '') {
	echo '<li> <p>Pista para Carritos y Patines</p> <span class="icon icon--amenities-track-carts-skates"></span></li>';
    
 }
 if ($hammock_switch != '') {
	echo '<li> <p>Hamaquero</p> <span class="icon icon--amenities-hammock"></span></li>';
    
 }
 if ($sports_field_switch != '') {
	echo '<li> <p>Cancha Deportiva</p> <span class="icon icon--amenities-sports-field"></span></li>';
    
 }
 if ($wading_pool_switch != '') {
	echo '<li> <p>Chapoteadero</p> <span class="icon icon--amenities-wadding-pool"></span></li>';
    
 }
 if ($green_areas_switch != '') {
	echo '<li> <p>Áreas Verdes</p> <span class="icon icon--amenities-green-areas"></span></li>';
    
 }
 if ($grill_area_switch != '') {
	echo '<li> <p>Área de Asadores</p> <span class="icon icon--amenities-grill-area"></span></li>';
    
 }
 if ($gym_switch != '') {
	echo '<li> <p>Gimnasio</p> <span class="icon icon--amenities-gym"></span></li>';
    
 }
 if ($kids_games_switch != '') {
	echo '<li> <p>Juegos Infantiles</p> <span class="icon icon--amenities-kids-games"></span></li>';
    
 }
 if ($pool_switch != '') {
	echo '<li> <p>Alberca</p> <span class="icon icon--amenities-pool"></span></li>';
    
 }
 if ($clubhouse_switch != '') {
	echo '<li> <p>Casa Club</p> <span class="icon icon--amenities-clubhouse"></span></li>';
    
 }
 if ($exercisers_area_switch != '') {
	echo '<li> <p>Área de Ejercitadores</p> <span class="icon icon--amenities-exersicers-area"></span></li>';
    
 }
 if ($dog_park_switch != '') {
	echo '<li> <p>Dog park</p> <span class="icon icon--amenities-dog-park"></span></li>';
    
 }
 if ($controlled_access_switch != '') {
	echo '<li> <p>Acceso Controlado</p> <span class="icon icon--amenities-controlled-access"></span></li>';
    
 }
 if ($park_switch != '') {
	echo '<li> <p>Parque</p> <span class="icon icon--amenities-park"></span></li>';
    
 }
 if ($side_aisle_switch != '') {
	echo '<li> <p>Pasillo lateral</p> <span class="icon icon--amenities-side-aisle"></span></li>';
    
 }
 if ($tv_room_switch != '') {
	echo '<li> <p>Sala TV</p> <span class="icon icon--amenities-tv-room"></span></li>';
    
 }
 if ($bathroom_dressing_room_switch != '') {
	echo '<li> <p>Baño Vestidor</p> <span class="icon icon--amenities-bathroom-dressing-room"></span></li>';
    
 }
 if ($bar_area_switch != '') {
	echo '<li> <p>Área bar</p> <span class="icon icon--amenities-bar"></span></li>';
    
 }
 if ($service_room_switch != '') {
	echo '<li> <p>Cuarto de servicio</p> <span class="icon icon--amenities-service-room"></span></li>';
    
 }
 if ($walkin_closet_switch != '') {
	echo '<li> <p>Closet vestidor</p> <span class="icon icon--amenities-walkin-closet"></span></li>';
    
 }
 if ($dinning_room_switch != '') {
	echo '<li> <p>Antecomedor</p> <span class="icon icon--amenities-dinning-room"></span></li>';
    
 }
 if ($washing_area_switch != '') {
	echo '<li> <p>Área lavado</p> <span class="icon icon--amenities-washing-area"></span></li>';
    
 }
 if ($private_bathroom_switch != '') {
	echo '<li> <p>Baño privado</p> <span class="icon icon--amenities-private-bathroom"></span></li>';
    
 }
 if ($solar_heater_switch != '') {
	echo '<li> <p>Calentador Solar</p> <span class="icon icon--amenities-solar-heater"></span></li>';
    
 }
 if ($study_room_switch != '') {
	echo '<li> <p>Sala estudio</p><span class="icon icon--amenities-study-room"></span></li>';
    
 }
 if ($solar_panel_switch != '') {
	echo '<li> <p>Panel Solar</p> <span class="icon icon--amenities-solar-panel"></span></li>';
    
 }
 if ($covered_area_switch != '') {
	echo '<li> <p>Área techada</p> <span class="icon icon--amenities-covered-area"></span></li>';
    
 }
 if ($terrace_level_switch != '') {
	echo '<li> <p>Nivel Terraza</p> <span class="icon icon--amenities-terrace-level"></span></li>';
    
 }
 if ($breakfast_area_switch != '') {
	echo '<li> <p>Desayunador</p> <span class="icon icon--amenities-breakfast-area"></span></li>';
    
 }
 if ($back_terrace_switch != '') {
	echo '<li> <p>Terraza posterior</p> <span class="icon icon--amenities-back-terrace"></span></li>';
    
 }
 if ($multiple_living_switch != '') {
	echo '<li> <p>Salón múltiple</p> <span class="icon icon--amenities-multiple-living"></span></li>';
    
 }
 if ($visitor_parking_switch != '') {
	echo '<li> <p>Estacionamiento para visitas</p> <span class="icon icon--amenities-visitor-parking"></span></li>';
    
 }



 

 

 echo '
 </ul>
 </nav>
';

?>