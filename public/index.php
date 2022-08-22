<?php

  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Slim\Factory\AppFactory;

  require '../vendor/autoload.php';

  $app = AppFactory::create();

  $app->get('/', function (Request $request, Response $response, $args) {
    view('home', ['title' => 'Login']);
    // $response->getBody()->write("Hello, Marlon");
    return $response;
  });

  // Run app
  $app->run();
