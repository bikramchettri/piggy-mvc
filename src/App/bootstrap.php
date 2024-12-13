<?php

declare(strict_types=1);


require __DIR__ . '/../../vendor/autoload.php';

use Framework\App;

use function App\Config\registerRoutes; //importing functions using use function

// use App\Controllers\{HomeController, AboutController};

$app = new App();
registerRoutes($app);

// $app->get('/', ['App\Controllers\HomeController', 'home']);
// $app->get('/', [HomeController::class, 'home']);
// $app->get('/about', [AboutController::class, 'home']);

// $app->get('/home');
// $app->get('/ching/');
// $app->get('dong');

return $app;
