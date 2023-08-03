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
Route::get('/',function(){
    return view('home');
});
//Route::get('login', 'AuthController@index');
//  Route::post('post-login', 'AuthController@postLogin');
//
//  Route::get('registration', 'AuthController@registration');
//  Route::post('post-registration', 'AuthController@postRegistration');
//  Route::get('logout', 'AuthController@logout');
    

  Route::get('/choose', function (){
      return view('choose_us');
  });
  Route::get('/call_us', function (){
      return view('call_us');
  });
  Route::get('/call_back', function (){
      return view('call_back');
  });
  Route::get('/home', function (){
      return view('home');
  });
Route::post('contact','App\Http\Controllers\UserController@set_contact');
Route::get('trip','App\Http\Controllers\tripController@showUser');
////////////////////////////////////////////////
//editing code

Route::post('/register','App\Http\Controllers\UserController@register')->name('register');
Route::get('/register','App\Http\Controllers\UserController@registerform');
Route::post('/login','App\Http\Controllers\UserController@login')->name('login');
Route::get('/login','App\Http\Controllers\UserController@loginform');
Route::post('/logout','App\Http\Controllers\UserController@logout')->name('logout');

//reset password via email

Route::get('/forget_password', 'App\Http\Controllers\ForgotPasswordController@getEmail')->name('forget_password');
Route::post('/forget_password', 'App\Http\Controllers\ForgotPasswordController@postEmail');
Route::get('/reset_password/{token}', 'App\Http\Controllers\ResetPasswordController@getPassword')->name('reset_password');
Route::post('/reset_password', 'App\Http\Controllers\ResetPasswordController@updatePassword')->name('reset_form');



///////////////////// GOODS for addmin///////////
Route::group(['prefix'=>'Good'],function(){
    Route::get('create','App\Http\Controllers\goodController@create');
    Route::post('store','App\Http\Controllers\goodController@store')->name('good.store');
    Route::get('show','App\Http\Controllers\goodController@show')->name('good.show');
    Route::post('delete','App\Http\Controllers\goodController@delete')->name('good.delete');
});
    //////////////////// goods for user ////////////
    Route::get('/createUser','App\Http\Controllers\goodController@createUser')-> name('createUser');
    Route::post('storeuser','App\Http\Controllers\goodController@storeuser')->name('storeuser');
    Route::get('showuser','App\Http\Controllers\goodController@showuser')->name('showuser');
    


///////////////admin ///////////////////
Route::get('con','App\Http\Controllers\branchController@showUser')->name('user.contact');
Route::get('trip','App\Http\Controllers\tripController@showUser')->name('user.trip');

Route::group(['prefix'=>'Branch'],function(){
    Route::get('create','App\Http\Controllers\branchController@create');
    Route::post('store','App\Http\Controllers\branchController@store')->name('branch.store');
    Route::get('show','App\Http\Controllers\branchController@show')->name('branch.show');
    Route::post('delete','App\Http\Controllers\branchController@delete')->name('branch.delete');
    Route::get('edit/{branch_id}','App\Http\Controllers\branchController@edit')->name('branch.edit');
    Route::post('update','App\Http\Controllers\branchController@update')->name('branch.update');

});

Route::group(['prefix'=>'Role'],function(){
    Route::get('create','App\Http\Controllers\roleController@create');
    Route::post('store','App\Http\Controllers\roleController@store')->name('role.store');
    Route::get('show','App\Http\Controllers\roleController@show')->name('role.show');
    Route::post('delete','App\Http\Controllers\roleController@delete')->name('role.delete');
    Route::get('edit/{role_id}','App\Http\Controllers\roleController@edit')->name('role.edit');
    Route::post('update','App\Http\Controllers\roleController@update')->name('role.update');

});

Route::get('Contact_show','App\Http\Controllers\contactController@show')->name('contact.show');
Route::get('User_show','App\Http\Controllers\usersController@show')->name('user.show');

    Route::group(['prefix'=>'Employee'],function(){
        Route::get('create','App\Http\Controllers\employeeController@create');
        Route::post('store','App\Http\Controllers\employeeController@store')->name('employee.store');
        Route::get('show','App\Http\Controllers\employeeController@show')->name('employee.show');
        Route::post('delete','App\Http\Controllers\employeeController@delete')->name('employee.delete');
        Route::get('edit/{user_id}','App\Http\Controllers\employeeController@edit')->name('employee.edit');
        Route::post('update','App\Http\Controllers\employeeController@update')->name('employee.update');
    });

Route::group(['prefix'=>'Trip'],function(){
    Route::get('create','App\Http\Controllers\tripController@create');
    Route::post('store','App\Http\Controllers\tripController@store')->name('trip.store');
    Route::get('show','App\Http\Controllers\tripController@show')->name('trip.show');
    Route::post('delete','App\Http\Controllers\tripController@delete')->name('trip.delete');
    Route::get('edit/{trip_id}','App\Http\Controllers\tripController@edit')->name('trip.edit');
    Route::post('update','App\Http\Controllers\tripController@update')->name('trip.update');
})
;
Route::group(['prefix'=>'Branch'],function(){
    Route::get('create','App\Http\Controllers\branchController@create');
    Route::post('store','App\Http\Controllers\branchController@store')->name('branch.store');
    Route::get('show','App\Http\Controllers\branchController@show')->name('branch.show');
    Route::post('delete','App\Http\Controllers\branchController@delete')->name('branch.delete');
    Route::get('edit/{branch_id}','App\Http\Controllers\branchController@edit')->name('branch.edit');
    Route::post('update','App\Http\Controllers\branchController@update')->name('branch.update');

});

Route::group(['prefix'=>'Role'],function(){
    Route::get('create','App\Http\Controllers\roleController@create');
    Route::post('store','App\Http\Controllers\roleController@store')->name('role.store');
    Route::get('show','App\Http\Controllers\roleController@show')->name('role.show');
    Route::post('delete','App\Http\Controllers\roleController@delete')->name('role.delete');
    Route::get('edit/{role_id}','App\Http\Controllers\roleController@edit')->name('role.edit');
    Route::post('update','App\Http\Controllers\roleController@update')->name('role.update');

});

Route::get('Contact_show','App\Http\Controllers\contactController@show')->name('contact.show');
Route::get('User_show','App\Http\Controllers\usersController@show')->name('user.show');

    Route::group(['prefix'=>'Employee'],function(){
        Route::get('create','App\Http\Controllers\employeeController@create');
        Route::post('store','App\Http\Controllers\employeeController@store')->name('employee.store');
        Route::get('show','App\Http\Controllers\employeeController@show')->name('employee.show');
        Route::post('delete','App\Http\Controllers\employeeController@delete')->name('employee.delete');
        Route::get('edit/{user_id}','App\Http\Controllers\employeeController@edit')->name('employee.edit');
        Route::post('update','App\Http\Controllers\employeeController@update')->name('employee.update');
    });

Route::group(['prefix'=>'Trip'],function(){
    Route::get('create','App\Http\Controllers\tripController@create');
    Route::post('store','App\Http\Controllers\tripController@store')->name('trip.store');
    Route::get('show','App\Http\Controllers\tripController@show')->name('trip.show');
    Route::post('delete','App\Http\Controllers\tripController@delete')->name('trip.delete');
    Route::get('edit/{trip_id}','App\Http\Controllers\tripController@edit')->name('trip.edit');
    Route::post('update','App\Http\Controllers\tripController@update')->name('trip.update');
})
;
Route::get('has_one','App\Http\Controllers\RelationsController@hasOneRelation');
Route::get('has_one_reverse','App\Http\Controllers\RelationsController@hasOneRelationReverse');
Route::get('where_has','App\Http\Controllers\RelationsController@whereHasRelation');
Route::get('where_doesnot_have','App\Http\Controllers\RelationsController@whereDoesNotHaveRelation');
//Route::get('source/{address_id}','App\Http\Controllers\RelationsController@address');
//Route::get('trip/{address_id}','App\Http\Controllers\RelationsController@trip');
Route::get('branch_has_many','App\Http\Controllers\RelationsController@getBranchEmployees');
//Route::get('branchs','App\Http\Controllers\RelationsController@branchs');
Route::get('employees/{branch_id}','App\Http\Controllers\RelationsController@employee')->name('branch.employee');
Route::get('branches/{branch_id}','App\Http\Controllers\RelationsController@deleteBranch')->name('branchEmployee.delete');
Route::get('emp/{user_id}','App\Http\Controllers\RelationsController@employeeRoles')->name('employee.role');