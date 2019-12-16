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
  $leeftijd = 18;
  $stempas = true;
  $magstemmen = 'undefined';

  echo "je leeftijd is: $leeftijd<BR>";
  if ($stempas == true){
    echo "heb je stempas: ja<BR><BR>";
  } else if($stempas == false){
    echo "heb je stempas: nee<BR><BR>";
  }

  if($leeftijd >= 16 && $leeftijd < 18){
    echo "je mag je scooter rijbewijs halen<BR><BR>";
    $magstemmen = false;
  } else if($leeftijd >= 18){
    echo "je mag je scooter rijbewijs halen<BR>";
    echo "je mag je auto rijbewijs halen<BR><BR>";
    $magstemmen = true;
  }

  if($magstemmen == true && $stempas == true){
    echo "je mag stemmen";
  } else if($magstemmen == true && $stempas == false){
    echo "je mag niet stemmen";
  } else if($magstemmen == false && $stempas == false){
    echo "je mag niet stemmen";
  } else if($magstemmen == false && $stempas == true){
    echo "je mag niet stemmen";
  } 
?> 
</div>
</body>
</html>