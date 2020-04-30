<?php
/*$url = file_get_contents("https://covid19.th-stat.com/api/open/today");
$start_cut = strpos($url,"<span>(เพิ่มขึ้น 15)</span>");
$page = substr($url,$start_cut);
$stop_cut = strpos($url,"</span>",0);
echo $page;*/
$myjson = file_get_contents('https://covid19.th-stat.com/api/open/today/');
$json = json_decode($myjson, true);
$UpdateDate = $json['UpdateDate'];
//$UpdateDate = $json['UpdateDate'];
?>