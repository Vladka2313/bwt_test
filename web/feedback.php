<html xmlns:h="http://www.w3.org/1999/XSL/Transform">
<meta charset="utf-8">
<head>
    <title>Фидбэк</title>
    </head>

<?php
include ("bd.php");

$result = $conn->query('SELECT * FROM beckup ');
foreach($result as $myrow) {
    echo '<p>Пользователь - '.$myrow['name'].'.<br> Текст сообщения: '.$myrow['comment'].'</p>';
};

?>

</html>