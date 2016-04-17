<?php
include ("func.php");
$mass = ['index.php' => 'Приветствие', 'pogoda.php' => 'Погода', 'beckup2.php' => 'Обратная связь', 'feedback.php'=>'Коментарии'];
$mass2 = ['index.php' => 'Вход', 'reg.php' => 'Регистрация', 'beckup.php' => 'Обратная связь'];
session_start();
if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    $title = "<title > Главная страница </title >";
}else
{$title = "<title > Страница пользователя </title >";}
require "header.php";
?>
<body>
<?php

if (isset($_SESSION['login']))
{
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    echo "Вы вошли на сайт, как гость<br >";
    echo "<br><a href=\"beckup.php\"><br>Обратная связь</a>";
}
else
{
    $a="Добрый день ".$_SESSION['login'];
    echo "
<div class=\"navbar-header\">
<h2>Страница пользователя</h2>
<br>
    <!-- <ul class=\"nav nav-pills\">
        <li class=\"active\"> <a data-toggle=\"tab\" href=\"#panel1\">Приветствие</a></li>
        <li ><a href=\"pogoda.php\">Погода</a></li>
        <li> <a href=\"beckup.php\">Обратная связь</a></li>
        <li> <a href=\"feedback.php\">Коментарии</a></li>
        </ul>-->
     ";
    echo (first_function($mass));
 echo"
<div class=\"tab-content\">
    <div id=\"panel1\" class=\"tab-pane fade in active\">
        <h3>$a</h3>
    </div>
</div>        

<form role=\"form\" action=\"exit.php\" method=\"SESSION\">
<br>
<button type=\"submit\" class=\"btn btn-success\">Выйти</button>
</form>
";
} } else {?>
<div class="navbar-header">
<h2>Главная страница</h2>
    <br>
    <?php
    echo (first_function($mass2));
    ?>
    <!--
    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="tab" href="#panel1">Вход</a></li>
        <li> <a href="reg.php">Регистрация</a></li>
        <li> <a href="beckup2.php">Обратная связь</a></li>
        </ul>-->
<div class="tab-content">
    <div id="panel1" class="tab-pane fade in active">
        <h3>Вход</h3>
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    echo "Вы вошли на сайт, как гость";
}
?>
<form role="form" action="testreg.php" method="post" >
<div class="form-group">
    <br>
    <label for="login">Ваш логин:</label>
    <input name="login" type="text" class="form-control" id="login" placeholder="Введите логин">
</div>
<div class="form-group">
    <label for="password">Ваш пароль:</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Введите пароль">
</div>
    <button type="submit" class="btn btn-success">Войти</button>
   </form>
        </div>
</div>
<?php
}
?>
</div>
</body>
</html>

