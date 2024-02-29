<?php
require_once 'dbLink.php';
$query = $db->prepare('INSERT INTO `birds` (`name`, `color`, `season`, `habitat`, `estimatedUKpopulation`, `ageSpanYear`, `picture`)
VALUES (:name, :color, :season, :habitat, :estimatedUKpopulation, :ageSpanYear, :picture);');

$query->bindParam(':name', $_POST['name']);
$query->bindParam(':color', $_POST['color']);
$query->bindParam(':season', $_POST['season']);
$query->bindParam(':habitat', $_POST['habitat']);
$query->bindParam(':estimatedUKpopulation', $_POST['estimatedUKpopulation']);
$query->bindParam(':ageSpanYear', $_POST['ageSpanYear']);
$query->bindParam(':picture', $_POST['picture']);
$query->execute();

header('Location: birdCollection.php');
?>

