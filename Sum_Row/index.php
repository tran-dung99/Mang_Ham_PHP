<?php
$arr = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
];
$row = 2;
$sum = 0;
for($i = 0; $i < count($arr); $i++) {
    for($j = 0; $j < count($arr[$i]); $j++) {
        if($j === $row) {
            $sum += $arr[$i][$j];
        }
    }
}
echo $sum;
?>
