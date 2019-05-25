<?php

require_once("../../Conf/db.php");

$req = $db->prepare("DELETE FROM users  WHERE id=" .$_GET["id"]);
$result = $req->execute();
header('location: users.php');

?>

