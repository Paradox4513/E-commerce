<?php

$router = new AltoRouter;

$router->map('GET','/','App\controllers\IndexController@show','home');


//for admin routes
$router->map('GET','/admin','App\controllers\admin\DashboardController@show','admin_dashboard');
$router->map('POST','/admin','App\controllers\admin\DashboardController@get','admin_form');


//products management

$router->map('GET','/admin/product/categories',
'App\controllers\admin\ProductCategoryController@show','product_category');

$router->map('POST','/admin/product/categories',
'App\controllers\admin\ProductCategoryController@store','create_product_category');