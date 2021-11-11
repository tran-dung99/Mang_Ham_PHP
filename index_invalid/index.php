


<!Doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form method="post">
    <br><br>
    Nhập index: <label><input type="text" name="index"></label>
    <input type="submit" value="submit">
</form>
</body>
</html>


<?php

 if($_SERVER["REQUEST_METHOD"] == "POST") {
     $index = $_POST["index"];
     $number = [];
     for($i = 0; $i < 100; $i++) {
         $number[$i] = mt_rand(1,100);
     }
     try{
         if($index < 0 || $index >= 100) throw new Exception("không hợp lệ, vui lòng nhập lại");
     }
     catch (Exception $e) {
         echo $e->getMessage();
         die();
     }
     echo $number[$index];
     echo"<br/>";
     echo "Mảng gồm : ";
     foreach($number as $values) {
         echo "$values".' ';
     }
 }
?>
