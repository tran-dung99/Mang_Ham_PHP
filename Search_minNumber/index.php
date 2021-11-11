<!Doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset style=" width: 500px">
        <legend>Tìm giá trị nhỏ nhất</legend>
        nhập mảng muốn tìm:<br>
        <input type="text" name="min"><br><br>
        <input type="submit" value="Search" >
    </fieldset>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["min"];
    $array = explode(',',$string);
    $min = $array[0];
    for($i = 1; $i < count($array); $i++) {
        if($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    echo "Giá trị nhỏ nhất là ".$min;
}
    ?>
