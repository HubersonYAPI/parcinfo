<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=parcinfo', 'root', '');
} catch (Exception $e) {
	die("Erreur : ".$e->getMessage());
}

?>