<html xmlns:h="http://www.w3.org/1999/XSL/Transform">
<meta charset="utf-8">
<link href = "css/bootstrap.css" rel="stylesheet">
<head>
    <title>Регистрация</title>
</head>
<body>
<div class="navbar-header">
    <h2>Регистрация</h2>
    <br>
    <ul class="nav nav-tabs">
        <li><a href="index.php">Вход</a></li>
        <li class="active"> <a data-toggle="tab" href="reg.php">Регистрация</a></li>
        <li> <a href="beckup.php">Обратная связь</a></li>
    </ul>
    <br>
<div class="tab-content">
     <div id="reg.php" class="tab-pane fade in active">
    <form data-toggle="validator" role="form" action="save_user.php" method="post">
<div class="form-group">
    <label for="name">Имя пользователя:</label>
    <input name="name" type="text" class="form-control" id="name" required>
</div>
<div class="form-group">
    <label for="last_name">Фамилия:</label>
    <input name="last_name" type="text" class="form-control" id="last_name" required>
</div>
<div class="form-group">
    <label for="date">Дата рождения:</label>
    <input name="date" type="date" class="form-control" id="date">
</div>
<div class="form-group">
    <label for="sex">Ваш пол:</label>
            <select name="sex" >
                <option value="m"> мужской </option>
                <option value="f"> женский </option>
            </select>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input name="email" type="email" class="form-control" id="email" required>
</div>
<div class="form-group">
    <label for="login">Login:</label>
    <input name="login" type="text" class="form-control" id="login" required>
</div>
<div class="form-group"
    <label for="password">Пароль:</label>
    <input name="password" type="password" class="form-control" id="password" required>
</div>
    <button type="submit" class="btn btn-success">Зарегистрироваться</button>
</form>
</div>
</div>
</div>
</body>
</html>
