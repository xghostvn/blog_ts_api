<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogServiceController;
use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\LazyCollection;
use League\Csv\Writer;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::get("vehicle", [LogServiceController::class, "getRepository"]);

Route::get("testStaticValue", [LogServiceController::class, "testStaticValue"]);


Route::post("todo", [TodoController::class, "create"]);

Route::group(["prefix" => "auth"], function () {
    Route::post("register", [AuthController::class, "register"]);
    Route::post("login", [AuthController::class, "login"]);
});

Route::group(["middleware" => ["access_token_to_response" , "auth.jwt"]], function (){
    Route::get("auth/me", [AuthController::class, "me"]);
});


//Route::get('streamed-download', function () {
//    $logins = LazyCollection::times(1000 * 1000, fn() => [
//        'user_id' => 24,
//        'name' => 'Houdini',
//        'logged_in_at' => now()->toIsoString(),
//    ]);
//
//    return response()->streamDownload(function () use ($logins) {
//        $csvWriter = Writer::createFromFileObject(
//            new SplFileObject('php://output', 'w+')
//        );
//
//        $csvWriter->insertOne(['User ID', 'Name', 'Login Time']);
//
//        $csvWriter->insertAll($logins);
//    }, 'logins.csv');
//});
