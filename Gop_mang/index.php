<?php
$array1 = [2,4,6,8];
$array2 = [3,5,7,9,10,6];
$arry3=[];
for($i = 0; $i < count($array1); $i++) {
    array_push($arry3,$array1[$i]);
}
$length = count($array2);
for($i = 0; $i < count($array2); $i++) {
   $arry3[$length] = $array2[$i];
   $length++;
}
var_dump($arry3);
?>