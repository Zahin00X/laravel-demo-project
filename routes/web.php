<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

   Route::get('/', function(){
    return view('welcome');
   });

   Route::get('/pizzas', function(){
      
       $pizza = ['type' => 'Hawaiian',
      'base' => 'cheesy crust',
      'price' => 10 
      ];
       return view('pizzas', $pizza);
    // return 'pizzas';
    // return ['name' => 'veg pizzas', 'base' => 'classic'];

    });