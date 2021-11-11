<!Doctype html>
<html lang="en">
<head>
    <title>LIST USER</title>
    <style>
        .selection{
            text-align: center;
            margin-top: 20px;
        }
        .tables{
            width: 1000px;
            margin-left: 200px;
        }
        .tables tr td {
            padding: 10px;
            width: 300px;
            text-align: center;
        }
        .table tr th{
            width: 300px;
        }
        .tables h3{
            text-align: center;
            background-color: green;
            height: 50px;
            font-size: 30px;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="selection">
        chọn ngày sinh từ: <label><input type="date" name="from"></label>
        đến: <label><input type="date" name="to"></label>
        <input type="submit" value="Lọc">
    </div>
</form>
<?php
$list_custemer = [
    "1" => [
        "name" => "Mai Văn Hoàn",
        "ngaySinh" => "1983/08/20",
        "diachi" => "Hà Nội",
        "image" => "image/ảnhmang1.jpg"
    ],
    "2" => [
        "name" => "Nguyễn Văn Nam",
        "ngaySinh" => "1983/08/21",
        "diachi" => "Bắc Giang",
        "image" => "image/anhmang2.jpg"
    ],
    "3" => [
        "name" => "Nguyễn Thái Hòa",
        "ngaySinh" => "1983/08/22",
        "diachi" => "Nam Định",
        "image" => "image/anhmang3.jpg"
    ],
    "4" => [
        "name" => "Trần Đăng Khoa",
        "ngaySinh" => "1983/08/17",
        "diachi" => "Hà Tây",
        "image" => "image/anhmang4.jpg"
    ],
    "5" => [
        "name" => "Nguyễn Đình Thi",
        "ngaySinh" => "1983/08/19",
        "diachi" => "Hà Nội",
        "image" => "image/anhmang5.jpg"
    ]
];
function searchByDate($arr,$fromDate,$toDate) {
    if(empty($fromDate) || empty($toDate)) {
        return $arr;
    }
    $fillCustomer = [];
    foreach ($arr as $customer) {
        if(strtotime($customer["ngaySinh"]) < strtotime($fromDate)) {
            continue;
        }
        if(strtotime($customer["ngaySinh"]) > strtotime($toDate)) {
            continue;
        }
        $fillCustomer[] = $customer;
    }
    return $fillCustomer;
}
$fromDay = null;
$toDay = null;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fromDay = $_POST["from"];
    $toDay = $_POST["to"];
}
$list =  searchByDate($list_custemer,$fromDay,$toDay);
?>

    <div class="tables">
        <h3>Danh sách khách hàng</h3>

    <table>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <tbody>
        <?php foreach ($list as $key => $customer): ?>
            <tr>
                <td style="text-align: center"><?php echo $key + 1?></td>
                <td><?php echo $customer["name"] ?></td>
                <td><?php echo $customer["ngaySinh"] ?></td>
                <td><?php echo $customer["diachi"] ?></td>
                <td><img src="<?php echo $customer["image"] ?>" alt="none" width="100px"></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>

</body>
</html>


