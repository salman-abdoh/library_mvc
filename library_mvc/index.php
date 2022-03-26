<?php
require_once __DIR__ . '/vendor/autoload.php';

use d\app\system\AppSystem;
use d\app\system\Router;
use d\app\controllers\UsersController;
use d\app\controllers\DetailController;
use d\app\controllers\CkeckoutController;
use d\app\controllers\CateController;
 $system=new AppSystem;

Router::get('/index',[UsersController::class,'show']);
Router::get('/detail',[DetailController::class,'show']);
Router::get('/checkout',[CkeckoutController::class,'show']);
Router::get('/checkout',[CateController::class,'show']);


Router::get('/books',function(){
  echo "books route path";
});

 Router::post('/users',[UsersController::class,'show']);
 $system->start();

