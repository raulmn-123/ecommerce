<?php 

use \Hcode\Page;
use \slim\Slim;

$app = new Slim();


$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

?>