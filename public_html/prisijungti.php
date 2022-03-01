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
            if($user) {
                if (password_verify($_POST['password'], $user->password)) {
                    $_SESSION['id'] = $user->id;
                    $_SESSION['login'] = $user->login;
                    header("location: portfolio/game.html");
                }
                else {
                    header("location: intro.html");
                }
            }
            else {
                header("location: intro.html");
            }
        }
    }
    else {
        echo "Tai NE poSt";
    }
} catch (PDOException $e) {
    // Saugoti i faila
    $klaida = $e->getMessage();
    echo "Oi nutiko klaida, bandyk veliau.";
}

