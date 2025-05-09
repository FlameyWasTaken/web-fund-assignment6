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
    $login = $_POST['username_register'];
    $email = $_POST['email_register'];
    $password = $_POST['password_register'];
    $terms = $_POST['terms_register'] ?? null;

    // Проверка согласия с условиями
    if ($terms) {
        // Хэшируем пароль(встроенкой)
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // SQL ЗАпрос
        $sql = "INSERT INTO users (username, password, email) VALUES ($1, $2, $3)";
        $result = pg_query_params($connection, $sql, array($login, $hashed_password, $email));

        // Проверяем успешность выполнения запроса
        if ($result) {
            echo "Registration is successful!";
        } else {
            echo "Error: the user could not be registered.";
        }
    } else {
        echo "You must agree to the terms and conditions.";
    }
}

// Закрываем соединение с базой данных
pg_close($connection);
?>