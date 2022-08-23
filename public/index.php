<?php


  require '../vendor/autoload.php';
  require 'bootstrap.php';

  

  use app\controllers\HomeController;
  use app\controllers\LoginController;
  use Slim\Factory\AppFactory;


  $app = AppFactory::create();

  $app->get('/', [HomeController::class, 'index']);
  $app->post('/login', [LoginController::class, 'store']);

  // Run app
  $app->run();
