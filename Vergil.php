<?php
// Переменная которая сказал Flamey я написал
$is_logged_in = false;
$username = "";

// Проверка на вход
if (isset($_GET['logged_in'])) {
    if ($_GET['logged_in'] == 'true') {
        $is_logged_in = true;
        $username = $_GET['username'];  // Извлекаем имя пользователя
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters | Slashers Fandom</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Подключение внешнего css файла -->
    <link rel="stylesheet" href="Style.css">
    <!-- Подключение внешнего js файла -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Jscript.js" defer></script>

</head>
<body>
    <!-- Форма регистрации (Flamey) -->
    <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close-outline"></ion-icon>
            </span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="input-box"> <!-- Поле для юзернейма -->
                    <span class="icon"> <ion-icon name="person-outline"></ion-icon> </span>
                    <input type="text" required name="username_login">
                    <label>Username</label>
                </div>
                <div class="input-box"> <!-- Поле для пароля -->
                    <span class="icon"> <ion-icon name="lock-closed-outline"></ion-icon> </span>
                    <input type="password" required name="password_login">
                    <label>Password</label>
                </div>
                <div class="remember-forgot"> <!-- Чекбокс -->
                    <label> <input type="checkbox" name="terms_login">I agree with the terms & conditions</label>
                </div>
                <div class="remember-forgot"> <!-- Чекбокс -->
                    <label> <input type="checkbox" name="rememberMe_login">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn">Login</button> <!-- Кнопка логина -->
                <div class="login-register"> <!-- Перейти на регистрэйшн -->
                    Don't have an account? <a href="#" class="register-link">Register</a>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="register.php" method="POST">
                <div class="input-box"> <!-- Поле для юзернейма -->
                    <span class="icon"> <ion-icon name="person-outline"></ion-icon> </span>
                    <input type="text" required name="username_register">
                    <label>Username</label>
                </div>
                <div class="input-box"> <!-- Поле для имэйла -->
                    <span class="icon"> <ion-icon name="mail-outline"></ion-icon> </span>
                    <input type="email" required name="email_register">
                    <label>Email</label>
                </div>
                <div class="input-box"> <!-- Поле для пароля -->
                    <span class="icon"> <ion-icon name="lock-closed-outline"></ion-icon> </span>
                    <input type="password" required name="password_register">
                    <label>Password</label>
                </div>
                <div class="remember-forgot"> <!-- Чекбокс -->
                    <label> <input type="checkbox" name="terms_register">I agree with the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button> <!-- Кнопка регистрации -->
                <div class="login-register"> <!-- Перейти на логин -->
                    Already have an account? <a href="#" class="login-link">Login   </a>
                </div>
            </form>


        </div>
    </div>

    <div class="navbar"> <!-- Навигейшн (Саги) -->
        <button onclick="goToPage('home.php')">HOME</button>
        <button onclick="goToPage('contact.php')">CONTACT PAGE</button>
        <div class="dropdown">
            <a class="dropdown-toggle no-underline" role="button"
               id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CONTENT ▼
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle no-underline">Playable Characters ▼</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Dante.php#Dante">Dante</a>
                        <a class="dropdown-item" href="Vergil.php#Vergil">Vergil</a>
                        <a class="dropdown-item" href="Raiden.php#Raiden">Raiden</a>
                        <a class="dropdown-item" href="Sam.php#Sam">Sam</a>
                    </div>
                </div>
                <div class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle no-underline" href="">Techniques ▼</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="DMC Combo.php">DMC Combo</a>
                        <a class="dropdown-item" href="MGR Combo.php">MGR Combo</a>
                    </div>
                </div>
                <div class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle no-underline" href="">Items ▼</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Weapons.php">Weapons</a>
                        <a class="dropdown-item" href="Sphere and Health.php">Sphere</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Кнопка логин или имя пользователя-->
        <button class="btnLogin-popup">
            <?php if ($is_logged_in) {
                echo $username;
            } else {
                echo 'LOGIN';
            } ?>
        </button>

        <div class="collab-images">
            <img src="DMC Image/DMC_Wallpaper.jpg" alt="DMC Logo">
            <div class="collab-x">X</div>
            <img src="MGR Image/MGR_Wallpaper.jpg" alt="MGR Logo">
        </div>
    </div>

    <!-- Контент с карточками персонажей -->
    <div class="container mt-5">
        <h1>Our Main Characters</h1>
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h3 class="card-title text-center" id="Vergil">Vergil (Devil May Cry Series)</h3>
                <div class="text-center">
                    <img src="DMC Image/Vergil_DMC5.png" alt="Vergil" class="img-fluid rounded mb-3" style="max-width: 200px;">
                </div>
                <p class="card-text">Vergil, <a href="Dante.php">Dante's</a> brother, is known for his stoic nature and relentless pursuit of power.</p>
                <h4>Appearances:</h4>
                <ul>
                    <li>Devil May Cry 3</li>
                    <li>Devil May Cry 4 (Special Edition)</li>
                    <li>Devil May Cry 5</li>
                </ul>
                <h4>Weapons:</h4>
                <ul>
                    <li>Swords: Yamato, Force Edge</li>
                    <li>Gauntlets: Beowulf</li>
                </ul>
                <h4>Other Abilities:</h4>
                <ul>
                    <li>Immortality</li>
                    <li>Superhuman abilities</li>
                    <li>Dark magic</li>
                    <li>Seeks POWER at all costs</li>
                    <li>Top one at having motivation</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Таблица сравнения оружия -->
    <div class="container my-5">
        <h2 class="text-center">Weapons Comparison Table</h2>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Character</th>
                    <th>Primary Weapon</th>
                    <th>Weapon Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dante</td>
                    <td>Ebony & Ivory</td>
                    <td>Pistols</td>
                </tr>
                <tr>
                    <td>Vergil</td>
                    <td>Yamato</td>
                    <td>Katana</td>
                </tr>
                <tr>
                    <td>Raiden</td>
                    <td>High-Frequency Blade</td>
                    <td>Sword</td>
                </tr>
                <tr>
                    <td>Sam</td>
                    <td>Murasama Blade</td>
                    <td>Sword</td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer id="footer">
        <p id="ns">Our contacts:<br>1-800-273-8255<br>travisscott@gmail.com<br>travisscott.com</p>
        <p id="ns">&copy; All rights are reserved (C) Cactus Jack Records.</p>

        <div class="newsletter-form">
            <p>Subscribe to not miss anything! You will receive news from us!
            </p>

            <form action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="d7bfacae-ca19-46b8-ac75-443097670058">

                <input type="email" name="Email" class="input-box" required placeholder="Enter your email address here:">
                <input type="submit" class="btn" value="Subscribe">
            </form>
        </div>
    </footer>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Иконки -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>