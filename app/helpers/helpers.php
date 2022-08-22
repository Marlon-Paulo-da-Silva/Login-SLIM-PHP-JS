<?php

  function view (string $view, array $data = []){

    $path = dirname(__FILE__) . '/views';

    // Create new Plates instance
    $templates = new League\Plates\Engine($path);

    // Render a template
    echo $templates->render($view, $data);
  }