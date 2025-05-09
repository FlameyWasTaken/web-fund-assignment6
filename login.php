<?php
// Подключение к БДшке
$connection = new mysqli("localhost:3306", "root", "1337", "assignment6");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Проверяем, что форма была отправлена
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из формы
    $username = $_POST['username_login'];
    $password = $_POST['password_login'];

    // SQL Запрос
    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        // Извлекаем данные пользователя
        $user = $result->fetch_assoc();

        // Проверяем введённый пароль
        if (password_verify($password, $user['password'])) {
            // Перенаправляем пользователя на главную страницу с параметрами
            header("Location: home.php?logged_in=true&username=" . urlencode($username));
            exit;
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "The username with such username hasn't been found.";
    }

    $stmt->close();
}

// Закрываем соединение с базой данных
$connection->close();
?>

