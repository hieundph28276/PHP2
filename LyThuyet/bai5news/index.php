<?php
    // include_once "controllers/CategoryController.php";
    // include_once "controler/CategoryControler.php";
    // include_once "controllers/ProductController.php";
    // include_once "models/Product.php";
    require_once 'vendor/autoload.php';
    // use App\Controllers\ProductController;
    // use App\Controllers\CategoryController;
    // use App\models\Product;
    $CategoryController = new App\Controllers\CategoryController();
    $ProductController = new App\Controllers\ProductController();
    $Product = new App\models\Product();
?>  