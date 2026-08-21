web.php

<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

Route::get('/Home', HomeController::class);
Route::prefix('/product')->controller(ProductController::class)->group(function() {
    Route::get('/', 'index'); // <-- Aquí cambiamos '/lista' por '/'
    Route::get('/create', 'create');
    Route::get('/{idproduct}', 'show');
});
