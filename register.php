<?php
// Подключение к БДшке
$connection = new mysqli("localhost:3306", "root", "1337", "assignment6");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Проверяем, что форма была отправлена
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из формы
    $login = $_POST['username_register'];
    $email = $_POST['email_register'];
    $password = $_POST['password_register'];
    $terms = $_POST['terms_register'] ?? null;

    // Проверка согласия с условиями
    if ($terms) {
        // Хэшируем пароль(встроенкой)
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // SQL ЗАпрос
        $stmt = $connection->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $login, $hashed_password, $email);

        // Проверяем успешность выполнения запроса
        if ($stmt->execute()) {
            echo "Registration is successful!";
        } else {
            echo "Error: the user could not be registered.";
        }

        $stmt->close();
    } else {
        echo "You must agree to the terms and conditions.";
    }
}

// Закрываем соединение с базой данных
$connection->close();
?>