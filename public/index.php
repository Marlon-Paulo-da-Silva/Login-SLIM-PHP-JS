<?php


session_start();
require '../vendor/autoload.php';

  $dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
  $dotenv->load();


  use app\database\Connection;
  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Slim\Factory\AppFactory;


  $app = AppFactory::create();

  // $app->get('/', [HomeController::class, 'index']);
  // $app->post('/login', [LoginController::class, 'index']);

  $app->get('/', function (Request $request, Response $response, $args) {
    view('login', ['title' => 'Login']);
    // $response->getBody()->write("Hello, Marlon");
    return $response;
  });

  $app->post('/login', function (Request $request, Response $response, $args) {
    
    // echo var_dump(__DIR__);
    
    // return $response;
    // die();
    $email = strip_tags($_POST['email']);
    $passwrd = strip_tags($_POST['passwrd']);

    $connection = Connection::getConnection();

    $prepare = $connection->prepare("select id, name, email, passwrd from login where email = :email limit 1");
    $prepare->execute([
      'email' => $email
    ]);

    $user = $prepare->fetchObject();
    // echo json_encode(['user do banco: ' => $user]);

    if(!$user) {
      http_response_code(401);
      die();
    }

    // if(!password_verify($passwrd, $user->passwrd)){

    if($passwrd != $user->passwrd){
      // echo json_encode(['passwrd do banco: ' => $user->passwrd]);
      // echo json_encode(['passwrd do formulario: ' => $passwrd]);
      http_response_code(401);
      die();
    }

    unset($user->passwrd);

    $_SESSION['user'] = $user;

    http_response_code(200);

    echo json_encode('loggedIn');
    
    return $response;
  });

  // Run app
  $app->run();
