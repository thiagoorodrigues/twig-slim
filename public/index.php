<?php

require __DIR__ . '/../bootstrap.php';

/*
use Slim\Http\Request;
use Slim\Http\Response;

$app->group('/admin', function () use ($app) {
    $app->get('/', function (Request $request, Response $response, array $args) {
        dd($response);
    });

    $app->get('/user/{id}', function (Request $request, Response $response, array $args) {
        dd($args);
    });
});

$app->get('/', function () {
    echo 'Home';
});

$app->get('/thiago', function () {
    echo 'Thiago';
});
*/

$app->get('/', 'app\controllers\HomeController:index');
$app->get('/contato', 'app\controllers\ContatoController:index');
$app->get('/posts', 'app\controllers\PostsController:index');

$app->group('/cadastro', function () use ($app) {
    $app->get('/', 'app\controllers\CadastroController:index');
    $app->get('/create', 'app\controllers\CadastroController:create');
    $app->post('/store', 'app\controllers\CadastroController:store');
});

$app->run();
