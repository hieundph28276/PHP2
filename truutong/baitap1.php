<?php
    class hinhhoc{
        public $a;
        public $b;
        public function setchieudai($a){
            $this-> chieudai = $a;
        }
        public function setchieurong($b){
            $this-> chieurong = $b;
        }
    }
    class hcn extends hinhhoc{
        public $chieudai;
        public $chieurong;
        public function __construct($chieudai,$chieurong){
            $this-> a = $chieudai;
            $this-> b = $chieurong;
        }
        public function chivihcn(){
            return ($this->a + $this->b) * 2;
        }
        public function dientichhcn(){
            return $this->a * $this->b ;
        } 
        public function hienthi(){
            echo "chu vi hình chữ nhật: ". $this-> chuvihcn() . "diện tích hình chữ nhật: ". $this-> dientichhcn();
        }
    }
    $hcn = new hcn(7,5);
    $hcn -> hienthi();  
?>