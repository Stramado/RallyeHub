<?php 
include "./src/php/functions.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="language" content="fr">
    <meta name="description" content="Profitez de regarder les vidéos de vos pilotes de rallye préférés, avec vos amis, votre famille et le monde entier sur RallyHub">
    <meta name="keywords" content="vidéo, partage, rallye, gratuit, visionnage, social">
    <title>RallyeHub - Watch a Video</title>
    <link rel="stylesheet" href="/static/stylesheets/main.css">
    <link rel="stylesheet" href="/static/stylesheets/watch.css">
    <link rel="icon" type="image/x-icon" href="/static/img/favicon.ico">
</head>
<body>
    <?php headerSample(); # Header ?>

    <main>
    <?php categoriesBarSample(); # Categories bar
        displayVideo();
        createHTMLElementFromJSON(); # List the videos
    ?>
    </main>

</body>
</html>