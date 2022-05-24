  <?php

$conn = "";

try {
    $servername = "mysql-fcpro.alwaysdata.net";
    $dbname = "fcpro_bd";
    $username = "fcpro_ndlp";
    $password = "fcprondlp";

    $conn = new PDO(
        "mysql:host=$servername; dbname=fcpro_bd",
        $username, $password
    );

   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
