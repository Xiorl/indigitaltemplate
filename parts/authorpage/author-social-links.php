<?php

$email = get_post_meta( get_the_ID(), 'profile_details_email', true );
$facebook = get_post_meta( get_the_ID(), 'profile_details_facebook', true );
$twitter = get_post_meta( get_the_ID(), 'profile_details_twitter', true );
$instagram = get_post_meta( get_the_ID(), 'profile_details_instagram', true );
$web = get_post_meta( get_the_ID(), 'profile_details_web', true );


echo '
	<nav class="nav nav--author-social-links">
	<ul>
';

if ($email != '') {
	echo '<li><a href="'. $email .'" class="icon icon--email"></a></li>';
}
if ($facebook != '') {
	echo '<li><a href="'. $facebook .'" class="icon icon--facebook"></a></li>';
}
if ($twitter != '') {
	echo '<li><a href="'. $twitter .'" class="icon icon--twitter"></a></li>';
}
if ($instagram != '') {
	echo '<li><a href="'. $instagram .'" class="icon icon--instagram"></a></li>';
}
if ($web != '') {
	echo '<li><a href="'. $web .'" class="icon icon--web"></a></li>';
}


echo '
	</ul>
	</nav>
';


?>