<html>
<meta charset="utf-8">
</html>
<?php
if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
if (isset($_POST['last_name'])) { $last_name = $_POST['last_name']; if ($last_name == '') { unset($last_name);} }
if (isset($_POST['date'])) { $date = $_POST['date']; if ($date == '') { unset($date);} }
if (isset($_POST['sex'])) { $sex = $_POST['sex']; if ($sex  == '') { unset($sex);} }
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

echo "<html>
    <form action=\"save_user.php\" method=\"post\">
    <label>Ваше имя:<br></label>
    <input name=\"name\" type=\"text\" size=\"15\" maxlength=\"15\">
    <input type=\"submit\" name=\"submit\" value=\"Проверка\">
</form>
</html>";

if (empty($_POST['name']))
{
    echo "Пусто";
}
else { echo "Непусто";}

if (empty($name) or empty($last_name) or empty($date) or empty($sex) or empty($email) or empty($login) or empty($password)   )
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$name = stripslashes($name);
$name = htmlspecialchars($name);
$last_name = stripslashes($last_name);
$last_name = htmlspecialchars($last_name);
$date = stripslashes($date);
$date = htmlspecialchars($date);
$sex = stripslashes($sex);
$sex = htmlspecialchars($sex);
$email = stripslashes($email);
$email = htmlspecialchars($email);
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$name = trim($name);
$last_name = trim($last_name);
$date = trim($date);
$sex = trim($sex);
$email = trim($email);
$login = trim($login);
$password = trim($password);



include ("bd.php");

$result = $conn->query('SELECT * FROM reg WHERE login= '.$conn->quote($login));

if ( count($result) ) {
    foreach($result as $myrow) {
      //  print_r($myrow);
    }
} else {
    echo "Yes";
}

if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}

$result2 = $conn->query ("INSERT INTO reg (name,last_name,date,sex,email,login,password) VALUES('$name','$last_name','$date','$sex','$email','$login','$password')");

if ($result2)
{
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
}
else {
    echo "Ошибка! Вы не зарегистрированы.";
}
?>

