<?php

declare(strict_types=1);


require __DIR__ . '/../../vendor/autoload.php';


use Framework\App;
use App\Controllers\HomeController;

$app = new App();

// $app->get('/', ['App\Controllers\HomeController', 'home']);
$app->get('/', [HomeController::class, 'home']);

// $app->get('/home');
// $app->get('/ching/');
// $app->get('dong');

return $app;
