<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <title>Kinsmen Creative Brief</title>
</head>
<body>
    <div class='success-container'>
        <h1><?php echo $lang['succes']; ?></h1>
        <br>
        <p><?php echo $lang['succes-beschrijving-een']; ?></p>

        <p><?php echo $lang['succes-beschrijving-twee']; ?></p>
        <a href='/creativebrief/?client=<?php echo urlencode($_GET['client']);?>&lang=<?php echo $_GET["lang"];?>'><?php echo $lang['succes-knop']; ?></a>
    </div>
</body>
</html>