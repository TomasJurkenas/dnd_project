<?php

session_start();
$localhost = "db";
$username = "tomas";
$password = "tomas";
$dbname= "project_dnd";
$regUser = $_POST['regUser'];
$regPass = $_POST['regPass'];
$regEmail = $_POST['regEmail'];
if(!empty($regUser) && !empty($regPass) && !empty($regEmail)) {

    $conn = new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
    $INSERT = "INSERT Into `user`(login, password, email)
values(:login, :password, :email);";
    $stmt = $conn->prepare($INSERT);
    $regPass = password_hash($regPass, PASSWORD_DEFAULT);
    $stmt->bindParam(':login', $regUser);
    $stmt->bindParam(':password', $regPass);
    $stmt->bindParam(':email', $regEmail);
    if($stmt->execute()) {
        $_SESSION['id'] = $conn->lastInsertId();
        $_SESSION['login'] = $regUser;
        header("location: portfolio/game.html");
    }
    else {
        //cia kazka darome jeigu registracija nepavyko
    }
}
