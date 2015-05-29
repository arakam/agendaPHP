<?php

require 'Slim/Slim.php';
require_once 'dbHelper.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$db = new dbHelper;


// GET clients
$app->get('/',function (){
        echo "home";
    }
);

$app->get('/clientes',  function() { 
    global $db;
    $rows = $db->select("clientes","*",array());
    // echo $rows;
	echoResponse(200, $rows);
});

// POST route
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);

/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();

function getConn()
{
	return new PDO('mysql:host=localhost;dbname=agenda','root','18052911',
	array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);

}

function getCategorias()
{
	$stmt = getConn()->query("SELECT * FROM clientes");
	$categorias = $stmt->fetchAll(PDO::FETCH_OBJ);
	echo "{categorias:".json_encode($categorias)."}";
}
