<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Auth
Route::prefix('auth')->controller(AuthController::class)->group(
    function () {
        Route::post('/login', 'login')->name('auth.login');
        Route::post('/logout', 'logout')->name('auth.logout');
        Route::middleware('authjwt:api')->group(
            function () {
                Route::post('/refresh', 'refresh')->name('auth.refresh');
                Route::get('/me', 'me')->name('auth.me');
            }
        );
    }
);

// Movies
Route::prefix('movies')->controller(MovieController::class)->middleware('authjwt:api')->group(
    function () {
        Route::middleware('role:admin|client')->group(
            function () {
                Route::get('/', 'index')->name('movies.index');
                Route::get('/{id}', 'show')->name('movies.show');
            }
        );
        Route::middleware('role:admin')->group(
            function () {
                Route::post('/', 'store')->name('movies.store');
                Route::put('/{id}', 'update')->name('movies.update');
                Route::delete('/{id}', 'destroy')->name('movies.destroy');
            }
        );
    }
);
