<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\APIExampleController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('api-test', function() {
    $data = [];
    $data['todo'] = [
        [
            'title' => 'title 1',
            'description' => 'description 1',
            'page' => 1,
        ],[
            'title' => 'title 2',
            'description' => 'description 2',
        ]
    ];
    $data['title'] = 'My awesome title';

    return response()->json($data);
});

Route::post('api-test-post', function(Request $request) {
    $user = new User();
    $user->name = $request['name'];

    return response()->json($user);
});

Route::post('login', [APIExampleController::class, 'login']);
Route::post('check-token', [APIExampleController::class, 'checkToken']);
Route::post('logout', [APIExampleController::class, 'logout']);

