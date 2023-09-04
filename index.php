<?php

require 'Slim/slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();


$app->get(
    '/',
    function () {    
    	require_once("view/index.php");

    }
);

$app->get(
    '/home',
    function () {    
    	require_once("cookies/view/index.php");

    }
);

$app->get(
    '/contato',
    function () {    
    	require_once("cookies/view/contato.php");

    }
);


$app->get(
    '/sobre',
    function () {    
    	require_once("cookies/view/aboutus.php");

    }
);

$app->run();
