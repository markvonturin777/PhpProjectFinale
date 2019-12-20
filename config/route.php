<?php

use SimpleMVC\Controller\AboutController;
use SimpleMVC\Controller\AdminController;
use SimpleMVC\Controller\ChangeController;
use SimpleMVC\Controller\CreateController;
use SimpleMVC\Controller\DeleteController;
use SimpleMVC\Controller\HomeController;
use SimpleMVC\Controller\InsertController;
use SimpleMVC\Controller\LoginController;
use SimpleMVC\Controller\LogoutController;
use SimpleMVC\Controller\UpdateController;

return [

    'GET /about' => AboutController::class,

    'GET /admin' => AdminController::class, 

    'GET /update' => ChangeController::class,

    'GET /create' => CreateController::class,  

    'GET /delete' => DeleteController::class,

    'GET /' => HomeController::class, 

    'GET /singola' => HomeController::class, 

    'POST /insert' => InsertController::class,

    'GET /login' => LoginController::class, 

    'POST /login' => LoginController::class, 

    'GET /logout' => LogoutController::class,

    'POST /update' => UpdateController::class,

];



