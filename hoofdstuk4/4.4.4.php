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
   $prijs = 50;
   $btwsom = 'undefined';
   $btw = 'undefined';

   if($prijs >= 150){
      $btwsom = 1.19;
      $btw = 19;
   } else if($prijs <= 55){
      $btwsom = 1.11;
      $btw = 11;
   } else{
      $btwsom = 1.16;
      $btw = 16;
   }

   echo "oude prijs: $prijs <BR>";
   echo "BTW = $btw % <BR>";
   echo "nieuwe prijs:";
   echo $prijs * $btwsom;
?> 
</div>
</body>
</html>