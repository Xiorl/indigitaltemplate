<?php

$lang = get_bloginfo('language');

$rrss_options = get_option( 'rrss_option_name' );
$facebook_account_0 = $rrss_options['facebook_account_0'];
$facebook_page_1 = $rrss_options['facebook_page_1'];
$facebook_app_id_2 = $rrss_options['facebook_app_id_2'];
$twitter_account_3 = $rrss_options['twitter_account_3'];
$instagram_account_4 = $rrss_options['instagram_account_4'];
$youtube_account_5 = $rrss_options['youtube_account_5'];
$vimeo_account_6 = $rrss_options['vimeo_account_6'];
$tiktok_account_7 = $rrss_options['tiktok_account_7'];
$snapchat_account_8 = $rrss_options['snapchat_account_8'];
$linkedin_account_9 = $rrss_options['linkedin_account_9'];
$facebook_show_10 = $rrss_options['facebook_show_10'];
$twitter_show_11 = $rrss_options['twitter_show_11'];
$instagram_show_12 = $rrss_options['instagram_show_12'];
$youtube_show_13 = $rrss_options['youtube_show_13'];
$vimeo_show_14 = $rrss_options['vimeo_show_14'];
$tiktok_show_15 = $rrss_options['tiktok_show_15'];
$snapchat_show_16 = $rrss_options['snapchat_show_16'];
$linkedin_show_17 = $rrss_options['linkedin_show_17'];


echo '
	<nav class="nav nav--social">
	<ul>
';

if ($facebook_show_10 != '') {
	echo '<li><a href="'. $facebook_account_0 .'" class="icon icon--facebook"></a></li>';
}
if ($twitter_show_11 != '') {
	echo '<li><a href="'. $twitter_account_3 .'" class="icon icon--twitter"></a></li>';
}
if ($instagram_show_12 != '') {
	echo '<li><a href="'. $instagram_account_4 .'" class="icon icon--instagram"></a></li>';
}
if ($youtube_show_13 != '') {
	echo '<li><a href="'. $youtube_account_5 .'" class="icon icon--youtube"></a></li>';
}
if ($vimeo_show_14 != '') {
	echo '<li><a href="'. $vimeo_account_6 .'" class="icon icon--vimeo"></a></li>';
}
if ($tiktok_show_15 != '') {
	echo '<li><a href="'. $tiktok_account_7 .'" class="icon icon--tiktok"></a></li>';
}
if ($snapchat_show_16 != '') {
	echo '<li><a href="'. $snapchat_account_8.'" class="icon icon--snapchat"></a></li>';
}
if ($linkedin_show_17 != '') {
	echo '<li><a href="'. $linkedin_account_9 .'" class="icon icon--linkedin"></a></li>';
}

echo '
	</ul>
	</nav>
';

?>