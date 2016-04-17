<html>
<meta charset="utf-8">
<link href = "css/bootstrap.css" rel="stylesheet">
</html>
<?php
session_start();
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
    echo "<html>
<head>
    <title>Страница пользователя</title>
    </head>
<body>
<div class=\"navbar-header\">
<h2>Страница пользователя</h2>
<br>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"> <a data-toggle=\"tab\" href=\"#panel1\">Приветствие</a></li>
        <li ><a href=\"pogoda.php\">Погода</a></li>
        <li> <a href=\"beckup.php\">Обратная связь</a></li>
        <li> <a href=\"feedback.php\">Коментарии</a></li>
        </ul>
<div class=\"tab-content\">
    <div id=\"panel1\" class=\"tab-pane fade in active\">
        <h3>$a</h3>
    </div>
</div>        
</body>
<form role=\"form\" action=\"exit.php\" method=\"SESSION\">
<br>
<button type=\"submit\" class=\"btn btn-success\">Выйти</button>
</form>
</html>";
} } else {?>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<div class="navbar-header">
<h2>Главная страница</h2>
    <br>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#panel1">Вход</a></li>
        <li> <a href="reg.php">Регистрация</a></li>
        <li> <a href="beckup2.php">Обратная связь</a></li>
        </ul>
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

