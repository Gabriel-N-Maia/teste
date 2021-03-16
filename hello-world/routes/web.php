<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{ProductController};

Route::get('/products', [ProductController::class,'index'])->name('products.index');
//Route::get('products', 'App\Http\Controllers\ProductController@index')->name('products.index');


 Route::get('/login', function () {
    return 'Login';
      })->name('login');


//  Route::middleware([])->group(function (){
    
//     Route::prefix('admin')->group(function () {

//          Route::namespace('App\Http\Controllers\Admin')->group(function () {

//              Route::name('admin.')->group(function () {

//                  Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

//                  Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

//                  Route::get('/produtos', 'TesteController@teste')->name('products');

//                  Route::get('/', function () {
//                      return redirect()->route('admin.dashboard');
//                  })->name('home');
//              });
//          });    
//      });
//  });


//  Route::group([
//      'middleware' => [],
//      'prefix' => 'admin',
//      'namespace' => 'App\Http\Controllers\Admin',
//  ], function () {
    
//  });



// Route::get('redirect3', function () {
//     return redirect()->route('url.name');
// });

// Route::get('/nome_url', function () {
//     return 'Hey hey hey';
// })->name('url.name');


// Route::view('/view','welcome');


// Route::redirect('/redirect1', '/redirect2');

// // Route::get('redirect1', function () {
// //     return redirect('redirect2');
// // });
// //adding shit

// Route::get('redirect2', function () {
//     return 'Redirect02';
// });


// Route::get('/produtos/{idProduct?}/details', function ($idProduct ='') {
//     return "Produto(s) {$idProduct}";
// });

// Route::get('/categoria/{flag}/posts', function ($flag) {
//     return "Posts da categoria: {$flag}";
// });

// Route::get('/categorias/{flag}', function ($flag) {
//     return "Produtos da categoria: {$flag}";
// });

// Route::match(['get','post'],'/match', function () {
//     return 'match';
// });

// Route::any('/any', function () {
//     return 'Any';
// });

// Route::post('/register', function () {
//     return '';
// });

// Route::get('/empresa', function () {
//     return view('site.contact');
// });

// Route::get('/contato', function () {
//     return 'Contato';
// });

// Route::get('/', function () {
//     return view ('welcome');
// });
