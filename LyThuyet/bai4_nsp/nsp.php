<?php
namespace NSP;
    class SinhVien{
        public $ten;
        public $tuoi;
        public function __construct($ten,$tuoi){
            $this-> ten = $ten;
            $this-> tuoi = $tuoi;
        }
        public function hienthithongtin(){
            echo "Tên: ". $this->ten. "<br>";
            echo "Tuổi: ". $this->tuoi. "<br>";
        }
    }
?>