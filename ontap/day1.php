<?php
$a = 7;//kiểu dữ liệu số nguyên
$b = "FPT";//KIểu dữ liệu chuỗi, chữ
$c = false;//kiểu dữ liệu boolean
// echo $b.$a;
// Mảng tuần tự
$mang = [1,2,3,4,5,6,];
// echo $mang[5];
// Duyệt mảng
// echo "<pre>";
// echo print_r($mang); in mảng
// die();
// foreach ($mang as $key=> $value){
//     if($value % 2 != 0){
//         echo $value."<br>";
//     }
// }
//in những phần tử là số lẻ
//mảng liên hợp (key=> values)
$manglh = ["a"=> '1', "b" => '2', "c" => '4'];
// echo $manglh["c"];
$mausac =  ["blue"=>"Màu xanh",
    "yellow"=>"Màu vàng",
    "orange"=>"Màu cam",
    "pink"=>"Màu hồng",
    "red"=>"Màu đỏ",
    "green"=>"Màu lá"
];
function mau($a){
    if($a == "Màu xanh") {
        return ["blue"];
    }elseif($a == "Màu vàng"){
        return ["yellow"];
    }elseif($a == "Màu cam"){
        return ["orange"];
    }elseif($a == "Màu hồng"){
        return ["pink"];
    }elseif($a == "Màu đỏ"){
        return ["red"];
    }else{
        return ["green"];
    }
}
// màu đã cho 

$thongtin = [
    "masv" => "001",
    "tensv" => "Hiếu",
    "tuoi" => 20,
    "diachi" => "Hà Nội"
];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        
         <?php foreach($mausac as $key => $value){
            $colors = mau($value);
            ?>
                <tr>
                    <td> <?php echo $key  ?> </td>
                    <td style="background :<?php echo $colors[0] ?>" width="50px"> </td>
                </tr>
            <?php } 
        ?>
     </table>
     <table border=1>
        <tr>
            <td>masv</td>
            <td>tensv</td>
            <td>tuoi</td>
            <td>diachi</td>
        </tr>
        <tr>

            <?php foreach($thongtin as $key => $value){ 
                $mausac = "";
                if($key == "tuoi"){
                    $mausac = $value >= 18 ? "red": "green"; 
                }
                ?>
            <td bgcolor = "<?php echo $mausac; ?>"> <?php echo $value?></td>
           
            <?php } ?>
        </tr>
     </table>
</body>
</html>