<?php

namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController {
  public function index(Request $request, Response $response, $args){
    view('login', ['title' => 'Login']);
    // $response->getBody()->write("Hello, Marlon");
    return $response;
  }
}