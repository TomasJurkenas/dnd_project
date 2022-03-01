<?php
session_start();
if(isset($_SESSION['id'])) {
    $localhost = "db";
    $username = "tomas";
    $password = "tomas";
    $dbname= "project_dnd";
    $conn =new PDO("mysql:host=$localhost;dbname=$dbname", $username, $password);
    if($_GET['action']=='meele') {
        $query = "SELECT weapon.min_damage, weapon.max_damage  from `weapon` INNER JOIN `user` ON(weapon.id=user.weapon_id)  WHERE user.id=:user_id;";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':user_id', $_SESSION['id']);
        $stmt->execute();
        $data = $stmt->fetchObject();
        if ($data) {
            $damage = rand($data->min_damage, $data->max_damage);
            $query="UPDATE `npc` SET `constitution`=`constitution`-:damage WHERE `id`=:npc_id;";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':damage', $damage);
            $stmt->bindParam(':npc_id', $_GET['npc_id']);
            $stmt->execute();
        }
    }
    elseif($_GET['action']=='upd_npc') {
        $query="SELECT `id`, `name`, `constitution` FROM npc;";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }
    //....
}
?>