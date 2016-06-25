<?php

require '/vendor/autoload.php';

// Initalise use of templates
// Ensure debugging
$configuration = [
'settings' => [
    'displayErrorDetails' => true,
],
];

// Create container
$container = new \Slim\Container($configuration);

// Register component on container
$container['view'] = function ($c)
{
    $view = new \Slim\Views\Twig('templates', [
        'cache' => 'cache'
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension
    (
        $c['router'],
        $c['request']->getUri()
    ));
    return $view;
};

// Create app
$app = new \Slim\App($container);

// Render Twig template in route **

$app->get('/', function ($request, $response, $args)
{
    return $this->view->render($response, 'index.twig',
    [
        'name' => "Log In"
    ]);
})->setName('home');

//$app->get('/', function () use($app){
	//home page
//	$app->render("index.twig");
//});

$app->get('/contact', function () use($app){
	//contact page
	$app->render("contact.html");
});

$app->get('/about', function () use($app){
	//about page
	$app->render("about.html");
});

$app->run();