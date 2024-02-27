<!DOCTYPE html>
<html lang="en">
<head>
    <title>Birds Of Pray Collection</title>
    <link rel="stylesheet" href="stylehseet.css"/>
</head>
<body>
<?php
$db = new PDO('mysql:host=db; dbname=birdwatching', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `name`, `color`, `season`, `habitat`, `estimatedUKpopulation`, `ageSpanYear` FROM `birds`;');

$query->execute();

$birdsOfPray= $query->fetchAll();
?>

<div class="title">Birds Of Pray Collection</div>
<div>
    <?php
    foreach($birdsOfPray as $bird){
        echo '<br>'. '<div>'.
            'Name:'. ' '. $bird['name']. '<br>'.
            'Colour:'. ' '. $bird['color']. '<br>'.
            'What is the best time of year to spot them in the UK?'. ' '. $bird['season']. '<br>'.
            'What kind of habitat you\'ll find them in:'. ' '. $bird['habitat']. '<br>'.
            'How many are left in the UK?'. ' '. $bird['estimatedUKpopulation']. '<br>'.
            'How long they live for:'. ' '. $bird["ageSpanYear"]. ' '.'<div>'. '<br>';
    }
        ?>

    </div>

</>




</body>
</html>