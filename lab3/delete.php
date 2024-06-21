<!-- delete.php -->
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Вилучення користувача</title>
</head>
<body>
<h3>Вилучення користувача</h3>
<form action="process_delete_user.php" method="post">
    <label for="login">Логін:</label>
    <input type="text" id="login" name="login" required><br><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Вилучити користувача">
</form>
</body>
</html>
