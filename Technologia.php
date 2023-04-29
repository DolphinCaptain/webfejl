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
    <title>Technológia</title>
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
                    <li><a class="current" href="#" Title="Technológia">Technológia</a></li>
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
    <div class="technologia-section">
        <h2 class="cim">Technológiai fejlettség</h2>
    </div>

    <aside>
        <p>A legjobb helyen jársz hogy többet megtudj a mai okostelefonokról! Ha érdekelnek további hasonló
            tartalmak </p>
        <a href="Regisztracio.php">regisztrálj!</a>
    </aside>

    <div class="container">
        <div class="content">

            <div class="velemeny">
                <p>A most már harminc esztendő múltra visszatekintő mobiltörténelem végigkövetése igen tanulságos. A
                    közel 30 éve megjelent mobiltelefonok megjelenése az információs forradalom egy új szakaszát
                    jelentette, hozzájárult világunk összezsugorodásához, a globális életfelfogás kialakulásához és az
                    információhozzáférés demokratizálódásához.
                    <br>
                    <br>
                    Kezdetben egyszerű szerkentyűként a vezeték nélküli készülékek a vezető cégek termelékenységét
                    voltak hivatottak növelni, később azonban az üzleti infrastruktúra legelemibb építőkockájává váltak
                    szerte a világon. Mára már univerzális számítógépekké alakultak át, nagyot ugorva ezzel az
                    internetnek és a hordozható technológiának abba a szép új világába, amelyről Huxley még nem
                    álmodhatott.
                    <br>
                    <br>
                    Visszapillantva a mobiltelefonok felnövekedésének göröngyös útjára, hálásak lehetünk azért, hogy a
                    sajátunk ma már befér a zsebünkbe. Nem kizárt, hogy egy napon egy kétrét hajtható műanyag lapka lesz
                    belőle vagy előfordulhat, hogy megérinteni sem kell majd, mert a testünkbe építve intelligens
                    mikroimplantátumként lesz képes több feladat együttes elvégzésére úgy, hogy elegendő lesz
                    gondolatban kiadni az utasításainkat. 70 évvel ezelőtt viszont egy kb. 10 kg-os, 5 mérföld
                    hatótávolságú, “hordozható” telefont lettünk volna kénytelenek a hátunkon cipelni.
                    <br>
                    <br>
                    A korai példányokat “autós telefonok”-nak tekintették, ugyanis túl nagyok és nehezek voltak ahhoz,
                    hogy táskába vagy zsebbe belefértek volna, mindaddig, míg a Motorola DynaTAC 8000x meg nem jelent a
                    piacon. Bár a mai standardok szerint kissé méretesnek számított, sokak szerint mégis ez volt az első
                    igazi mobiltelefon, mert elég kicsi volt ahhoz, hogy bárhova magunkkal vihessük. Annak ellenére,
                    hogy hihetetlenül drága volt, gyorsan a popkultúra szimbólumává vált, olyan filmes karakterek
                    alakítása által például, mint Gordon Gekkor a Wall Street-ben. Mindig akadnak új dolgokra fogékony
                    alanyok, akik egy trend megjelenését propagálják, és őket aztán követik a tömegek. Szakértők szerint
                    ezek az úttörők kulcsfontosságú szerepet játszanak bármely újdonság népszerűvé tételében.
                    <br>
                    <br>
                    A mobiltelefon használat azonban ekkor még nem burjánzott el a nagyközönség berkeiben. Elsősorban az
                    értékesítés és üzleti világban használták, személyes célú használata még ismeretlen volt. Bár a
                    DynaTac és az ezt követő modellek már jelentősen kisebbek voltak, még mindig hagytak némi
                    kívánnivalót maguk után. A technológia folyamatos fejlődésével a mobiltelefon-gyártók rájöttek,
                    hogyan csomagolják az ügyfeleik által óhajtott funkciókat egy kisebb, olcsóbb, hordozható modellbe.

                    <br>
                    <br>
                <pre><b>Változó cél</b></pre>
                <br>
                <br>
                Az első mobiltelefonokat kizárólag beszélgetésre használták, majd fokozatosan bővítették a funkciókat
                hangpostával, sms-küldéssel-fogadással, stb., de a fő célt még mindig a beszélgetés jelentette. Mígnem
                végül a gyártók kiötölték, hogy más technológiákat is integrálhatnak mobiltelefonjaikba és még több új
                funkcióval bővíthetik azokat. A legkorábbi okostelefon egyszerre volt e-mail fiók, fax, személyhívó és
                címjegyzék. Az elmúlt években a mobiltelefon verbális kommunikációs eszközből multimédiás eszközzé vált,
                melyre már nem is telefonként, hanem “mobil eszköz”-ként hivatkoznak. Napjainkban mobiltelefonunkat
                internet-böngészésre, e-mail olvasásra, fotók készítésére, a közösségi oldalak állapotfrissítésére
                használjuk inkább, mint tényleges telefonhívásokra.

                A mobiltelefonok kezelhetősége egyre könnyebbé válik, hála a szoftverek gyors gyarapodásának, jobb
                kijelző felbontásnak, a folyamatosan javított interface-nek stb. Ha ehhez hozzávesszük a folyamatosan
                növekvő memóriát, mely olyan tároló kapacitással rendelkezik, mint egy nem túl régi személyes
                számítógép, nem meglepő, miért pörgött fel ennyire a mobiltelefonok piaca. Ráadásul ezek a mobil
                eszközök egyéb kütyüinket is helyettesítik, mint amilyen a fényképezőgépek, videokamerák. A
                korszerűsített okostelefonok felülírják mindazokat az igényeket, melyeket az átlagos fogyasztó támaszt
                telefonjával szemben. Az okostelefon-alkalmazások piaca a telefont egy virtuális eszköztárrá varázsolta,
                mely szinte minden problémára megoldást kínál.

                <br>
                <br>
                <pre><b>Változó forma</b></pre>
                <br>
                <br>
                A technológiai változásokkal karöltve a telefonok külső megjelenése is változásokon ment keresztül:
                méretük drasztikusan csökkent, akárcsak a személyes számítógépeknek az idők folyamán. Végül is az utóbbi
                években a mobiltelefonok kezdtek nagyobb és letisztultabb formát ölteni, kielégítve ezzel a természetes
                igényt a nagyobb képernyőfelületre és kevesebb gombra. Mivel a telefonok médiaeszközökké váltak, a
                legkívánatosabb szempont a nagy felbontású képernyő optimális böngészéshez. Még a hagyományos
                billentyűzetet is érintőképernyős billentyűzet váltotta fel, mely csak akkor bukkan fel, ha szükség van
                rá.

                <br>
                <br>
                <pre><b>A mobiltelefonok jövője</b></pre>
                <br>
                <br>
                A mobiltelefonok oly mértékben változtak és fejlődtek az elmúlt évtizedben, hogy már semmi sem tűnik
                elképzelhetetlennek a jövőre nézve. Szakértők szerint a továbbiakban is valószínűnek tűnik ez a
                tendencia, mely szerint az összes technológiai készülékeink lecsapódnak majd egyetlen mobil eszközben.
                Várhatóan pár éven belül a hagyományos mobiltelefonok végleg eltűnnek majd, az okostelefonokat pedig
                feltételezhetően már nem fogjuk “okos”-nak nevezni, mint ahogy a “színes tv-t” sem nevezzük már
                színesnek.
                Vélhetően a jövő mobiltelefonjai mindinkább alkalmazkodni fognak érzékszerveinkhez, természetes
                összhangot képezve biológiai folyamatainkkal, mint amilyen a szemmozgatás, gondolkodási folyamatok, vagy
                akár kulturális preferenciáink. Már nemcsak az a kérdés merül fel, milyen irányba változhatnak a mobil
                eszközeink, hanem az is, hogy mi hogyan változunk e folyamat közben.
            </div>
            <a href="Technologia.php" class="top">TOP</a>
        </div>
    </div>
</main>


<?php include "footer.php"; ?>

</body>
</html>