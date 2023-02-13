<?php
//hàm dùng để gom code , dễ quản và mang tính tái sử dụng
// Hàm có trả về

// Hàm không trả về
// function tinh($a,$b,$c){
//     echo $a + $b +$c;
// }
// tinh(5,6,7);

// Xây dựng một hàm thông tin gồm những tham số truyền vào
// masv,hoten,diachi,namsinh
//
function tinhtuoi ($namsinh){
    return date("Y") - $namsinh;
}
function myFunction($masv,$hoten,$diachi,$namsinh){
    echo $masv; 
    echo $hoten;
    echo $diachi;
    echo tinhtuoi($namsinh);
}
// myFunction(01,"Nguyễn Đức Hiếu","HÀ Nội",2003);

function tongluong($Luongcb,$sogioday){
    return $Luongcb*$sogioday;
}
function xeploai($tongluong){
    if($tongluong >= 6000){
        return "Đạt";
    }else {
        return "Khum Đạt";
    }
}
function thongtin($magv,$tengv,$namsinh,$Luongcb,$sogioday){
    echo $magv."-".$tengv."-".tinhtuoi($namsinh)."-".tongluong($Luongcb,$sogioday)."-".xeploai(tongluong($Luongcb,$sogioday));
}
thongtin(01,"Nguyen Văn Nam",2002,7000,20);
?>


