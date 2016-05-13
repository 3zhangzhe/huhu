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

Route::get('/', function () {
    return view('welcome');

    // echo Config::get('app.timezone');
    // echo Config::get('app.locale');
    // Config::set('app.timezone','UTC+8');
    // echo Config::get('app.timezone');
    // echo Config::get('app.webname');
});

//基本的路由  http://www.lamp136.com/love/love/love
Route::get('/love/love/', function(){
	echo 'this is love love love';
});

//http://www.lamp136.com/form
// MethodNotAllowedHttpException  如果当前的请求的方式不匹配会报这个错误
Route::post('test', function(){
	echo 'this is a form';
});

//显示一个表单
Route::get('/form', function(){
	return view('form');
});

//带参数的请求
Route::get('/goods/{id}', function($id){
	// echo '商品的详情页';
	//获得参数
	echo $id;
})->where('id','\d+');

//多个参数的传递
Route::get('/goods/list/{name}-{id}', function($name, $id){
	echo $name;
	echo $id;
})->where('id','\d+')
  ->where('name','[a-zA-Z]+');

//别名设置
Route::get('/Admin/user/add',[
	'as' => 'uadd',//路由的别名
	'uses' => function(){
		echo '这是用户的添加页面';
	}
	] );

// Route::get('/test', function(){
// 	//使用别名的方式来创建url
// 	// echo route('uadd');
// 	//跳转404
// 	// abort(404);
// 	// 
// 	// echo csrf_field() ;
// 	echo \App\Http\Middleware\LoginMiddleware::class;
// });

//路由组
Route::group(['middleware' => 'login'], function(){
	Route::get('/admin', function(){
		echo '这里是后台的首页';
	});

	Route::get('/admin/user', function(){
		echo '这里是后台的用户管理页面';
	});

});

//
Route::get('/ajax', function(){
	return view('ajax');
});

//TokenMismatchException 这个错误是告知我们 在post表单请求中没有_token这个字段
Route::post('/post', function(){
	echo '这是一个ajax发送过来的post请求';
});

Route::get('/login', function(){
	echo '这是网站的 登陆页面';
});

//中间件限制
Route::get('/middleware', function(){
	echo '这是中间件的演示';
})->middleware('login');

Route::get('/middle', [
	'middleware' => 'login',
	'uses' => function(){
		echo '这是用户中间件页面';
	}
	]);

//控制器方法路由使用
Route::get('/user/add', 'UserController@add');
Route::get('/user/delete', 'UserController@delete');
Route::post('/user/insert', 'UserController@insert');
Route::get('/user/edit/{id}', 'UserController@edit')->where('id','\d+');
Route::get('/user/index/show', [
	'as'=>'userList',
	'uses' => 'UserController@index'
	])->middleware('login');

//隐式的控制器
Route::controller('/goods', 'GoodsController');

Route::controller('/user', 'UserController');
Route::controller('/post', 'PostController');
Route::controller('/test', 'TestController');
