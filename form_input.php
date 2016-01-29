<?php
$current = file_get_contents('honors_crap.txt');
$current_html = file_get_contents('honors_crap.html');
$new_string = $_GET['honors-input'];
if ($new_string != "" && !strstr($new_string, "<script")) {
	$current .= $new_string."\n";
	$current_html .= $new_string."<br>\n";
	file_put_contents('honors_crap.txt', $current);
	file_put_contents('honors_crap.html', $current_html);
}
header('Location: http://alco.holiday/');
exit;
