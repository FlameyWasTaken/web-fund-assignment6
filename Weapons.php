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
        <h1 class="text-center mb-4">Weapons DMC</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card custom-card">
                    <div class="card-img">
                        <img src="DMC Image/weapons/Arbiter_DmC.jpg" alt="Arbiter">
                    </div>
                    <div class="card-info">
                        <h3>Arbiter</h3>
                        <p>Arbiter is <a href="Dante.php">Dante's</a>  first demonic weapon in DmC: Devil May Cry.
                            A weapon of great heft, it crushes almost anything with its thunderous strikes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card custom-card">
                    <div class="card-img">
                        <img src="DMC Image/weapons/Ophion_DmC.jpg" alt="Ophion">
                    </div>
                    <div class="card-info">
                        <h3>Ophion</h3>
                        <p>The Ophion is an alternate form of the Rebellion in DmC: Devil May Cry.
                            Earned once <a href="Dante.php">Dante</a> first journeys into his soul,
                            Ophion is an extremely resourceful tool for both combat and exploration,
                            and has both a Demonic and Angelic form.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card custom-card">
                    <div class="card-img">
                        <img src="DMC Image/weapons/Osiris_DmC.jpg" alt="Osiris">
                    </div>
                    <div class="card-info">
                        <h3>Osiris</h3>
                        <p>Osiris is <a href="Dante.php">Dante's</a> first angelic form for the Rebellion in DmC: Devil May Cry.
                            It is a light, speedy scythe that is both powerful and reliable.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card custom-card">
                    <div class="card-img">
                        <img src="DMC Image/weapons/Ebony_DMC4.jpg" alt="Ebony">
                    </div>
                    <div class="card-info">
                        <h3>Ebony</h3>
                        <p>Ebony & Ivory are <a href="Dante.php">Dante's</a> trademark pair of personally customized,
                            semi-automatic pistols, designed to rapidly fire bullets instilled with his
                            demonic power.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card custom-card">
                    <div class="card-img">
                        <img src="DMC Image/weapons/Devil_May_Cry_5_Faust_Hat_Render_PNG.jpg" alt="Hat">
                    </div>
                    <div class="card-info">
                        <h3>Hat</h3>
                        <p>Dr. Faust is one of <a href="Dante.php">Dante's</a> weapons in Devil May Cry 5,
                            created and given to him by Nico. It is the weaponized form of a Faust.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card custom-card">
                    <div class="card-img">
                        <img src="DMC Image/weapons/Yamato_29.jpg" alt="Yamato_29">
                    </div>
                    <div class="card-info">
                        <h3>Yamato_29</h3>
                        <p>Yamato is the signature blade of <a href="Vergil.php">Vergil</a> and appears in
                            DmC: Devil May Cry. It was handed down to him by his father,
                            Sparda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Weapons MGR</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card custom-card">
                    <div class="card-img">
                        <img src="MGR Image/weapons/HF_Blade.jpg" alt="HF_Blade">
                    </div>
                    <div class="card-info">
                        <h3>HF Blade</h3>
                        <p><a href="Raiden.php">Raiden's</a> primary weapon. A customized version of the HF Blade
                            <a href="Raiden.php">Raiden</a>  previously wielded in Metal Gear Solid 2 and Metal Gear Solid 4,
                            it now boasts a connection to <a href="Raiden.php">Raiden's</a>  internal fuel cells (FC)
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card custom-card">
                    <div class="card-img">
                        <img src="MGR Image/weapons/HF_Murasama.jpg" alt="HF_Murasama">
                    </div>
                    <div class="card-info">
                        <h3>HF Murasama</h3>
                        <p><a href="Sam.php">Sam's</a> weapon was his HF Murasama blade. According to Blade Wolf,
                            the sword's high-frequency conversion carried over the already excellent
                            properties of the original sword, making it extremely powerful.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card custom-card">
                    <div class="card-img">
                        <img src="MGR Image/weapons/HF_Long_Sword.jpg" alt="HF_Long_Sword">
                    </div>
                    <div class="card-info">
                        <h3>HF Long Sword</h3>
                        <p>The HF Long Sword is simply a lengthened version of the standard HF Blade.
                            It was modeled after the Nodachi sword from Feudal Japan.
                            When fully upgraded it overcomes the power of the HF Murasama, </p>
                    </div>
                </div>
            </div>
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
