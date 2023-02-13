<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController{
    // public function __construct(){
    //     echo "Prodcut controler";
    // }
    public function __construct(){
        // định nghĩa khởi tạo product trong này
        $this -> product = new Product();
    }
    public function index(){
        // $product = new Product();
        // lấy dữ liệu từ bảng product xuống
        $title = "hihi";
        $tieude = "hiaa";
        $products = $this->product->getProduct();
        // bắn dữ liệu sang views index
        $this->render('product.index',compact('products','title','tieude'));
    }
    public function add(){
        $product = new Product();
        // lấy dữ liệu từ bảng product xuống
       
    }
}

