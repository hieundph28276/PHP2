<?php
// interface không phải là class
// interface chỉ có phương thức trìu tượng
// interface là bản kế cho các class có cùng phương thức
// abstract là bản thiết kế cho các class có cùng tính tính chất vs nhau
    interface DiChuyen{
        // định nghĩa phương thức trìu tượng trong interface
        function chay();
    }
    class ConCho implements DiChuyen{
        public function chay(){
            echo "Con chó chạy bằng 4 chân";
        }
    }
    class Oto implements DiChuyen{
        public function chay(){
            echo "Oto chạy bằng 4 bánh";
        }
    }
    $cc = new Oto(); 
    $cc->chay();
?>
