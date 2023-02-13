<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController
{
    public function __construct(){
        $this -> category = new Category();
    }
    public function index(){
        echo "thấy gì chưa";
    }
}