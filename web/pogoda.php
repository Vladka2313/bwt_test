<html>
<meta charset="utf-8">
</html>
<?php

$gismeteo = 'https://www.gismeteo.ua/weather-zaporizhzhya-5093/';
/*$content = file_get_contents ($gismeteo);*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$gismeteo);
$result = curl_exec($ch);
preg_match_all ('#<div class="fcontent">(.*?)<div class="rfc rfbl">#is', $result,$pogoda);
curl_close($ch);
var_dump($pogoda[0]);

?>