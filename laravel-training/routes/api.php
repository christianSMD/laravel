<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/test', [Test::class, 'index']);
Route::get('/test/{id}', [Test::class, 'search']);
Route::post('/test', [Test::class, 'store']);
Route::get('delete-test/{id}', [Test::class, 'destroy']);

//Clear route cache:
Route::get('/clear-cache', function() {
	Artisan::call('route:cache');
    return "Routes cache has been cleared, host: ". request()->getHost() . " \n";
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
