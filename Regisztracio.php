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
    <title>Regisztráció</title>
</head>

<body>
<header class="header">
    <div class="heading">
        <h1 class="page-header">Mobil<span>Kisokos</span></h1>
        <nav>
            <ul class="nav">
                <li><a href="index.php" Title="Főoldal">Főoldal</a></li>
                <?php if (!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
                    <li><a class="current" href="#" Title="Regisztráció">Regisztráció</a></li>
                    <li><a href="Bejelentkezes.php" Title="Bejelentkezés">Bejelentkezés</a></li>
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
    <div class="regisztracio-section">
        <h2 class="cim">Regisztrálj oldalunkra!</h2>
    </div>

    <aside>
        <p>A legjobb helyen jársz, hogy regisztrálj oldalunkra! Így biztos nem maradsz le semmiről!</p>
    </aside>


    <div id="container">
        <br>
        Ha beregisztrálsz oldalunkra akkor további tartalmakhoz is hozzáférhetsz!
        <section>
            <form action="Regisztracio.php" method="post" id="reg" enctype="multipart/form-data">
                <fieldset>
                    <legend>Regisztráció</legend>
                    <ol>
                        <li>
                            <label>Vezetéknév<em>*</em></label>
                            <input id="surname" type="text" name="surname"/>
                        </li>
                        <li>
                            <label>Keresztnév<em>*</em></label>
                            <input id="firstname" type="text" name="firstname"/>
                        </li>
                        <li>
                            <label>Email cím</label>
                            <input id="email" type="text" name="email"/>
                        </li>
                        <li>
                            <label>Felhasználónév<em>*</em></label>
                            <input id="username" type="text" name="username"/>
                        </li>
                        <li>
                            <label>Jelszó<em>*</em></label>
                            <input id="password1" type="password" name="password"/>
                        </li>
                        <li>
                            <label>Jelszó megerősítése<em>*</em></label>
                            <input id="password2" type="password" name="password2"/>
                        </li>
                        <li>
                            <label>Kor<em>*</em></label>
                            <input id="age" type="text" name="age"/>
                        </li>
                        <br>

                        Nemed<em>*</em>
                        <br>
                        <label> <input type="radio" name="gender" value="male"> Férfi</label><br>
                        <label> <input type="radio" name="gender" value="female"> Nő</label>
                        <br>
                        <br>
                        Mik azok a témák amik érdeklik Önt?<em>*</em><br>
                        (legalább 2-t válasszon a felsoroltak közül!)
                        <ol>
                            <li>
                                <label>
                                    <input type="checkbox" name="topics[]" value="mobilephones"/>
                                    Mobiltelefonok
                                </label>
                            </li>
                            <br>
                            <li>
                                <label>
                                    <input type="checkbox" name="topics[]" value="touchscreen"/>
                                    Érintőképernyők
                                </label>
                            </li>
                            <br>
                            <li>
                                <label>
                                    <input type="checkbox" name="topics[]" value="applications"/>
                                    Alkalmazások
                                </label>
                            </li>
                            <br>
                            <li>
                                <label>
                                    <input type="checkbox" name="topics[]" value="photography"/>
                                    Fényképezés
                                </label>
                            </li>
                            <br>
                            <li>
                                <label>
                                    <input type="checkbox" name="topics[]" value="games"/>
                                    Játékok
                                </label>
                            </li>
                            <br>
                        </ol>


                        <li>
                            <label> Profilkép:</label>
                            <input type="file" id="file-upload" name="profile-pic" accept="image/*"/>
                        </li>

                    </ol>
                </fieldset>

                <input type="submit" name="signup" value="Regisztráció"/>
            </form>

            <?php
            $accounts = loadUsers("felhasznalok.txt");


            $first = "";
            $sur = "";
            $email = "";
            $user = "";
            $pass = "";
            $pass2 = "";
            $age = "";
            $gender = "";
            $topics = [];


            $errors = [];

            if (isset($_POST["signup"])) {

                $first = $_POST["firstname"];
                $sur = $_POST["surname"];
                $email = $_POST["email"];
                $user = $_POST["username"];
                $pass = $_POST["password"];
                $pass2 = $_POST["password2"];
                $age = $_POST["age"];



                if (isset($_POST["topics"])) {
                    $topics = $_POST["topics"];
                }

                if (empty($_POST["surname"])) {
                    $errors[] = "Adja meg a vezetéknevét!";
                } else if (!preg_match('/[A-Za-z]/', $sur)) {
                    $errors[] = "A vezetéknév csak betűket tartalmazhat!";
                }

                if (empty($_POST["firstname"])) {
                    $errors[] = "Adja meg a keresztnevét!";
                } else if (!preg_match('/[A-Za-z]/', $first)) {
                    $errors[] = "A keresztnév csak betűket tartalmazhat!";
                }

                 if (empty($_POST["email"])) {
                     $emailErr = "Adja meg e-mail címét!";
                 } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Nem megfelelő email formátum!";
                    }

                if (empty($_POST["username"])) {
                    $errors[] = "Adjon meg egy felhasználónevet!";
                }else {
                    foreach ($accounts as $account) {
                        if ($account["username"] === $user) {
                            $errors[] = "A felhasználónév már foglalt!";
                        }
                    }
                }

                if (empty($_POST["password"])) {
                    $errors[] = "Nem adott meg jelszót!";
                } else if (strlen($pass) < 5) {
                    $errors[] = "A jelszó túl rövid!";
                } else if (!preg_match('/[A-Za-z]/', $pass) || !preg_match('/[0-9]/', $pass)) {
                    $errors[] = "A jelszónak tartalmaznia kell betűt és számokat is!";
                }

                if (empty($_POST["password2"])) {
                    $errors[] = "Nem adott megerősítő jelszót!";
                }


                if ($pass !== $pass2) {
                    $errors[] = "A két jelszó nem egyezik!";
                }

                if ($age < 14) {
                    $errors[] = "Csak 14 éves kortól lehet regisztrálni!";
                }

                if (isset($_POST["gender"])) {
                    $gender = $_POST["gender"];
                }else {
                    $errors[] = "Jelöld be a nemed!";
                }


                if (count($topics) < 2) {
                    $errors[] = "Jelölj meg legalább 2 dolgot, ami érdekel a felsoroltak közül!";
                }

                $fajlfeltoltes_hiba = "";               // változó a fájlfeltöltés során adódó esetleges hibaüzenet tárolására
                uploadProfilePicture($user);  // a kozos.php-ban definiált profilkép feltöltést végző függvény meghívása

                if ($fajlfeltoltes_hiba !== "")         // ha volt hiba a fájlfeltöltés során, akkor hozzáírjuk a hibaüzenetet a $hibak tömbhöz
                    $errors[] = $fajlfeltoltes_hiba;



                if (count($errors) === 0) {
                    echo "Sikeres regisztráció!";


                    $data = [
                        "firstname" => $first,
                        "surname" => $sur,
                        "email"=>$email,
                        "username" => $user,
                        "password" => $pass,
                        "age" => $age,
                        "gender" => $gender,
                        "topics" => $topics
                    ];

                    saveUsers("felhasznalok.txt", $data);

                } else {
                    foreach ($errors as $error) {
                        echo $error . "<br>";
                    }
                }
            }
            ?>
        </section>

        <a href="Regisztracio.php" class="top">TOP</a>
    </div>
    </div>
    </div>
</main>

<?php include "footer.php"; ?>

</body>
</html>