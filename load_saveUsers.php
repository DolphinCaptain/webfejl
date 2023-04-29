<?php

function loadUsers($filename)
{
    $felhasznalok = [];

    $file = fopen($filename, "r");

    while (($line=fgets($file))!==false){
        $felhasznalok[]=unserialize($line);}

    fclose($file);
    return $felhasznalok;
}

function saveUsers($filename, $user)
{
    $file = fopen($filename, "a");
    fwrite($file, serialize($user) . "\n");
    fclose($file);
}




function uploadProfilePicture($username) {
    global $fajlfeltoltes_hiba;

    if (isset($_FILES["profile-pic"]) && is_uploaded_file($_FILES["profile-pic"]["tmp_name"])) {
        $allowed_extensions = ["png", "jpg", "jpeg"];
        $extension = strtolower(pathinfo($_FILES["profile-pic"]["name"], PATHINFO_EXTENSION));

        if (in_array($extension, $allowed_extensions)) {
            if ($_FILES["profile-pic"]["error"] === 0) {
                if ($_FILES["profile-pic"]["size"] <= 31457280) {
                    $path = "images/" . $username . "." . $extension;

                    if (!move_uploaded_file($_FILES["profile-pic"]["tmp_name"], $path)) {
                        $fajlfeltoltes_hiba = "A fájl átmozgatása nem sikerült!";
                    }
                } else {
                    $fajlfeltoltes_hiba = "A fájl mérete túl nagy!";
                }
            } else {
                $fajlfeltoltes_hiba = "A fájlfeltöltés nem sikerült!";
            }
        } else {
            $fajlfeltoltes_hiba = "A fájl kiterjesztése nem megfelelő!";
        }
    }
}


?>