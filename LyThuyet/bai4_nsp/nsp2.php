<?php
namespace NSP2;
    class SinhVien{
        public $ten;
        public $namsinh;
        public function __construct($ten,$namsinh){
            $this-> ten = $ten;
            $this-> namsinh = $namsinh;
        }
        public function hienthithongtin(){
            echo "Tên: ". $this->ten. "<br>";
            echo "Năm sinh: ". $this->namsinh. "<br>";
        }
    }
?>