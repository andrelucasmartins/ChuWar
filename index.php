<?php

use App\Model\{Game};
use App\Login\{Login, LoginController, LoginModel};
use App\Controller\{UserController, PlayerController};
use App\View\{View};

require_once 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function () {
    $userController = new UserController();
    $userController->index();
});

$app->get('/cadastrar', function () {
  $playerController = new PlayerController();
  $playerController->addUser();
});

$app->post('/cadastrar', function () {
  $playerController = new PlayerController();
  $playerController->addUser();
});

$app->get('/partida', function () {
  $playerController = new PlayerController();
  $playerController->warGame();
});

$app->post('/partida', function () {
  $playerController = new PlayerController();
  $playerController->warGame();
});

$app->get('/records', function () {
  $playerController = new PlayerController();
  $playerController->game();
});

$app->post('/records', function () {
  $playerController = new PlayerController();
  $playerController->game();
});

$app->get('/sair', function () {
  $playerController = new PlayerController();
  $playerController->logout();
});


/* $app->get('/game', function ($request, $response, $args) {
  $name = $args['name'];
  $response->getBody()->write("Hello, $name");

  return $response;
}); */
$app->run();



$login = new Login();
$login->Index();

$jogador = new Game();

echo $jogador->getJogador();
?>

