<?php

use Illuminate\Http\Request;

Route::namespace('CustomController')->group(function(){
    Route::apiresource('category','CategoryController');
    Route::apiresource('like','LikeController');
    Route::apiresource('question','QuestionController');
    Route::apiresource('reply','ReplyController');
    Route::apiresource('question/{question}/reply','ReplyController');

    Route::post('/{reply}/like','LikeController@likeReply');
    Route::delete('{reply}/like','LikeController@unLikeReply');

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signUp', 'AuthController@signUp');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
