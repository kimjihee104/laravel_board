<?php

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

/* php view 파일(welcome.blade.php)  return
 Route::get('/', function () {
     return veiw('welcome');
 });
*/

/* 문자열 return
 Route::get('/', function () {
     return '<h1>Hello Foo</h1>';
 });
*/

/* url 파라미터 return
Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
});
*/

/* 1) url 파라미터 return 조건 => 숫자, 영어 소문자 , 영어 대문자로 구성된 세자리 글자
Route::pattern('foo','[0-9a-zA-Z]{3}');
Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
});
*/

/* 2) url 파라미터 return 조건 => 숫자, 영어 소문자 , 영어 대문자로 구성된 세자리 글자
Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
})->where('foo','[0-9a-zA-Z]{3}');
*/

/* 라우트에 이름 부여 리디렉션 */
Route::get('/',[
  'as' => 'home', //라우트 이름
  function(){
    return '제 이름은 "home" 입니다.';
  }

]);

Route::get('/home', function () {
    return redirect(route('home'));
});
