<!Doctype html>
<html lang="en">
<head>
    <title>document</title>
</head>
<body>
<form action="" method="post">
    <h2> Form Đăng Ký</h2>
    <table>
        <tr>
            <td>Tên người dùng:</td>
            <td><label><input type="text" name="userName"></label></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><label><input type="text" name="mail"></label></td>
        </tr>
        <tr>
            <td>Số điện thoại:</td>
            <td><label><input type="text" name="phone"></label><br><br></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["userName"];
    $email = $_POST["mail"];
    $phone = $_POST["phone"];

    function saveDataJSON($filename,$name1,$email1,$phone1) {

        try{
            if(empty($name1)) throw new Exception("Vui lòng nhập tên người dùng");
            if(empty($email1)) throw new Exception("Vui lòng nhập địa chỉ email");
            if(filter_var($email1, FILTER_VALIDATE_EMAIL) === false) throw new Exception("Địa chỉ email không hợp lệ");
            if(empty($phone1)) throw new Exception("Vui lòng nhập số điện thoại");
        }
        catch( Exception $e) {
            echo $e ->getMessage();
            die();
        }
       $contact = ["userName"=>$name1,
                    "mail"=>$email1,
                     "phone"=>$phone1];
       $dataFile = file_get_contents($filename);
       $dataJson = json_decode($dataFile);
       array_push($dataJson,$contact);
       $json1 = json_encode($dataJson);
      return file_put_contents($filename,$json1);
    }
     saveDataJSON('users.json',$name,$email,$phone);
}
?>
