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
    <title>Mobilgyártók</title>
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
                    <li><a class="current" href="#" Title="Gyártók">Gyártók</a></li>
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
    <div class="gyartok-section">
        <h2 class="cim">Akik a mai piacot uralják</h2>
    </div>

    <aside>
        <p>A legjobb helyen jársz hogy többet megtudj a mai okostelefonokról! Ha érdekelnek további hasonló
            tartalmak </p>
        <a href="Regisztracio.php">regisztrálj!</a>
    </aside>


    <div class="container">

        <p> Az alábbi listából minden kérdésre választ kaphatsz a mai mobiltelefongyártókkal kapcsolatban és egyéb,
            hozzájuk kapcsolódó témákban. A képekre kattintva egynesen az adott gyártó oldalán fogod találni magad ahol
            akár be is szerezhetsz magadnak egyet az adott márka készülékei közül! Továbbá információkat találhatsz az
            adott cégről, böngéssz bátran!</p>

        <section class="piacvezetok">

            <div class="markak">
                <a href="https://www.samsung.com/hu/" target="_blank"> <img class="kepek" src="img/357703.jpg"
                                                                            alt="samsung logo"> </a>
                <div class="markak-text">
                    <h3><strong> Samsung </strong></h3>
                    <p>A Samsung Group, röviden Samsung a legnagyobb dél-koreai óriás ipari konglomerátum, azaz csebol,
                        melynek bevételei a dél-koreai GDP 20%-át teszik ki. A cégcsoport az ország exportjának
                        egyötödéért felelős. A Fortune 500 listáján 2011-ben a 22. helyen szerepelt. A Samsung C&T
                        építette a világ legmagasabb épületeit, többek között a Burdzs Kalifát, a Petronas-ikertornyokat
                        és a Taipei 101-t.

                        A cég nevének jelentése „három csillag”, a hármas szám a hatalmasság, a nagyság képviselője, míg
                        a csillagok a végtelenséget szimbolizálják. A cég ellipszis alakú kék logóját a Lippincott
                        tervezte</p>
                </div>
            </div>

            <div class="markak">
                <a href="https://huawei.hu/huawei-magyarorszag/" target="_blank"> <img class="kepek"
                                                                                       src="img/thumb2-huawei-logo-light-neon-art-huawei-emblem-huawei-neon-logo-creative-art.jpg"
                                                                                       alt="huawei logo"> </a>
                <div class="markak-text">
                    <h3><strong> Huawei </strong></h3>
                    <p>A Huawei Technologies Co. Ltd. a világ egyik vezető információs és kommunikációs technológiai
                        vállalata, főként távközlési hálózatok kiépítésével, operációs és tanácsadói szolgáltatások
                        nyújtásával, a fogyasztói piacra szánt kommunikációs eszközök gyártásával foglalkozik. A több
                        mint 170 országban jelen levő Huawei a világ egyik legnagyobb okostelefon gyártója, termékeit és
                        szolgáltatásait a világ népességének közel egyharmada használja.</p>
                </div>
            </div>

            <div class="markak">
                <a href="https://www.apple.com/hu/" target="_blank"> <img class="kepek"
                                                                          src="img/neon-apple-logo-wallpaper.jpg"
                                                                          alt="apple logo"> </a>
                <div class="markak-text">
                    <h3><strong> Apple </strong></h3>
                    <p>Az Apple Inc. (korábban Apple Computer, Inc.) főként hardvergyártással foglalkozó cég, ami saját
                        szoftver platformot épít macOS operációs rendszerére alapozva, mely a NeXTSTEP által fejlesztett
                        operációs rendszer leszármazottjának tekinthető.

                        Az Apple a számítástechnika egyik úttörője volt, meglátta a lehetőséget a grafikus felhasználói
                        felületben (GUI) és az egérben, amit eredetileg a Xerox PARC- cég fejlesztett ki, de a vezetése
                        nem ismerte fel a technológiában rejlő lehetőségeket</p>
                </div>
            </div>

            <div class="markak">
                <a href="https://xiaomi.hu/" target="_blank"> <img class="kepek" src="img/wp7425678.jpg"
                                                                   alt="xiaomi logo"> </a>
                <div class="markak-text">
                    <h3><strong> Xiaomi </strong></h3>
                    <p>A Xiaomi Inc. kínai elektronikai vállalat, melynek székhelye Pekingben található. Nevének
                        jelentése szó szerint „rókafarkú köles”.

                        A Xiaomi okostelefonokat, alkalmazásokat és fogyasztói elektronikai termékeket tervez, gyárt és
                        értékesít. Első okostelefonja 2011 augusztusában került piacra, azóta a Xiaomi jelentős piaci
                        részesedést szerzett Kínában, és házvezérlő rendszerek (okosotthon) gyártásával is foglalkozni
                        kezdett.</p>
                </div>
            </div>
        </section>

        <article>Nagyon úgy fest, hogy az okostelefonokat 2007-ben divatba hozó Apple csillaga kezd leáldozni a
            mobilpiacon: a
            készülékeik hardver szempontjából már évek óta le vannak maradva a konkurenciához képest, és ez már az
            eladásokon is meglátszik. Alig néhány napja számoltunk be arról, hogy 2019 második negyedévében Európában
            22,4 százalékáról 18,8 százalékra olvadt a cég piaci részesedése, ami csak a harmadik helyre elég, de
            világszinten még ennél is rosszabbul áll a vállalat szénája.

            Az IHS legújabb felmérése szerint az április és június vége közti időszakban az Apple mindössze 35,3 millió
            készüléket szállított le, ami 11 százalékos piaci részesedést jelent, és hiába rendelkezik hasonló aránnyal
            az kínai Oppo, ők 36,2 millió mobilt juttattak a piacra, ezzel globálisan a negyedik helyre szorították
            vissza az amerikai gyártót. Az első két helyen ugyanakkor világszinten is az a helyzet, mint Európában:
            továbbra is a Samsung a legnagyobb mobilgyártó 23 százalékos piaci részesedéssel (71 millió készülék), a
            dél-koreai céget pedig a Huawei követi, ami az amerikai szankciók ellenére is képes volt megtartani a
            második helyet, 18 százalékos részesedéssel és 59,1 millió leszállított készülékkel.
        </article>

        <table class="szazalek">
            <caption>Globális okostelefon piac százalékos megoszlása az elmúlt negyedévekben</caption>

            <thead>
            <tr>
                <th id="nev">Márkák</th>
                <th id="2019q3">2019 Q3</th>
                <th id="2019q4">2019 Q4</th>
                <th id="2020q1">2020 Q1</th>
                <th id="2020q2">2020 Q2</th>
                <th id="2020q3">2020 Q3</th>
                <th id="2020q4">2020 Q4</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td headers="nev">Apple</td>
                <td headers="2019q3">12%</td>
                <td headers="2019q4">18%</td>
                <td headers="2020q1">14%</td>
                <td headers="2020q2">14%</td>
                <td headers="2020q3">11%</td>
                <td headers="2020q4">21%</td>
            </tr>
            <tr>
                <td headers="nev">Samsung</td>
                <td headers="2019q3">21%</td>
                <td headers="2019q4">18%</td>
                <td headers="2020q1">20%</td>
                <td headers="2020q2">20%</td>
                <td headers="2020q3">22%</td>
                <td headers="2020q4">16%</td>
            </tr>
            <tr>
                <td headers="nev">Xiaomi</td>
                <td headers="2019q3">8%</td>
                <td headers="2019q4">8%</td>
                <td headers="2020q1">10%</td>
                <td headers="2020q2">10%</td>
                <td headers="2020q3">13%</td>
                <td headers="2020q4">11%</td>
            <tr>
                <td headers="nev">Huawei</td>
                <td headers="2019q3">18%</td>
                <td headers="2019q4">14%</td>
                <td headers="2020q1">17%</td>
                <td headers="2020q2">20%</td>
                <td headers="2020q3">14%</td>
                <td headers="2020q4">8%</td>
            </tr>
            <tr>
                <td headers="nev">Egyéb</td>
                <td headers="2019q3">35%</td>
                <td headers="2019q4">28%</td>
                <td headers="2020q1">31%</td>
                <td headers="2020q2">22%</td>
                <td headers="2020q3">29%</td>
                <td headers="2020q4">30%</td>

            </tr>
            </tbody>

        </table>

        <a href="Gyartok.php" class="top">TOP</a>

    </div>
</main>


<?php include "footer.php"; ?>

</body>
</html>