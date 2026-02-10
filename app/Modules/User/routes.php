<?php


Route::prefix('admin')->name('admin.')->middleware('admin')->namespace('App\Modules\User\Controllers\Backend' )->group(function() {

    //List of States & Cities
    Route::get('user/states/list/{country_id}', 'UserController@ajaxStates')->name('user.ajax.state');
    Route::get('user/cities/list/{state_id}', 'UserController@ajaxCities')->name('user.ajax.city');

    Route::get('user/ajax/list', 'UserController@ajaxManageable')->name('user.ajax.manageable');
    Route::get('user/ajax/trashed', 'UserController@ajaxTrashManageable')->name('user.ajax.trash.manageable');

    Route::get('user/delete/{id}', 'UserController@destroy')->name('user.delete');

    Route::get('user/trash/{id}', 'UserController@forceTrash')->name('user.trash');
    Route::get('user/undo/{id}', 'UserController@undo')->name('user.undo');

    //List of Unverified Hospitals
   Route::get('user/hospitals/un-verified/index', 'UserController@getUserUnverifiedHospitalIndex')->name('user.hospital.unverified.index');
   Route::get('user/ajax/hospitals/un-verified/list', 'UserController@ajaxUserUnverifiedHospitalManageable')->name('user.ajax.hospital.unverified.manageable');
   Route::get('user/hospitals/request/{status}/{user_id}', 'UserController@manageableHospitalStatus')->name('user.hospital.managestatus');

    //List of Unverified User
    Route::get('user/un-verified/index', 'UserController@getUserUnverifiedIndex')->name('user.unverified.index');
    Route::get('user/ajax/un-verified/list', 'UserController@ajaxUserUnverifiedManageable')->name('user.ajax.unverified.manageable');
    Route::get('user/resend/{user_id}', 'UserController@resendUserEmail')->name('user.resend.email');

    Route::resource('user', 'UserController');
});

