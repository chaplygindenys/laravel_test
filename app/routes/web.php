<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get(    '/things',     'ThingsControllers@index');
Route::get(    '/things/{id}','ThingsControllers@show');
Route::post(   '/things',     'ThingsControllers@stroe');
Route::put(    '/things',     'ThingsControllers@update');
Route::delete( '/things',     'ThingsControllers@destroy');

Route::get('/js_frameworks/method', 'JSFrameworksController@method')->name( 'js_frameworks.method ');


Route::resources([
    '/js_frameworks'=>'JSFrameworksController',
    '/php_frameworks'=>'PHPFrameworksController'
]);
/*Route::resource('/js_frameworks','JSFrameworksController');
Route::resource('/php_frameworks','PHPFrameworksController');*/



/*
Route::get('/about', function () {
    return "
        <div><h3>About me</h3>
        <a href='" . route('index') . "'>Posts</a>
        </div>
        ";
})->name('about');


Route::group(['prefix'=>'posts','as'=>'posts.'], function () {
    Route::get('/', function () {
        return "
        <div><h3>My posts</h3>
        <a href='" . route('posts.show', ['id' => 1]) . "'>Post1</a>
        <a href='" . route('posts.show', ['id' => 2]) . "'>Post2</a>
        <a href='" . route('posts.show', ['id' => 3]) . "'>Post3</a>
        <a href='" . route('posts.show', ['id' => 4]) . "'>Post4</a>
        </div>
        ";
    })->name('index');


    Route::get('/{id}', function () {
        return "
        <div><h3>My posts</h3>
        <a href='" . route('posts.index') . "'>Posts</a>
        </div>
        ";
    })->name('show');

    Route::post('/', function () {
        return 'My posts';
    });

});*/

/*Route::match(['get', 'post'],'/posts',function (){
    return 'My posts';
});

Route::get('/posts/{id}/comments/{comment?}', function ($id, $comment='all') {
    return 'My posts:'.$id.'Comments:'.$comment;
})->where(['id'=>'[0-9]+','comment'=>'[0-9]+']);*/
