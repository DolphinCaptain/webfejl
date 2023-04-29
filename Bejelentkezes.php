<?php
session_start();
include "load&saveUsers.php";

if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
    header("Location: profil.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/806882_app_512x512.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500;700&display=swap" rel="stylesheet">
    <title>Bejelentkezés</title>
</head>

<body>
<header class="header">
    <div class="heading">
        <h1 class="page-header">Mobil<span>Kisokos</span></h1>
        <nav>
            <ul class="nav">
                <li><a href="index.php" Title="Főoldal">Főoldal</a></li>
                <?php if (!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
                    <li><a href="Regisztracio.php" Title="Regisztráció">Regisztráció</a></li>
                    <li><a class="current" href="#" Title="Bejelentkezés">Bejelentkezés</a></li>
                <?php else: ?>
                    <li><a href="Technologia.php" Title="Technológia">Technológia</a></li>
                    <li><a href="Gyartok.php" Title="Gyártók">Gyártók</a></li>
                    <li><a href="Forum.php" Title="Fórum">Fórum</a></li>
                    <li><a href="hirlevel.php" Title="Hírlevél">Hírlevél</a></li>
                    <li><a href="profil.php" Title="Profil">Profil</a></li>
                    <li><a href="kijelentkezes.php" Title="Kijelentkezés">Kijelentkezés</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>


<main class="main">
    <div class="bejelentkezes-section">
        <h2 class="cim">Jelentkezz be oldalunkra!</h2>
    </div>

    <div id="container">

        <form method="post" id="reg">
            <fieldset>
                <legend>Bejelentkezés</legend>
                <ol>
                    <li>
                        <label>Felhasználónév</label>
                        <input id="username" type="text" name="username"/>
                    </li>
                    <li>
                        <label>Jelszó</label>
                        <input id="password1" type="password" name="password"/>
                    </li>
                </ol>
            </fieldset>

            <input type="submit" name="login" value="Bejelentkezés"/>
        </form>

        <?php
        $accounts = loadUsers("felhasznalok.txt");

        $user = "";
        $pass = "";

        if (isset($_POST["login"])) {
            $user = $_POST["username"];
            $pass = $_POST["password"];

            $message = "Sikertelen belépés!";
            $user_data = array();
            $succes_login = false;
            foreach ($accounts as $account) {
                if ($user === $account["username"] && $pass === $account["password"]) {

                    $user_data["surname"] = $account["surname"];
                    $user_data["firstname"] = $account["firstname"];
                    $user_data["email"] = $account["email"];
                    $user_data["username"] = $account["username"];
                    $user_data["age"] = $account["age"];
                    $user_data["gender"] = $account["gender*"];
                    $succes_login = true;


                    break;
                }
            }
            if ($succes_login) {
                $_SESSION["user"] = $user_data;
                header("Location: profil.php");

            } else {
                echo "Sikertelen belépés!";
            }

        }
        ?>

        <a href="Bejelentkezes.php" class="top">TOP</a>
    </div>
    </div>
    </div>
</main>

<?php include "footer.php"; ?>

</body>
</html>