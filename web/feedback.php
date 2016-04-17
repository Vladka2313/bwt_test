<html xmlns:h="http://www.w3.org/1999/XSL/Transform">
<meta charset="utf-8">
<link href = "css/bootstrap.css" rel="stylesheet">
<head>
    <title>Фидбэк</title>
</head>
<body>
<div class="navbar-header">
    <h2>Страница пользователя</h2>
    <br>
    <ul class="nav nav-pills">
        <li><a href="index.php">Приветствие</a></li>
        <li><a href="pogoda.php">Погода</a></li>
        <li><a href="beckup.php">Обратная связь</a></li>
        <li class="active"> <a data-toggle="tab" href="feedback.php">Коментарии</a></li>
    </ul>
<?php
include ("bd.php");
$result = $conn->query('SELECT * FROM beckup ');
foreach($result as $myrow) {
    echo '<p><br>Пользователь - '.$myrow['name'].'.<br> Текст сообщения: '.$myrow['comment'].'</p>';
};

?>
</div>
</body>
</html>