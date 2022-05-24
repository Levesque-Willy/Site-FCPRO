<?php

include_once('connexion.php');

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $AdresseMail = test_input($_POST["AdresseMail"]);
    $MotDePasse = test_input($_POST["MotDePasse"]);
    $stmt = $conn->prepare('SELECT * FROM administrateur');
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($users as $user) {

        if(($user['AdresseMail'] == $AdresseMail) && ($user['MotDePasse'] == $MotDePasse))
       {
                header("Location: adminpage.php");
        }
        else {
            echo '<script language="javascript">';
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}

?>
