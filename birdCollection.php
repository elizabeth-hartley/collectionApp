<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Bird Box Collection</title>
    <link rel="stylesheet" href="stylesheet.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@700&family=Lora:ital,wght@1,500&family=Playfair+Display:ital@1&family=Shadows+Into+Light&display=swap"
          rel="stylesheet">
    <link rel="icon" type="IMG/x-icon" href="IMG/favicon.ico">
</head>
<body>

<?php
require_once 'dbLink.php';

$query = $db->prepare('SELECT `id`, `name`, `color`, `season`, `habitat`, `estimatedUKpopulation`, `ageSpanYear`, `picture` FROM `birds` WHERE `deleted` is NULL;');

$query->execute();

$birdsOfPray= $query->fetchAll();
?>
<img class="birdimage" id="main" src=IMG/BirdBoxImage.png>
<div class="title">The Birdbox</div>
<a class="addNewBirdLink" href="#addANewBird">add a new bird</a>
<div class="birdBoxContainer">

    <?php
    foreach($birdsOfPray as $bird){
        echo'<div class="birdBox">'.
            '<div class="subtitle">'. $bird['name']. '<br>'. '</div>'.
            '<img src="'. $bird["picture"]. '"/>'.
            'Colour:'. ' '. $bird['color']. '<br>'.
            'When is the best time of year to spot them?'. '<br>'. $bird['season']. '<br>'.
            'What kind of habitat you\'ll find them in:'. '<br>'. $bird['habitat']. '<br>'.
            'How many are left in the UK?'. ' '. '<br>'. 'There are around'. ' '. $bird['estimatedUKpopulation']. ' '. 'left in the UK.'. '<br>'.
            'How long does the'. ' '.  $bird['name']. ' '. 'live for?'.  '<br>'. $bird["ageSpanYear"]. ' '. '<br>'.
            '<a href="deleteBird.php?id=' . $bird['id']. '"><button class="deleteButton">Delete This Bird</button></a></div>';
    }
    ?>
</div>
<div class="submissionFormContainer">
    <div class="submissionForm">
        <div id="addANewBird">Want to add a new bird to your collection?</div>
        <br>
        <form class="form" action="birdAdded.php" method="post">
            <label for="nameID">Name:</label>
            <input id="nameID" type="text" name="name" class="defaultTextBox">
            <label for=pictureID>Picture URL:</label>
            <input id="pictureID" type="text" name="picture" class="defaultTextBox"
            <label for="colorID">Colour:</label>
            <input id="colorID" type="text" name="color" class="defaultTextBox">
            <label for="seasonID">Season:</label>
            <input id="seasonID" type="text" name="season" class="defaultTextBox">
            <label for="habitatID">Habitat:</label>
            <input id="habitatID" type="text" name="habitat" class="defaultTextBox">
            <label for="populationID">UK Population:</label>
            <input id="populationID" type="text" name="estimatedUKpopulation" class="defaultTextBox">
            <label for="ageID">Age Span:</label>
            <input id="ageID" type="text" name="ageSpanYear" class="defaultTextBox">
            <br>
            <input type="submit" class="submitButton">
        </form>
        <br>
    </div>
</div>
<a href="#main"><button id="totopbutton" title="Go to top">^</button></a>


</body>
</html>