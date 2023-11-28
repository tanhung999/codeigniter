<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News;
use App\Controllers\Admin; // Add this line
use App\Controllers\Pages;
use App\Controllers\User;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Welcome', 'Welcome::index');
$routes->get('/Welcome/view', 'Welcome::view');

$routes->get('news',[News::class,'index']);  
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);


// $routes->get('admin',[Admin::class,'index']);
$routes->get('admin',[Admin::class,'index']);
$routes->get('login',[User::class,'login']);
$routes->get('signup',[User::class,'signup']);
$routes->post('action_login',[User::class,'act_login']);
$routes->post('action_signup',[User::class,'act_sign']);
// // $routes->get('news/(:segment)', [News::class, 'show']); 
// $routes->get('signup', [Auth::class,'signup']);
// $routes->get('login', [Auth::class,'index']);
// $routes->post('do-login', [Auth::class,'doLogin']);
// $routes->post('do-signup', 'AuthController::doRegister');
// $routes->get('logout', 'AuthController::logout');