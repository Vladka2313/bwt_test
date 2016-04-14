<html>
<meta charset="utf-8">
</html>
<?php
session_start();
//if (isset($_POST['name'])){
if (isset($_SESSION['login']))
{
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    echo "Вы вошли на сайт, как гость<br >";
    echo "<br><a href=\"beckup.php\"><br>Обратная связь</a>";
}
else
{
    echo "Добрый день ".$_SESSION['login'];
    echo "<br><a href=\"pogoda.php\"><br>Погода</a>";
    echo "<br><a href=\"beckup.php\"><br>Обратная связь</a>";
    echo "<br><a href=\"feedback.php\"><br>Коменты</a>";
    //echo "<br><a href=\"exit.php\"><br>Выход</a>";
    echo "<br><html>
<form action=\"exit.php\" method=\"SESSION\">
<p>
    <input type=\"submit\" name=\"submit\" value=\"Выход\" >
    </p>
</form>
</html>";
} } else {?>
<html>

<head>
    <title>Главная страница</title>
</head>
<body>
<h2>Главная страница</h2>
<form action="testreg.php" method="post">

<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
<p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
<p>
        <input type="submit" name="submit" value="Войти">
    <br>
    <a href="reg.php"><br>Зарегистрироваться</a>
    </p></form>
<br>
<?php
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    echo "Вы вошли на сайт, как гость<br >";
    echo "<br><a href=\"beckup.php\"><br>Обратная связь</a>";
}}
?>


