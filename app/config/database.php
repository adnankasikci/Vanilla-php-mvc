<?php

//Database Connection Information

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";


// Connection

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->query('SET @@lc_time_names="tr_TR";');
    $db->query('SET CHARACTER SET utf8mb4');
    $db->query('SET CHARACTER_SET_CONNECTION=utf8mb4');

    //D
} catch (PDOException $e) {
    echo "Bağlantısı Hatası" . $e->getMessage();
}
