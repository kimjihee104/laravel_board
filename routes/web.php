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

/* 라우트에 이름 부여 리디렉션
Route::get('/',[
  'as' => 'home', //라우트 이름
  function(){
    return '제 이름은 "home" 입니다.';
  }

]);

Route::get('/home', function () {
    return redirect(route('home'));
});

*/

Route::get('/', function () {
    return view('viewAndDataBinding') -> with('name','Foo');
});

/* 1)배열을 이용하여 여러개의 데이터를 넘기는 방법 (with메서드 체인하여 데이터 바인딩)
Route::get('/', function () {
    return view('viewAndDataBinding') -> with([
      'name' => 'Foo',
      'greeting' => '안녕하세요?',
    ]);
});
*/

/* 2)배열을 이용하여 여러개의 데이터를 넘기는 방법 (view() 함수의 두번째로 인자 넘기기) */
Route::get('/', function () {
    return view('viewAndDataBinding',[
      'name' => 'Foo',
      'greeting' => '안녕하세요?',
    ]);
});
