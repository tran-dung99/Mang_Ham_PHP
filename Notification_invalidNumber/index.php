<!Doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset style="width: 500px">
        <legend>Caculator</legend>
<table>
    <tr>
        <td>Number 1 :</td>
        <td><input type="text" name="number1"></td>
    </tr>
    <tr>
        <td>Operation :</td>
        <td><select name="operator">
                <option>+</option>
                <option>-</option>
                <option>x</option>
                <option value="/">/</option>
            </select></td>
    </tr>
    <tr>
        <td>Number 2 :</td>
        <td><input type="text" name="number2"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Check it"></td>
    </tr>
</table>
    </fieldset>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $number1 = $_POST["number1"];
 $number2 = $_POST["number2"];
 $operator = $_POST["operator"];
 function calculate($x,$y,$cal) {
    if($cal == "+") return $x+$y;
    if($cal == "-") return $x-$y;
    if($cal == "x") return $x*$y;
    if($cal == "/") {
        try{
            if($x == 0 && $y == 0) throw new Exception("Result is undefined");
            if($y == 0) throw new Exception("Cannot divide by zero");
        }
        catch (Exception $e) {
          echo $e->getMessage();
          die();
        }
        return $x/$y;
    }
 }
$result = calculate($number1,$number2,$operator);

         echo "Kết quả là : ".$result;

}
?>
