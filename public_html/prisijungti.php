<?php

session_start();

try {
    $localhost = "db";
    $username = "tomas";
    $password = "tomas";
    if (!empty($_POST)) {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $con = new PDO("mysql:host=$localhost;dbname=project_dnd", $username, $password);
            $stmt = $con->prepare("SELECT * FROM `user` WHERE login = :login");
            $stmt->bindParam(':login', $_POST['username']);
            $stmt->execute();
            $user = $stmt->fetchObject();
            if (password_verify($_POST['password'], $user->password)) {
                $_SESSION['exit'] = $user->id;
                header("location: portfolio/game.html");
            }
        }
    }
    else {
        echo "Tai NE poSt";
    }
} catch (PDOException $e) {
    // Saugoti i faila
    $klaida = $e->getMesage();
    echo "Oi nutiko klaida, bandyk veliau.";
}

//$regUser = $_POST['regUser'];
//$regPass = $_POST['regPass'];
//$regEmail = $_POST['regEmail'];
//if(!empty($regUser)||!empty($regPass)||!empty($regEmail)){
//    $host= "localhost";
//    $dbUsername= "tomas";
//    $dbPassword="tomas";
//    $dbname= "project_dnd";
//    $conn =new PDO("mysql:host=$localhost;dbname=project_dnd", $username, $password);
//        $INSERT = " INSERT Into `user`(login, password, email)"
//            values(?,?,?);
//
//}