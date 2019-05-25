<?php

require_once("../../Conf/db.php");

$req = $db->prepare("DELETE FROM admin  WHERE id=" .$_GET["id"]);
$result = $req->execute();
header('location: admin.php');

?>

