<html xmlns:h="http://www.w3.org/1999/XSL/Transform">
<meta charset="utf-8">
<head>

    <title>Обратная связь</title>
</head>
<body>
<h2>Обратная связь</h2>
<form action="beckup.php" method="post">
    <p>
        <label>Имя пользователя:<br></label>
        <input name="name" type="text" size="15" maxlength="15"    required="true">
    </p>
    <p>
        <label>Email:<br></label>
        <input name="email" type="email" size="15"  maxlength="25">
    </p>
    <p>
        <label>Оставить Отзыв:<br></label>
        <textarea name="comment" cols="40" rows="7"></textarea>
        <!--<input name="comment" type="text" size="30" weight="50" maxlength="100">-->
    </p>
    <p>
        <img src="capcha.php" alt="защитный код">
    </p>
    <p>
        <input name="capcha" type="text" size="15"  maxlength="25" required="true">
    </p>
    <p>
        <input type="submit" name="submit" value="Отправить отзыв">
    </p>
</form>
</body>
</html>
<?php
session_start();
if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
if (isset($_POST['comment'])) { $comment=$_POST['comment']; if ($comment =='') { unset($comment);} }

if (isset($_POST['name']))
{
    if (empty($name) or empty($email) or empty ($comment))
{
    echo ("Вы ввели не всю информацию!");
}

else {
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $comment = stripslashes($comment);
    $comment = htmlspecialchars($comment);

    $name = trim($name);
    $email = trim($email);

    include("bd.php");

    $result2 = $conn->query("INSERT INTO beckup (name,email,comment) VALUES('$name','$email','$comment')");
    if ($result2) {
        echo "Ваш комментарий успешно отправлен)  <a href='index.php'><br>Главная страница</a>";
    } else {
        echo "Ошибка!";
    }
    
}}
?>