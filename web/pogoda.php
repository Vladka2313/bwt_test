<html>
<meta charset="utf-8">
</html>
<?php

$gismeteo = 'http://gismeteo.ru/city/legacy/?city=4368';
$content = file_get_contents ($gismeteo);
preg_match_all ('#<div class="pampers">(.*?)<ul class="mnu">#is', $content,$pogoda);
        var_dump($pogoda[0]);
?>