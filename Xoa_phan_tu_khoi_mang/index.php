<?php
$number=[10,4,6,7,8,6,0,0,0,0];
$x = 4;
$index = 0 ;
for($i = 0; $i < count($number) ; $i++) {
    if($number[$i] === $x) {
        $index = $i;
    }
}

for($j = $index; $j < count($number) -1 ; $j++) {

        $number[$j] =$number[$j + 1] ;
}
$number[count($number)-1] = 0;
var_dump($number);
?>
