<?php
// Подключение к БДшке
$connection = pg_connect("host=localhost dbname=assignment6 user=postgres password=1337");

if (!$connection) {
    echo "Error connecting to the database.";
    exit;
}

// Проверяем, что форма была отправлена
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из формы
    $username = $_POST['username_login'];
    $password = $_POST['password_login'];

    // SQL Запрос
    $sql = "SELECT * FROM users WHERE username = $1";
    $result = pg_query_params($connection, $sql, array($username));

    if ($result && pg_num_rows($result) > 0) {
        // Извлекаем данные пользователя
        $user = pg_fetch_assoc($result);

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
}

// Закрываем соединение с базой данных
pg_close($connection);
?>

