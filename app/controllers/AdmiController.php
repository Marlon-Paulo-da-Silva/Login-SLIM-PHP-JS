<?php

namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class AdmiController {
  public function index(Request $request, Response $response, $args){
    view('Admin', ['title' => 'Admin']);
    // $response->getBody()->write("Hello, Marlon");
    return $response;
  }
}