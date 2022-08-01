<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
    echo "ola";

	$sql = new \Hcode\DB\sql();
	$results = $sql->select("SELECT * FROM ");
	echo json_encode($results);
	print_r($results);

});

$app->run();

 ?>