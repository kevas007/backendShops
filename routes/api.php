<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ShopsProductController;
use App\Models\Shop;
use App\Models\ShopsProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::post('/login', [AuthenticatedSessionController::class, 'create']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/tokens/create', function (Request $request) {
        $token = $request->user()->createToken($request->token_name);
        return [
            'token' => $token->plainTextToken,
            'connection' => Auth::user()
        ];
    });

});


    Route::get('shops', [ShopsProductController::class, 'index']);
