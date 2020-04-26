<?php
$myjson = file_get_contents('https://covid19.th-stat.com/api/open/today/');
$json = json_decode($myjson, true);
$NewConfirmed = $json['NewConfirmed'];
?>
