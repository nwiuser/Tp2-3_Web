//exercice 3
//avec boucle while

<?php
$t = rand(100,999);
$i = 0;
$p=0;
while($p != $t){
    $p = rand(100, 999);
    if($p != $t){
        $i ++;
    }
    else{
        break;
    }
}
echo "le nombre d'essais est : " . $i . "<br>";
?>

//avec boucle for
<?php
$t = rand(100,999);
$i = 0;
$p = 0;
for($j = 0; $p != $t; $j++){
    $p = rand(100, 999);
    if($p != $t){
        $i ++;
    }
    else{
        break;
    }
}
echo "le nombre d'essais est : " . $i . "<br>";
?>