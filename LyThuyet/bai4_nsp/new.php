<?php
    include_once "nsp.php";
    include_once "nsp2.php";
    $sv = new NSP\SinhVien("Hiếu",19);
    $sv -> hienthithongtin();
    $sv = new NSP2\SinhVien("Hiếu", 2003);
    $sv -> hienthithongtin();
?>