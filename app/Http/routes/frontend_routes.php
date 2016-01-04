<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', array('as'=>'home',function(){
	return View::make('frontend/index');
}));

Route::get('article_list', array('as'=>'article_list',function()
{
	return View::make('frontend/article_list');
}));
