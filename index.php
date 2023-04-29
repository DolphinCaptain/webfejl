<?php
session_start();
include "load&saveUsers.php";


?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/806882_app_512x512.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500;700&display=swap" rel="stylesheet">
    <title>Kezdőlap</title>
</head>

<body>
<header class="header">
    <div class="heading">
        <h1 class="page-header">Mobil<span>Kisokos</span></h1>
        <nav>
            <ul class="nav">
                <li><a class="current" href="#" Title="Főoldal">Főoldal</a></li>
                <?php if (!isset($_SESSION["user"]) || empty($_SESSION["user"])): ?>
                    <li><a href="Regisztracio.php" Title="Regisztráció">Regisztráció</a></li>
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

    <div class="fooldal-section">
        <h2 class="cim">Amit az okostelefonokról tudni akartál</h2>
    </div>

    <aside>
        <p>A legjobb helyen jársz hogy többet megtudj a mai okostelefonokról! Ha érdekelnek további hasonló
            tartalmak </p>
        <a href="Regisztracio.php">regisztrálj!</a>
    </aside>

    <div class="container">
        <div class="content">

            <section class="telefonokrol container" id="telefonokrol">
                <h2>Telefonokról</h2>
                <div class="line"></div>
                <p>A mobiltelefon olyan telefonkészülék, amivel vezetékes kapcsolódás nélkül lehetséges kommunikálni, és
                    hordozható. A működéséhez szükséges egy mikrohullámú kommunikációs hálózat, és maga a „mobilnak”
                    mondott, hordozható készülék, ami lehetővé teszi a hozzáférést a hálózathoz, amin szöveges, beszéd-,
                    képi, video- és adatátvitel is lehetséges. A készülék vezeték nélküli működése akkumulátor révén
                    történik, amit bizonyos időközönként fel kell tölteni egy erre alkalmas eszköz, a mobiltöltő
                    segítségével. Ezt leszámítva semmilyen más vezetékes kapcsolatra nincs szükség a készülék alapvető
                    használatához. A mobiltelefonok tulajdonságai nagyon gyorsan fejlődnek.
                    <br> <br>Kezdetben tömegük meghaladta az 1 kg-ot, ma már 100 g körül vannak a telefonok. A fejlesztő
                    cégek egymásra licitálva látják el a készülékeket legkülönfélébb funkciókkal. Amíg az egyik gyártó
                    mobilja mutatni tudta az időt, a másiké már ébreszteni is tudott, a harmadiké szöveges üzenetet
                    tudott küldeni, és ezek a fejlesztések mennek évről évre. Az alap beszédközvetítő funkción kívül a
                    mai mobilok számos egyéb szolgáltatást támogatnak, így például az SMS-t (szöveges üzenet), e-mail,
                    internet, MMS (multimédia üzenet, fotók, videók küldése), valamint WAP, fényképezőgép, számológép,
                    naptár, napló, stopper, rádió, mp3, videokamera, tévé, érintőképernyő stb. 2005 körül indult
                    hódítóútjára az okostelefonnak is hívott mobilkészülék-típus, melynek fő tulajdonsága, hogy sokkal
                    több funkcióra képes, s ezek közül a telefonálás csak egy a többiből, ezért nem is feltétlenül lehet
                    pusztán telefonként meghatározni. Jellemzői a számítógépekhez hasonló képességei, amelyekkel képes
                    az internethez kapcsolódni, alkalmazásokat letölteni és használni. További gyakori tulajdonság az
                    érintőképernyő megjelenése, ahol a bekapcsológomb és a hangerőszabályozó gombok kivételével nincs
                    fizikai billentyűzet, minden egyéb funkciót a képernyő virtuális felületén lehet elvégezni.</p>
                <div class="telo">
                    <div class="kep">
                        <img src="img/phone.jpg" alt="40 éves telefon">
                        <h3>40 éve</h3>
                    </div>
                    <div class="kep">
                        <img src="img/old_nokia_phones-100625503-large.jpg" alt="25 éves telefon">
                        <h3>25 éve</h3>
                    </div>
                    <div class="kep">
                        <img src="img/m_img_31332.jpg" alt="10 éves telefon">
                        <h3>10 éve</h3>
                    </div>
                </div>
            </section>


            <section class="tortenelem container" id="tortenelem">
                <h2>Történelem</h2>
                <div class="line"></div>
                <div class="tortenelem-szoveg">
                    <figure>
                        <img src="img/152154364.jpg" alt="regitelefon" style="width:25%">
                        <figcaption>tárcsás telefon</figcaption>
                    </figure>


                    <p>A mobiltelefon egyike a leggyakrabban használt eszközeinknek. A bázisállomások technológiájának
                        elméletét már 1947-ben kifejlesztették a Bell Labs mérnökei az AT&T-nél, és a hatvanas években
                        került továbbfejlesztésre a cégnél. A rádiótelefonok hosszú és változatos története a második
                        világháborúig nyúlik vissza, amikor a hadsereg rádióhullám-alapú telefon-összeköttetéseket
                        kezdett alkalmazni. A kézi rádiótelefonok 1983 óta elérhetőek. Mivel előállításuk olcsó, és
                        könnyen fejleszthetők, a mobiltelefon-hálózatok gyorsan elterjedtek az egész világon, a
                        vezetékes telefont háttérbe szorítva.

                        1945-ben készítették el a mobiltelefonok 0G generációját, a mobil rádiótelefont. Ezeket a
                        telefonokat hivatalosan nem sorolják a mobiltelefonok közé, mivel nem támogatták a
                        beszédcsatorna frekvenciájának beszélgetés közbeni automatikus átváltását (hívásátadás), amire
                        akkor lehetett szükség, amikor a felhasználó az egyik cellából (bázisállomástól) a másikba
                        lépett át.

                        1970-ben a Bell Labs mérnöke, Amos Bell feltalálta a hívásátadást, ami lehetővé tette, hogy a
                        telefon használója beszélgetés közben több ún. cellán (körzeten) is áthaladjon. A Motorola
                        mérnökét, Martin Coopert tartják az első, gyakorlatban is használható kézi mobiltelefon
                        feltalálójának. Cooper egy modern, bár meglehetősen nehéz, hordozható készülékkel 1973. április
                        3-án kezdeményezte az első mobilhívást, a Motorola Kommunikációs Divíziójának igazgatója felé.

                        Az első, teljesen automatikus celluláris hálózatokat az 1980-as évek első felében hozták létre
                        (1G generáció). Az első ilyen az 1981-ben üzembe helyezett Nordic Mobile Telephone (NMT)
                        rendszer volt. Az évtized végéig a legtöbb mobiltelefon túlságosan nagy méretű volt ahhoz, hogy
                        valaki a zsebében hordja, ezért ezeket általában gépjárművekbe építették be, autótelefonként. A
                        miniatürizálás fejlődésével, kisebb digitális elemekkel és nagyobb hatásfokú akkumulátorokkal a
                        telefonok kisebbekké és könnyebbekké váltak.<br><br> Legtöbben úgy tudják, hogy Alexander Graham
                        Bell találta fel, majd építette meg az első telefont 1876-ban, az amerikai Massachusetts
                        államban. Rajta kívül voltak még sokan mások, akik rendkívül fontosak voltak a telefon
                        kifejlesztésében. Az alapokat Morse találmánya, a távíró fektette le, ez volt ugyanis az első,
                        elektromos jeleket továbbító hálózat. 1854-ben Charles Bourseul belga származású francia mérnök
                        felvetette annak lehetőségét, hogy hangot is lehetne valahogy a hálózaton továbbítani. Szintén
                        ebben az időszakban kísérletezett még Johann Philipp Reis és Elisha Gray is. Bell egy olasz
                        bevándorló, Antonio Meucci nyomdokain indult el. Amit Meucci 1874-ben anyagi nehézségek miatt
                        nem tudott jogi védelem alá helyezni, azt két évvel később Bell szabadalmaztatatta. Meucci
                        emléke mégsem merült feledésbe. 2002-ben az Egyesült Államok képviselőháza nyilatkozatot
                        fogadott el, melyben az olasz feltalálót ismeri el a telefon feltalálójaként. Végül Bell és az ő
                        csapata építette meg a telefont, ami végül 1876 után Bostonból kiindulva meghódította a világot.

                        Nem sokkal később, 1878-ban feltalálták a szénporos mikrofont, amely jelentősen javított a hang
                        minőségén.

                        1888-ban Almon Strowger feltalálta és megépítette az első automata telefonközpontot. <br><br>
                        Voluptatum iste id
                        porro praesentium doloribus asperiores quo libero adipisci ab, quis perferendis vero. Voluptas
                        pariatur odit facere expedita, a. Dolorum reprehenderit repellat mollitia veniam eligendi ipsa
                        provident a possimus voluptatum rerum omnis consequuntur ipsam dolorem repellendus quam totam,
                        deleniti, doloremque facilis rem illum minima eveniet. <br><br> Assumenda at temporibus illum
                        laborum, mollitia aliquam! Aperiam ex officiis molestias, soluta voluptate inventore,
                        aspernatur dolore labore accusamus vero reprehenderit, cumque qui, ad aliquid! Tempora,
                        doloremque. Libero, possimus tempore deleniti vel ab nam voluptatem, consectetur suscipit
                        placeat, deserunt similique repellendus hic esse. Corrupti esse ex iste. Necessitatibus at
                        sint odio laboriosam, ex fuga impedit labore saepe nam. Ipsam natus, sit neque minima quasi.
                        Aperiam itaque cum autem vitae repudiandae dolore enim, libero non, expedita sequi facilis.
                        Eaque, dolorem est consequuntur vero optio aliquid temporibus in facere a! Ex, voluptate
                        recusandae! Veniam suscipit aspernatur vel saepe dolorum, ipsum ipsam in odio earum impedit
                        consequuntur eius, eaque, nisi fugiat laborum optio repellat facere.</p>
                </div>
            </section>


            <section class="portfolio container" id="portfolio">
                <h2>Képgyűjtemény</h2>
                <div class="line"></div>

                <div class="portfolio-kepek container">
                    <img src="img/samsung-galaxy-s21-render-header-2.jpg" alt="image 4">
                    <img src="img/iphone-12-colors.jpg" alt="image 5">
                    <img src="img/xiaomi-mi-10t-pro-01-1.jpg" alt="image 6">
                    <img src="img/huawei-p40-pro-clear-case-tok.jpg" alt="image 7">
                    <img src="img/oppo-find-x3-pro-1.jpg" alt="image 8">
                    <img src="img/oneplus-8t-e1602752601698-1024x576.jpg" alt="image 9">
                </div>

            </section>


            <section class="oldal container" id="oldal">
                <h2>Legjobb mobilok videózáshoz</h2>
                <div class="line"></div>
                <br>

                <div>
                    <iframe src="https://www.videomaker.com/buyers-guide/best-smartphone-cameras-for-video/"
                            width="1400" height="700"></iframe>
                </div>
            </section>


            <a href="index.php" class="top">TOP</a>
        </div>
    </div>
</main>


<?php include "footer.php"; ?>

</body>
</html>

