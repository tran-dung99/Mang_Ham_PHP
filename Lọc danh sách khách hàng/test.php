<!Doctype html>
<html lang="en">
<head>
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
        $fillCustomer[] = $customer;
    }
    return $fillCustomer;
}
echo "searchByDate($list_custemer,20,23)";
?>
?>
</body>
</html>
