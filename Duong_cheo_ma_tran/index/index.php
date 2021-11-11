<!Doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Ma trận vuông 4-4</legend>
        phần tử 1: <input type="text" name="number1"><br>
        phần tử 2: <input type="text" name="number2"><br>
        phần tử 3: <input type="text" name="number3"><br>
        phần tử 4: <input type="text" name="number4"><br>
        <input type="submit" value="Tính">
    </fieldset>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $number3 = $_POST["number3"];
    $number4 = $_POST["number4"];
    $numberOne = explode(',',$number1);
    $numberTwo = explode(',',$number2);
    $numberThree = explode(',',$number3);
    $numberFour = explode(',',$number4);
    $array = [];
    array_push($array,$numberOne);
    array_push($array,$numberTwo);
    array_push($array,$numberThree);
    array_push($array,$numberFour);
    $sum = 0;
    for($i = 0; $i < count($array); $i++) {
        for($j = 0; $j < count($array[$i]); $j++) {
            if($i = $j) {
                $sum += (int)$array[$i][$j];
            }
        }
    }
echo "Tổng đường chéo chính là ".$sum;
}
?>
