<?php

try {
    $servername = "mysql-fcpro.alwaysdata.net";
    $dbname = "fcpro_bd";
    $username = "fcpro_ndlp";
    $password = "fcprondlp";

    $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);


}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
