<?php

use Illuminate\Http\Request;

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

Route::group(["middleware" => ["auth:api"]], function(){
	/*
    Route::get("users/{id}", function (Request $request) {
	    return $request->user();
	});

    Route::get("users", function () {
	    return \App\User::all();
	});
	*/

    Route::get("users/{user}/roles", "Api\UserController@roles");
    apiCrudvelResources([
        ["permissions"],
        ["roles"],
        ["users"],
        ["ex-lists"],
        ["ex-items"],
    ]);
});