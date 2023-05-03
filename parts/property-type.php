<?php
// Variables para desarrollos 
$house_switch = get_post_meta( get_the_ID(), 'property_type_house_switch', true );
$beach_house_switch = get_post_meta( get_the_ID(), 'property_type_beach_house_switch', true );
$department_switch = get_post_meta( get_the_ID(), 'property_type_department_switch', true );
$beach_department_switch = get_post_meta( get_the_ID(), 'property_type_beach_department_switch', true );
$lots_switch = get_post_meta( get_the_ID(), 'property_type_lots_switch', true );


// Verificar si existe cada variable antes de imprimirla
if ($house_switch) {
    echo '<p>Casas</p>';
}
if ($beach_house_switch) {
    echo '<p>Casas de playa</p>';
}
if ($department_switch) {
    echo '<p>Departamentos</p>';
}
if ($beach_department_switch) {
    echo '<p>Departamentos de playa</p>';
}
if ($lots_switch) {
    echo '<p>Lotes</p>';
}

// Variables para modelos 
$house_switch = get_post_meta( get_the_ID(), 'model_type_house_switch', true );
$beach_house_switch = get_post_meta( get_the_ID(), 'model_type_beach_house_switch', true );
$department_switch = get_post_meta( get_the_ID(), 'model_type_department_switch', true );
$beach_department_switch = get_post_meta( get_the_ID(), 'model_type_beach_department_switch', true );
$lots_switch = get_post_meta( get_the_ID(), 'model_type_lots_switch', true );


// Verificar si existe cada variable antes de imprimirla
if ($house_switch) {
    echo '<p>Casas</p>';
}
if ($beach_house_switch) {
    echo '<p>Casas de playa</p>';
}
if ($department_switch) {
    echo '<p>Departamentos</p>';
}
if ($beach_department_switch) {
    echo '<p>Departamentos de playa</p>';
}
if ($lots_switch) {
    echo '<p>Lotes</p>';
}

?>