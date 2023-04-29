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
    <title>Hirlevel</title>
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
                    <li><a href="Forum.php" Title="Fórum">Fórum</a></li>
                    <li><a class="current" href="#" Title="Hírlevél">Hírlevél</a></li>
                    <li><a href="profil.php" Title="Profil">Profil</a></li>
                    <li><a href="kijelentkezes.php" Title="Kijelentkezés">Kijelentkezés</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>


<main class="main">
    <div class="hirlevel-section">
        <h2 class="cim">Értesülj azonnal új híreinkről!</h2>
    </div>

    <aside>
        <p>A legjobb helyen jársz, hogy regisztrálj oldalunkra! Így biztos nem maradsz le semmiről!</p>
    </aside>

    <div id="container">


        <form action="hirlevel.php" method="post" id="reg">
            <br>

            <fieldset>
                <legend>Cím</legend>
                <ol>
                    <li>
                        <label for="city">Város</label>
                        <input id="city" type="text"/>
                    </li>
                    <li>
                        <label for="zip">Irányítószám</label>
                        <input id="zip" type="text"/>
                    </li>
                    <li>
                        <label for="address">Cím</label>
                        <input id="address" type="text"/>
                    </li>
                </ol>
            </fieldset>

            <fieldset>
                <legend>Elérhetőség</legend>
                <ol>
                    <li>
                        <label for="phonenumber">Telefonszám<em>*</em></label>
                        <input id="phonenumber" type="tel"/>
                    </li>
                    <li>
                        <label for="fax">Fax</label>
                        <input id="fax" type="tel"/>
                    </li>
                    <li>
                        <label for="post">Postai cím</label>
                        <input id="post" type="text"/>
                    </li>
                </ol>
            </fieldset>

            <fieldset>
                <legend>Egyéb</legend>
                <ol>
                    <li>
                        <label>Születési dátum</label>
                        <select>
                            <option>1980</option>
                            <option>1981</option>
                            <option>1982</option>
                            <option>1983</option>
                            <option>1984</option>
                            <option>1985</option>
                            <option>1985</option>
                            <option>1986</option>
                            <option>1987</option>
                            <option>1988</option>
                            <option>1989</option>
                            <option>1990</option>
                            <option>1991</option>
                            <option>1992</option>
                            <option>1993</option>
                            <option>1994</option>
                            <option>1995</option>
                            <option>1996</option>
                            <option>1997</option>
                            <option>1998</option>
                            <option>1999</option>
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                            <option>2005</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>

                        </select>
                        <select>
                            <option>Január</option>
                            <option>Február</option>
                            <option>Március</option>
                            <option>Április</option>
                            <option>Május</option>
                            <option>Június</option>
                            <option>Július</option>
                            <option>Augusztus</option>
                            <option>Szeptember</option>
                            <option>Október</option>
                            <option>November</option>
                            <option>December</option>

                        </select>
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>

                        </select>
                    </li>
                    <li>
                        <fieldset>
                            <legend>Hírlevél</legend>
                            <ol>
                                <li><label for="newsletter_yes"><input id="newsletter_yes" type="checkbox"/>
                                    Igen</label></li>
                                <li><label for="newsletter_no"><input id="newsletter_no" type="checkbox"/> Nem</label>
                                </li>
                            </ol>
                        </fieldset>
                    </li>
                </ol>
            </fieldset>

            <fieldset>
                <legend>Véleményezés</legend>
                <ol>
                    <li>
                        <label for="megjegyzes">Mondja el!</label> <br>
                        <textarea id="megjegyzes" name="feedback" rows="5" cols="60" maxlength="300"
                                  placeholder="Írd meg a véleményedet (maximum 300 karakter)!"></textarea> <br>
                    </li>

                </ol>
            </fieldset>

            <input type="submit" value="Regisztráció"/>
            <input type="reset" value="Alapállapot"/>

        </form>

        <div class="container">
            <div class="content">
                <div class="velemeny">
                    <p> Feltöltés alatt!</p>
                </div>
                <a href="hirlevel.php" class="top">TOP</a>
            </div>
        </div>
    </div>
</main>


<?php include "footer.php";  ?>

</body>
</html>