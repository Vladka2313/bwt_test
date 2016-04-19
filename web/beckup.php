<?php
include ("func.php");
$mass2 = ['index.php' => 'Вход', 'reg.php' => 'Регистрация', 'beckup.php' => 'Обратная связь'];
session_start();
$title = "<title >Обратная связь</title >";
require "header.php";
?>
<body>
<div class="navbar-header">
    <h2>Главная страница</h2>
    <br>
    <?php
    echo (first_function($mass2));
   ?>
<div class="tab-content">
    <div id="beckup.php" class="tab-pane fade in active">
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
        <div class="row">
            <div class="col-xs-12">
        <textarea name="comment" type="text" class="form-control" id="comment"   required ></textarea>
                </div>
        </div>
    </div>
    <img src="capcha.php" alt="защитный код">
    <div class="form-group" style="margin-top: 10px;">
    <input name="capcha" type="text" class="form-group" required >
    </div>
        <button type="submit" class="btn btn-success">Отправить отзыв</button>
        <!--<input type="submit" name="submit" value="Отправить отзыв">-->
<br>
<?php

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
        echo "<br>Ваш комментарий успешно отправлен)  <a href='index.php'><br>Главная страница</a>";
    } else {
        echo "Ошибка!";
    }

}}
?>
</form>
</div>
</div>
</div>
</body>
</html>
