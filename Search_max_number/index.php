<!Doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Nhập phần tử mảng 1: <br>
    <label><input type="text" name="arr1"></label><br><br>
    Nhập phần tử mảng 2 : <br>
    <label><input type="text" name="arr2"></label> <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr1 = $_POST['arr1'];
    $arr2 = $_POST["arr2"];
    $newArray = explode(',',$arr1);
    $newArr = explode(',',$arr2);
    $arrsum = [];
    array_push($arrsum,$newArray);
    array_push($arrsum,$newArr);


function maxNumber($arr) {
    $max = $arr[0][0];
    $x = 0;
    $y = 0;
    for($i = 0; $i < count($arr); $i++){
        for($j = 1; $j < count($arr[$i]);$j++) {
            if($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
                $x = $i;
                $y = $j;
            }
        }
    }
    echo "Tọa độ giá trị lớn nhất là x = ".$x;
    echo " , y = ".$y;
    echo"<br/>";
    echo "Giá trị lớn nhất là :";
    return $max;
}
echo maxNumber($arrsum);
}
 ?>