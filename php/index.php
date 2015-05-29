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

// GET clients
$app->get('/agenda',function (){
        echo "Agenda";
    }
);

// Seleciona todos os clientes 
$app->get('/clientes',  function() { 
    global $db;
    $rows = $db->selectClientes("clientes","*",array());
    return $rows;
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
?>
