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
    <title>Fórum</title>
</head>

<body>
<header class="header">
    <div class="heading">
        <h1 class="page-header">Mobil<span>Kisokos</span></h1>

        <nav>
            <ul class="nav">
                <li><a href="index.php" Title="Főoldal">Főoldal</a></li>
                <?php if (!isset($_SESSION["user"])||empty($_SESSION["user"])):?>
                    <li><a  href="Regisztracio.php" Title="Regisztráció">Regisztráció</a></li>
                    <li><a href="Bejelentkezes.php" Title="Bejelentkezés">Bejelentkezés</a></li>
                <?php else:?>
                    <li><a href="Technologia.php" Title="Technológia">Technológia</a></li>
                    <li><a href="Gyartok.php" Title="Gyártók">Gyártók</a></li>
                    <li><a class="current" href="#" Title="Fórum">Fórum</a></li>
                    <li><a href="hirlevel.php" Title="Hírlevél">Hírlevél</a></li>
                    <li><a href="profil.php" Title="Profil">Profil</a></li>
                    <li><a href="kijelentkezes.php" Title="Kijelentkezés">Kijelentkezés</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>

<main class="main">

    <div class="forum-section ">
        <h2 class="cim">Ami leginkább érdekli az embereket</h2>
    </div>


    <aside>
        <p>A legjobb helyen jársz hogy többet megtudj a mai okostelefonokról! Ha érdekelnek további hasonló
            tartalmak </p>
        <a href="Regisztracio.php">regisztrálj!</a>
    </aside>


    <div class="container">
        <h2>Gyakori kérdések</h2>
        <p>Ezen az oldalon elolvashatod az osszes olyan kerdest amit az emberek nem tudtak és kivancsiak voltak rá. Az
            évek folyamán jó pár kérdés összegyűlt, melyek között vannak egyérteműek és olyanok is amik ujdonságként
            hathatnak.</p>
        <div class="content">

            <section class="gyakorikerdesek">

                <div class="kerdes-div">
                    <div class="kerdes-valasz">
                        <div class="kerdes">
                            <div class="shape"></div>
                            <h3><cite>Mi az az okostelefon?</cite></h3>
                        </div>
                        <p><u>Okostelefonnak</u> (angolul <u>smartphone</u>) nevezzük a fejlett, gyakran PC-szerű
                            funkcionalitást nyújtó mobiltelefonokat. Nincs egyértelmű meghatározás arra, hogy mi az
                            okostelefon. Egyesek szerint okostelefon az a mobil, aminek teljes értékű operációs
                            rendszere szabványosított interfészeket és platformot nyújt az alkalmazásfejlesztők számára.
                            Mások meghatározásában az okostelefon egyszerűen egy olyan készülék, ami olyan fejlett
                            funkciókat tartalmaz, mint e-mail, Internet és e-könyv-olvasó, és/vagy teljes értékű
                            billentyűzet, vagy külső USB-s billentyűzet és VGA csatlakozó.</p>
                        <a href="https://hu.wikipedia.org/wiki/Okostelefon"><i>Tudj meg többet &raquo;</i></a>
                    </div>
                </div>

                <div class="kerdes-div">
                    <div class="kerdes-valasz">
                        <div class="kerdes">
                            <div class="shape"></div>
                            <h3><cite>Melyik volt az első okostelefon?</cite></h3>
                        </div>
                        <p>Az érintőképernyős okostelefon már 23 éves, de hogy melyik volt a legelső példány, azt nem
                            sokan tudják. Nem, nem az Apple gyártotta, és nem is a Samsung, sőt, a Nokiának sem jutott
                            eszébe még akkor. Nem véletlen ismerik kevesen ezt a szép példányt.

                            Ennek az az oka, hogy az úttörő darab egész egyszerűen túl korán érkezett, akkor, amikor az
                            embereknek még nem igazán volt szükségük a munkájuk vagy a szociális igényeik miatt
                            ilyesmire.

                            Az érintőképernyős okostelefonok őse az IBM Simon volt.</p>
                        <a href="https://www.szeretlekmagyarorszag.hu/multunk/elso-okostelefon-a-vilagon-apple-samsung-ibm-nokia/"><i>Tudj
                            meg többet &raquo;</i></a>
                    </div>
                </div>

                <div class="kerdes-div">
                    <div class="kerdes-valasz">
                        <div class="kerdes">
                            <div class="shape"></div>
                            <h3><cite>Hogy nézett ki az első okostelefon?</cite></h3>
                        </div>
                        <p>A test 200 milliméter hosszú, 64 milliméter széles, illetve 38 milliméter vastag volt és nem
                            kevesebb mint 510 grammot nyom a mérlegen. Ezekkel a dimenziókkal nem csak egy átlagos 5.2
                            colos kijelzős okostelefontól lett súlyosabb, de még egy 10 colos tablettől is többet
                            nyomott. A 160×293 milliméter méretű hosszúkás kijelzőn színeket még nem élvezhettünk, csak
                            a szürke 50 árnyalatát. A Simon működéséért egy Datalight ROM-DOS operációs rendszert
                            futtató, 16 MHz-es órajelen „zakatoló”, 16 bites Vadem processzor felelt, a telefon memória
                            modulja pedig kőkemény 1 MB-os volt.</p>
                        <a href="https://www.notebook.hu/blog/az-elso-okostelefon-simon-mondja/"><i>Tudj meg többet
                            &raquo;</i></a>
                    </div>
                </div>

                <div class="kerdes-div">
                    <div class="kerdes-valasz">
                        <div class="kerdes">
                            <div class="shape"></div>
                            <h3><cite>Hogy működik az érintőkepernyő?</cite></h3>
                        </div>
                        <p>Az érintőképernyők általános működési elve, hogy egy hagyományos kijelző fölé átlátszó
                            érzékelő réteg kerül. Habár e két eszközt összeépítik, működés szempontjából lényegében
                            különálló egységek. Ha a hagyományos kijelzőn látható egy ikon, amit „megnyom” a készülék
                            használója, akkor így a kijelző felett lévő érzékelő réteghez ér hozzá. A behatás miatt az
                            érzékelő felület egy pontján valamilyen eltérés keletkezik az alapállapothoz képest. Ezt a
                            jelet aztán a készülék adatfeldolgozó egysége kiértékeli és meghatározza, hogy az
                            érzékelőlapon a nyomás helye pontosan melyik ikonnak felel meg az alatta lévő hagyományos
                            kijelzőn és a készülék szoftvere végrehajtja a „nyomási” eseményhez rendelt feladatot. Így
                            azt az érzetet kelti, mintha a felhasználó közvetlenül az ikont nyomta volna meg.</p>
                        <a href="https://hu.wikipedia.org/wiki/%C3%89rint%C5%91k%C3%A9perny%C5%91"><i>Tudj meg többet
                            &raquo;</i></a>
                    </div>
                </div>


                <div class="kerdes-div">
                    <div class="kerdes-valasz">
                        <div class="kerdes">
                            <div class="shape"></div>
                            <h3><cite>Melyik a legnagyobb mobilgyártó cég?</cite></h3>
                        </div>
                        <p><q>Az IDC adatai szerint is a Huawei adta el a legtöbb okostelefont 2020 második
                            negyedévében, nagyjából 55,8 milliót, ami 20%-os részesedést jelent. A Samsung nem sokkal
                            lemaradva áll a második helyen 19,5%-kal.</q></p>
                        <a href="https://napidroid.hu/kijott-mobilgyartok-friss-rangsora/"><i>Tudj meg többet
                            &raquo;</i></a>
                    </div>
                </div>


                <div class="kerdes-div">
                    <div class="kerdes-valasz">
                        <div class="kerdes">
                            <div class="shape"></div>
                            <h3><cite>Hogyan kell gyárilag visszaállitani?</cite></h3>
                        </div>
                        <p>A gyári állapotra történő visszaállítás (az angol nyelvben hard reset vagy master reset néven
                            is szokás hivatkozni rá) olyan művelet, amely során az eszközödről az összes személyes
                            információ, testreszabott beállítás, valamint adat törlődik és az eszközöd a beállítások és
                            az információk tekintetében visszaáll az eredeti állapotába.</p>
                        <a href="https://www.samsung.com/hu/support/mobile-devices/hogyan-allithatom-vissza-a-gyari-allapotot-a-mobileszkozomon/"><i>Tudj
                            meg többet &raquo;</i></a>
                    </div>
                </div>


            </section>

            <a href="Forum.php" class="top">TOP</a>
        </div>
    </div>
</main>


<?php include "footer.php";  ?>

</body>
</html>