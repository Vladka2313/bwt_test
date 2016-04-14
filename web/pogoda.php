<html>
<meta charset="utf-8">
<head>
    <title>Погода</title>
</head>
</html>
<?php
$gismeteo = 'http://www.gismeteo.ua/city/daily/5093/';
$content = file_get_contents ($gismeteo);
preg_match_all ('#<div class="wsection wdata">(.*?)<div class="section bottom">#is', $content,$pogoda);
echo $pogoda[0][0];
?>