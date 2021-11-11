
<?php
$array = [10,6,5,7,9,4,2,8];
function minNumber($arr) {
    $min = $arr[0];
    $index = 0;
    for( $i = 1 ; $i < count($arr); $i++) {
        if($arr[$i] < $min) {
            $min = $arr[$i];
            $index = $i;
        }
    }
return $index;
}
$min = minNumber($array);
echo "Vị trí giá trị nhỏ nhất trong mảng là :".$min;
?>
