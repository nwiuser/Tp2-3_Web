<?php

$msg;

$a = $_GET["a"];
$b = $_GET['b'];
$c = $_GET['c'];

$delta = ($b)**2 - 4*($a)*($c);

if($delta == 0 && $a != 0){
    $z = -($b) / (2*($a));
    $msg = "la solution est : " . number_format($z, 2) ;
}
elseif($delta > 0 && $a != 0){
    $x = (-($b) -sqrt($delta)) / (2*($a));
    $y = (-($b) +sqrt($delta)) / (2*($a));
    $msg = "les deux solutions sont : ( " . number_format($x,2) . " , " . number_format($y, 2) . " )";
}
else{
    $msg = "les solutions ne sont pas dans IR";
}
?>

<!DOCTYPE html>
<html>
    <title>Resultats</title>
    <link rel="stylesheet" href="style.css">
    <body>
        <h1 id="h1">Voici la solution : </h1>
        <h2 id="h2">
            <?php echo $msg ?>
        </h2>
    </body>
</html>