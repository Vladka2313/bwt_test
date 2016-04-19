<?php
include ("bd.php");
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
    <?php
echo (first_function($mass));
$result = $conn->query('SELECT * FROM beckup ');
foreach($result as $myrow)
{
    echo '<p><br>Пользователь - '.$myrow['name'].'.<br> Текст сообщения: '.$myrow['comment'].'<br><br>----------------------------'.'</p>';
};
?>
</div>
</body>
</html>