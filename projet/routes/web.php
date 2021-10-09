<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('./english/index');
// });


// Route::get('/en', function () {
//     return view('./english/index');
// });

// Route::get('/en/presentation', function () {
//     return view('./english/inc/prensentation_inc.blade');
// });




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

 Route::get('/', function () {
         return view('./english/index');
     });
    
    
     Route::get('/en', function () {
         return view('./english/index');
     });



Route::get('/en/pre', function () {
    return view('./english/inc/prensentation_inc');
});


Route::get('/en/marche', function () {
    return view('./english/inc/marche_inc');
});


Route::get('/en/historique', function () {
    return view('./english/inc/historique_inc');
});


Route::get('/en/mot_du_president', function () {
    return view('./english/inc/mot_du_president_inc');
});


Route::get('/en/cooperative', function () {
    return view('./english/inc/cooperative_inc');
});

Route::get('/en/services', function () {
    return view('./english/inc/services_inc');
});

Route::get('/en/contact', function () {
    return view('./english/inc/contact_inc');
});

Route::get('/en/centre_comercial', function () {
    return view('./english/inc/commercial_inc');
});


Route::get('/en/activite', function () {
    return view('./english/inc/activite');
});













// Route::get('/', function () {
//     return view('index');
// });


 Route::get('/index', function () {
     return view('./francais/index');
 });


// Route::get('/en', function () {
//     return view('./english/index');
// });

// Route::get('/en/presentation', function () {
//     return view('./english/presentation');
// });



// Route::get('/en/header', function () {
//     return view('./english/header/header');
// });