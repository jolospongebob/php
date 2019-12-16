<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>test</title>
</head>
<body>
    <div class="sidenav">
    <?php include_once('menuhoofdstuk4.php')?>
</div>
<!-- Page content -->
<div class="main">
    <button class="btn index" onclick="window.location.href = '../index.php';">index</button>
    <button class="btn ervaring" onclick="window.location.href = '../page.php';">page</button>
<br>
<br>
<?php 
    $spaargeld = 1000;
    $gespaard = 1050;
    echo "geld te sparen $spaargeld<BR>";
    echo "geld gespaard: $gespaard euro<BR><BR>";

    if($gespaard < 750) {
        echo "geld te kort zoek een baan<BR>";
        echo $spaargeld - $gespaard;
        echo " euro te kort";
    } else if($gespaard >= 750 && $gespaard < 1000){
        echo "kan telefoon bijna kopen<BR>";
        echo $spaargeld - $gespaard;
        echo " euro te kort";
    } else if($gespaard >= 1000){
        echo "kan telefoon kopen<BR>";
        echo $gespaard - $spaargeld;
        echo " euro over voor een hoesje";
    } 
?> 
</div>
</body>
</html>