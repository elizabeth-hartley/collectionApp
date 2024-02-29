<?php
require_once 'dbLink.php';
$query = $db->prepare('UPDATE `birds`  SET `deleted` = 1 WHERE `id` = '. $_GET['id']);

$query->execute();

header('Location: birdCollection.php');
?>
