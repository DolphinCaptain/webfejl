<?php
session_start();
include "load&saveUsers.php";

if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("Location: Bejelentkezes.php");
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
    <title>Profil</title>
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
                    <li><a href="Bejelentkezes.php" Title="Bejelentkezés">Bejelentkezés</a></li>
                <?php else: ?>
                    <li><a href="Technologia.php" Title="Technológia">Technológia</a></li>
                    <li><a href="Gyartok.php" Title="Gyártók">Gyártók</a></li>
                    <li><a href="Forum.php" Title="Fórum">Fórum</a></li>
                    <li><a href="hirlevel.php" Title="Hírlevél">Hírlevél</a></li>
                    <li><a class="current" href="#" Title="Profil">Profil</a></li>
                    <li><a href="kijelentkezes.php" Title="Kijelentkezés">Kijelentkezés</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>


<main class="main">

    <div class="profil-section">
        <h2 class="cim"> Szia <?= $_SESSION["user"]["username"] ?>, ez a te saját profilod!</h2>
    </div>


    <?php
    // a profilkép elérési útvonalának eltárolása egy változóban

    $profilkep = "images/default.png";
    $utvonal = "images/" . $_SESSION["user"]["username"];

    $kiterjesztesek = ["png", "jpg", "jpeg"];

    foreach ($kiterjesztesek as $kiterjesztes) {
        if (file_exists($utvonal . "." . $kiterjesztes)) {
            $profilkep = $utvonal . "." . $kiterjesztes;
        }
    }
    ?>

    <div class="container">
        <div class="content">
            <div class="profil-adatok">

                <h3>A jelenlegi oldalon találod a regisztrációkor megadott néhány adatod</h3>

                <img src="<?php echo $profilkep; ?>" alt="Profilkép" height="250"/>
                <?php if ($_SESSION["user"]["username"] !== "default") { ?>
                    <form action="profil.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="profile-pic" accept="image/*"/>
                        <input type="submit" name="upload-btn" value="Profilkép módosítása"/>
                    </form>
                <?php } ?>

                <?php
                // a profilkép módosíto PHP kód

                if (isset($_POST["upload-btn"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {
                    $fajlfeltoltes_hiba = "";
                    uploadProfilePicture($_SESSION["user"]["username"]);

                    $kit = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));
                    $utvonal = "images/" . $_SESSION["user"]["username"] . "." . $kit;


                    if ($fajlfeltoltes_hiba === "") {
                        if ($utvonal !== $profilkep && $profilkep !== "images/default.png") {
                            unlink($profilkep);
                        }

                        header("Location: profil.php");
                    } else {
                        echo "<p>" . $fajlfeltoltes_hiba . "</p>";
                    }
                }
                ?>

                <br>
                Teljes név: <?= $_SESSION["user"]["surname"] ?> <?= $_SESSION["user"]["firstname"] ?>
                <br>
                E-mail cím: <?= $_SESSION["user"]["email"] ?>
                <br>
                Felhasználónév: <?= $_SESSION["user"]["username"] ?>
                <br>
                Korod: <?= $_SESSION["user"]["age"] ?>
                <br>


            </div>
        </div>
    </div>

</main>


<?php include "footer.php"; ?>

</body>
</html>