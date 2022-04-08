<?php

declare(strict_types=1);

use Kasia\ShopingEcart\Controller\ProductController;
use Kasia\ShopingEcart\Database;
use Kasia\ShopingEcart\Database\DBConnect;

require_once("../config/config.php");
// require_once("../helpers/helpersFunctions.php");

define('ROOT_DIR', __DIR__ . "/../");
require_once ROOT_DIR . "vendor/autoload.php";

echo '<br/>Internetowy koszyk<br>';

$database = new DBConnect();
$database->loadConfig();

$product = new ProductController();
$product->createProduct();