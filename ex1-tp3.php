//--exercice 1

<?php
for($n = 0; $n < 1000; $n++){
    $q = (int)($n / 10);
    $r = $n % 10;
    $i = 0;
    $s = 0;
    while($i < strlen($n)){
        $s += $r ** strlen($n);
        $r = $q % 10;
        $q = (int)($q / 10);
        $i ++;
    }
    if($s == $n){
        echo "les nombres trouvées sont :" . $n ."<br>";
    }
}
?>