<?php
session_start();
if(isset($_SESSION['id'])) {
    $localhost = "db";
    $username = "tomas";
    $password = "tomas";
    $dbname= "project_dnd";
    $conn =new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
    $query="SELECT weapon.name from `weapon` INNER JOIN `user` ON(weapon.id=user.weapon_id)  WHERE user.id=:user_id;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':user_id', $_SESSION['id']);
    $stmt->execute();
    $data = $stmt->fetchObject();
    if($data) {
        echo $data->name;
    }
}
