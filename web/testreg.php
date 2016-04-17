<html>
<meta charset="utf-8">
<link href = "css/bootstrap.css" rel="stylesheet">
</html>
<?php
session_start();
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

if (empty($login) or empty($password)) 
{
    echo ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
else {
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);

include ("bd.php");

$result = $conn->query('SELECT * FROM reg WHERE login= '.$conn->quote($login));

if ( count($result) ) {
    foreach($result as $myrow) {
   // print_r($myrow);
    }
    }

if (empty($myrow['password']))
{
    
    exit ("Извините, введённый вами login или пароль неверный.");
}
else {
    
    if ($myrow['password']==$password) {
        
        $_SESSION['login']=$myrow['login'];
        $_SESSION['id']=$myrow['id'];
        
        echo "Вы успешно вошли на сайт!<br> <a href='index.php'><br>Меню</a>";
        //echo "Вы успешно вошли на сайт!<br> <a href='pogoda.php'><br>Погода</a>";
    }
    else {
        
        exit ("Извините, введённый вами пароль неверный.");
    }
}}
?>