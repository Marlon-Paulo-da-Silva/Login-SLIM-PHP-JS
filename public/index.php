<?php


  require '../vendor/autoload.php';
  require 'bootstrap.php';

  

  use app\controllers\HomeController;
  use app\controllers\LoginController;
  use app\controllers\AdmiController;
  use Slim\Factory\AppFactory;


  $app = AppFactory::create();

  $app->get('/', [HomeController::class, 'index']);
  $app->post('/login', [LoginController::class, 'store']);
  $app->get('/admin', [AdmiController::class, 'index']);

  // Run app
  $app->run();
