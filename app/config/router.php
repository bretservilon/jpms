<?php

$router = $di->getRouter();

// Define your routes here

$router->addPost(
	'/email/send', [
    "jpmsitems::send"
]);

$router->add('/product/([a-zA-Z0-9\_\-]+)', [
    'controller' => 'jpmsitems',
    'action'	 => 'view',
   	'cat_url'    => 1
]);

$router->add('/categories/{slug:[a-z\-]+}', [
    'controller' => 'jpmscategories',
    'action'	 => 'view',
   	'cat_url'    => 1
]);



$router->handle();
