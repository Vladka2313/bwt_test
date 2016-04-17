<html xmlns:h="http://www.w3.org/1999/XSL/Transform">
<meta charset="utf-8">
<link href = "css/bootstrap.css" rel="stylesheet">
<head>
    <title>Обратная связь</title>
</head>
<body>
<div class="navbar-header">
    <h2>Страница пользователя</h2>
    <br>
    <ul class="nav nav-pills">
        <li ><a href="index.php">Приветствие</a></li>
        <li ><a href="pogoda.php">Погода</a></li>
        <li class="active"> <a data-toggle="tab" href="beckup.php">Обратная связь</a></li>
        <li> <a href="feedback.php">Коментарии</a></li>
    </ul>
<div class="tab-content">
    <div id="beckup.php" class="tab-pane fade in active">
        <h3>Обратная связь</h3>
        <br>
<form data-toggle="validator" role="form" action="beckup.php" method="post">
    <div class="form-group">
        <label for="name">Имя пользователя:</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Введите имя" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="email" required>
    </div>
    <div class="form-group" >
        <label for="comment">Оставить Отзыв:</label>
        <input name="comment" type="text" class="form-control" id="comment" style="height:150px " required >
    <br>
    </div>
    <img src="capcha.php" alt="защитный код">
    <div class="form-group" style="margin-top: 10px;">
    <input name="capcha" type="text" class="form-group" >
    </div>
        <button type="submit" class="btn btn-success">Отправить отзыв</button>
        <!--<input type="submit" name="submit" value="Отправить отзыв">-->
</form>
</div>
</div>
</div>
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

