<?php

require_once("../../Conf/db.php");

$req = $db->prepare("DELETE FROM equipment  WHERE id=" .$_GET["id"]);
$result = $req->execute();
header('location: equipment.php');

?>

