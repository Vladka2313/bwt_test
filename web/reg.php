<html>
<meta charset="utf-8">
    <head>

    <title>Регистрация</title>
    </head>
    <body>
    <h2>Регистрация</h2>
    <form action="save_user.php" method="post">
<p>
        <label>Имя пользователя:<br></label>
        <input name="name" type="text" size="15" maxlength="15">
    </p>
        <p>
            <label>Фамилия:<br></label>
            <input name="last_name" type="text" size="15" maxlength="25">
        </p>
        <p>
            <label>Дата рождения:<br></label>
            <input name="date" type="text" size="15" maxlength="15">
        </p>
        <p>
            <label>Ваш пол:<br></label>
            <input name="sex" type="text" size="15" maxlength="15">
        </p>
        <p>
            <label>Email:<br></label>
            <input name="email" type="email" size="15" maxlength="25">
        </p>
     <p>
    <label>Login:<br></label>
    <input name="login" type="text" size="15" maxlength="25">
    </p>
<p>
    <label>Пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="20">
    </p>
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
    </p>
</form>
    </body>
    </html>
