<?php
session_start();
if(isset($_SESSION['id']) && isset($_POST['type']) && isset($_POST['id'])) {
    $localhost = "db";
    $username = "tomas";
    $password = "tomas";
    $dbname= "project_dnd";
    $conn =new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
    $query="UPDATE `user` SET ";
    if($_POST['type']=='character') {
        $query.="`character_id`=:id";
    }
    elseif($_POST['type']=='weapon') {
        $query.="`weapon_id`=:id";
    }
    $query.=" WHERE id=:user_id;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':user_id', $_SESSION['id']);
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();
}
?>