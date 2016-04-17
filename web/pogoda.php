<?php
include ("func.php");
$mass = ['index.php' => 'Приветствие', 'pogoda.php' => 'Погода', 'beckup2.php' => 'Обратная связь', 'feedback.php'=>'Коментарии'];
session_start();
$title = "<title > Погода </title >";
require "header.php";
?>
<body>
<div class="navbar-header">
    <h2>Страница пользователя</h2>
    <br>
    <!--<ul class="nav nav-pills">
    <li> <a href="index.php">Приветствие</a></li>
    <li class="active"><a data-toggle="tab" href="pogoda.php">Погода</a></li>
    <li> <a href="beckup.php">Обратная связь</a></li>
    <li> <a href="feedback.php">Коментарии</a></li>
    </ul>-->
    <?php
    echo (first_function($mass));
    ?>
    <br>
</body>
</html>
<?php
$gismeteo = 'http://www.gismeteo.ua/city/daily/5093/';
$content = file_get_contents ($gismeteo);
preg_match_all ('#<div class="wsection wdata">(.*?)<div class="section bottom">#is', $content,$pogoda);
echo $pogoda[0][0];
?>