<?php
    /*
        todo1: maak een multidimensionale array met daarin alle checkins zoals te zien op screenshots/screenshot1.png
            - denk na over welke data er in je array moet zitten
            - soms voeg je een foto toe, soms niet (tip: gebruik voor je foto's pexels.com of een andere gratis leverancier)
            - op screenshots/screenshot2.jpeg kan je zien wat bedoelt wordt met een checkin met foto
            - werk met isset() of empty() om de foto soms wel en soms niet af te drukken


        todo2: werk met een constant DISTANCE waarmee je kan instellen wat de maximale afstand is om checkins voor te tonen
            - je zal in je array een extra stukje data moeten bijvoegen om deze afstand mee te betrekken in je checkins

    */
    $users = array(
        array( "username" => "Jesse", "comment" => "Assembly 3.0", "city" => "San Francisco, CA" , "image" => "", "userimage" => "../images/userImage1.jpg"),
        array( "username" => "Michal", "comment" => "Voxer", "city" => "San Francisco, CA" , "image" => "", "userimage" => "../images/userImage2.jpg" ),
        array( "username" => "Petr", "comment" => "ROXY/NoD", "city" => "Prague, Czech Republic" , "image" => "", "userimage" => "../images/userImage3.jpg" ),
        array( "username" => "Jaroslav", "comment" => "Vrno hlavni nadrazi", "city" => "Brno, Czech Republic" , "image" => "" , "userimage" => "../images/userImage4.jpg"),
        array( "username" => "Jesse", "comment" => "The Mill", "city" => "San Francisco, CA" , "image" => "" , "userimage" => "../images/userImage1.jpg"),
        array( "username" => "Matej", "comment" => "MassVantures", "city" => "Prague, Czech Republic" , "image" => "" , "userimage" => "../images/userImage5.jpg")
      );
    include_once("header.inc.php");
    include_once("footer.inc.php");

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swarm App</title>
</head>
<body>
    <?php // todo3 : lus over je checkins en print deze visueel af zoals op de screenshots/screenshot1.png?>

    <?php // todo4 : zorg dat je header en footer opgehaald wordt vanuit footer.inc.php en header.inc.php zodat je deze kan hergebruiken op meerdere schermen?>
</body>
</html>