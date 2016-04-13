<html>
<meta charset="utf-8">
</html>
<?php

//$gismeteo = 'https://www.gismeteo.ua/weather-zaporizhzhya-5093/';
/*$content = file_get_contents ($gismeteo);*/
/*$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$gismeteo);
$result = curl_exec($ch);
preg_match_all ('#<div class="wsection wdata">(.*?)<div class="section bottom">#is', $result,$pogoda);
curl_close($ch);
var_dump($pogoda[0]);*/

$gismeteo = 'http://www.gismeteo.ua/city/daily/5093/';
$content = file_get_contents ($gismeteo);
preg_match_all ('#<div class="wsection wdata">(.*?)<div class="section bottom">#is', $content,$pogoda);
//var_dump($pogoda[0]);
//print_r ($pogoda[0]);
//echo $pogoda[0];
//return $pogoda;
echo $pogoda[0][0];
//$a = ['test' => [['lol', 'lol2', 'lol3' => 'lol4'], 'lol5']];
/*$a2 = $a['test'];
$a3 = $a2[0];
echo $a3['lol3'];
echo  $a2[1];*/
//echo $a ['test'][0]['lol3'] ;
//echo $a ['test'][1];
?>