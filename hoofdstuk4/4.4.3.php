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
    $a = 51;
    $b = 50;
    $c = 'undefined';
    echo "eerste cijfer is $a <BR>";
    echo "tweede cijfer is $b <BR><BR>";

    if($a > $b) {
        echo "nummer $a is het hoogst<BR><BR>";
        $c = $a;
    } else {
        echo "nummer $b is het hoogst<BR><BR>";
        $c = $b; 
    }

    echo "$c vermenigvuldigt bij 2 is: ";
    echo $c * 2;
    
?> 
</div>
</body>
</html>