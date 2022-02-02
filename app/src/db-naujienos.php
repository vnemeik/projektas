<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "uzsakymai");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
        echo ' Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }

    if($check == 'Yes') {
        $check = 1;
    } else {
        $check = 0;
    }

    mysqli_query($mysqli, "INSERT INTO naujienos (vardas1, email, newsconfirm)
    VALUES('$vardas1', '$email', '$check')");
