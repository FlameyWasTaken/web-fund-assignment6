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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $pageTitle = "Home | Slashers Fandom"; ?>
    <title><?php echo $pageTitle; ?></title>
    <!--    <title>Home | Slashers Fandom</title>-->
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

<!-- Описание сайта(по серединке) -->
<div class="description">
    <h1>Welcome to Slashers Fandom!</h1>
    <h2>About This Site</h2>
    <h4>Our community is built for those who love slashers
        overall. Discuss, debate, and vote for your favorite personalities in this epic
        showdown of the legends. Take a seat and enjoy!</h4>
</div>

<!-- Слайдер картинок для DMC и MGR -->
<div class="carousel-container">
    <!-- Карусель для изображений DMC -->
    <div class="slider" id="dmc-slider">
        <div class="slides">
            <img class="slide" src="DMC Image/DMC_Wallpaper.jpg" alt="An image of DMC Wallpaper #1">
            <img class="slide" src="DMC Image/DMC_Wallpaper2.jpg" alt="An image of DMC Wallpaper #2">
            <img class="slide" src="DMC Image/DMC_Wallpaper3.jpg" alt="An image of DMC Wallpaper #3">
        </div>
        <button class="prev" onclick="prevSlide('dmc-slider')">&#10094;</button>
        <button class="next" onclick="nextSlide('dmc-slider')">&#10095;</button>
    </div>

    <!-- Карусель для изображений MGR -->
    <div class="slider" id="mgr-slider">
        <div class="slides">
            <img class="slide" src="MGR Image/MGR_Wallpaper.jpg" alt="An image of MGR Wallpaper #1">
            <img class="slide" src="MGR Image/MGR_Wallpaper2.jpg" alt="An image of MGR Wallpaper #2">
            <img class="slide" src="MGR Image/MGR_Wallpaper3.jpg" alt="An image of MGR Wallpaper #3">
        </div>
        <button class="prev" onclick="prevSlide('mgr-slider')">&#10094;</button>
        <button class="next" onclick="nextSlide('mgr-slider')">&#10095;</button>
    </div>
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
