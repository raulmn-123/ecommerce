<?php 

use \Hcode\Page;
use \slim\Slim;
use \Hcode\Model\Product;

$app = new Slim();


$app->get('/', function() {

	$products = Product::listAll();
    
	$page = new Page();

	$page->setTpl("index", [
		'products'=>Product::checkList($products)
	]);

});

?>