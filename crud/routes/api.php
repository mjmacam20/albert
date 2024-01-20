<?php

use App\Http\Controllers\TeachersController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
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

Route::post('student-s',[StudentController::class,'adding']);
Route::put('edit-s',[StudentController::class,'edit']);
Route::delete('delete-s',[StudentController::class,'delete']);
Route::get('view-s', [StudentController::class, 'view']);
/*Route::get('get-s/{id}', [StudentController::class, 'get']);*/

Route::post('teachers-s', [TeachersController::class, 'adding']);
Route::put('edit-t', [TeachersController::class, 'edit']);
Route::delete('delete-t', [TeachersController::class, 'delete']);
Route::get('view-t', [TeachersController::class, 'view']);

