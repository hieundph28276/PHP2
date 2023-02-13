<?php
require_once "vendor/autoload.php";
// require_once "controllers/CategoryControllers.php";
// require_once "models/Product.php";
use App\controllers\CategoryControllers;
use App\models\Product;
$CategoryControllers = new CategoryControllers();
$Product = new Product();