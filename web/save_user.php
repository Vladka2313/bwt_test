<?php
if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
if (isset($_POST['last_name'])) { $last_name = $_POST['last_name']; if ($last_name == '') { unset($last_name);} }
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

if (empty($login) or empty($password) or empty($name) or empty($last_name)or empty($email)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$name = stripslashes($name);
$name = htmlspecialchars($name);
$last_name = stripslashes($last_name);
$last_name = htmlspecialchars($last_name);
$email = stripslashes($email);
$email = htmlspecialchars($email);
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$name = trim($name);
$last_name = trim($last_name);
$email = trim($email);
$login = trim($login);
$password = trim($password);
// подключаемся к базе
include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
// проверка на существование пользователя с таким же логином
$result = mysql_query("SELECT id FROM reg WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
// если такого нет, то сохраняем данные
$result2 = mysql_query ("INSERT INTO reg (login,password) VALUES('$login','$password')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
}
else {
    echo "Ошибка! Вы не зарегистрированы.";
}
?>

