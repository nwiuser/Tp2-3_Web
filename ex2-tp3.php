//--exercice 2

<?php
$T = false;
$tab = array();
while($T == false){
    for($i = 0;$i<3; $i++){
        $tab[$i] = rand(0,100);
    }
    if($tab[0] % 2 == 0 && $tab[1] % 2 == 0 && $tab[2] % 2 != 0){
        $T = true;
    }
}
print_r($tab);

?>