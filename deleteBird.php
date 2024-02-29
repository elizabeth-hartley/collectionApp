<?php
$db = new PDO('mysql:host=db; dbname=birdwatching', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('UPDATE `birds`  SET `deleted` = 1 WHERE `id` = '. $_GET['id']);

$query->execute();

header('Location: birdCollection.php');
?>
