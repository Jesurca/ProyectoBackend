web.php

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

Route::get('/Home', HomeController::class);

Route::prefix('/product')->controller(productController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/create',  'create'); 
    Route::get('/{idproduct}','show');
     });

