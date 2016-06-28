<?php

require __DIR__ .'/../vendor/autoload.php';

// Create app
$app = new \Slim\App(['settings' => ['displayErrorDetails' => true]]);

// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('templates', [
        'cache' => false
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));

    return $view;
};

// Render Twig template in route **

$app->get('/', function ($request, $response, $args)
{
    return $this->view->render($response, 'index.twig'); 
});

$app->get('/about', function ($request, $response, $args)
{
    return $this->view->render($response, 'about.twig'); 
});

$app->get('/contact', function ($request, $response, $args)
{
    return $this->view->render($response, 'contact.twig'); 
});

$app->get('/restaurant', function ($request, $response, $args)
{
    return $this->view->render($response, 'restaurant.twig'); 
});

$app->run();