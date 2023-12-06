<!DOCTYPE html>
<html>
<head>
    <title>Завдання.Написати сценарій проходження форми логіну. Існує форма з полями "логін", "пароль", якщо введені дані не збігаються з правильними (визначеними в текстовому файлі), то виводити повідомлення про помилку, якщо збігаються, то виводити "ви залогінені". Використовувати масив глобальних змінних $_POST (метод відправки форми, відповідно, теж POST).

</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['login']) && isset($_POST['password'])) {
            $enteredLogin = $_POST['login'];
            $enteredPassword = $_POST['password'];

            $correctLogin = 'user';
            $correctPassword = 'password';

            if ($enteredLogin === $correctLogin && $enteredPassword === $correctPassword) {
                echo "<p>Ви залогінені.</p>";
            } else {
                echo "<p>Помилка: Неправильний логін та/або пароль.</p>";
            }
        }
    }
    ?>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="login">Логін:</label>
        <input type="text" id="login" name="login" required><br><br>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Увійти">
    </form>
</body>
</html>