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
// login page
Route::any('/sys-login', function () {
    return view('studentAffairs.auth.login-page');
});

Route::any('/logins', 'AdminController@login');
Route::any('/forget-pass', 'AdminController@forget_pass');
Route::any('/forget', function(){
    return view('studentAffairs.auth.forgot-pass');

});


// multi language [ar,en]
Route::get('lang/{lang}', function ($lang) {
    if(session()->has('lang')){
        session()->forget('lang');
    }
    session()->put('lang',$lang);
    return back();
})->name('lang');

//, 'AutoCheckPermission'
// all routes for our system.
Route::resource('admins', 'AdminController');

Route::group(['middleware' => 'auth:admin'], function () {

    // welcome page 
    // Route::get('/', function () {
    //     return view('index');
    // });

    Route::get('/', function () {
        return view('index');
    });
    
    
    Route::resource('stage', 'StageController');
    Route::resource('level', 'LevelController');
    Route::resource('class', 'ClassController');

    Route::resource('setting', 'SettingController');
    Route::resource('academicyear', 'AcademicYearController');
    Route::resource('region', 'RegionController');
    Route::resource('place', 'PlaceController');
    Route::resource('nationality', 'NationalityController');

    Route::resource('student', 'StudentController');

    Route::resource('permission', 'PermissionController');

    Route::resource('parent', 'parenttController');


});







Route::resource('revenueitem', 'RevenueItemController');
Route::resource('coursestudent', 'CourseStudentController');
Route::resource('absent', 'AbsentController');
Route::resource('examabsent', 'ExamAbsentController');
Route::resource('control', 'ControlController');
Route::resource('committee', 'CommitteeController');
Route::resource('committestudent', 'CommitteStudentController');
Route::resource('financial', 'FinancialController');
Route::resource('discount', 'DiscountController');
Route::resource('levelstudent', 'LevelStudentController');
Route::resource('category', 'CategoryController');
Route::resource('bus', 'BusController');
Route::resource('busregion', 'BusRegionController');
Route::resource('checkout', 'CheckOutController');
Route::resource('debt', 'DebtController');
Route::resource('approvaldegree', 'ApprovalDegreeController');
Route::resource('bank', 'BankController');
Route::resource('image', 'ImageController');


// for super admin
Auth::routes();
// all routes for our system.
Route::group(['middleware' => 'auth'], function () {
    // setting page 

    Route::get('/super-admin', 'SuperAdminController@all');

    Route::post('/super-admin-data', 'SuperAdminController@Setting');

});
Route::get('/home', 'HomeController@index')->name('home');
