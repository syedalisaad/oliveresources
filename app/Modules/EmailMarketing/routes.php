<?php

use App\Modules\EmailMarketing\Controllers\Backend\EmailMarketingController;

Route::prefix('admin')->name('admin.')->middleware('admin')->namespace('App\Modules\EmailMarketing\Controllers\Backend' )->group(function() {
    Route::get('email-marketing/list', 'EmailMarketingController@ajaxManageable')->name('email-marketing.ajax.manageable');
    Route::post('import/email-marketing', [EmailMarketingController::class, 'import'])->name('email-marketing.import');

    Route::get('email-marketing/delete/{id}', 'EmailMarketingController@destroy')->name('email-marketing.delete');
    Route::resource('email-marketing', 'EmailMarketingController', ['except' => ['destroy', 'show']]);
});

Route::prefix('admin')->name('admin.')->middleware('admin')->namespace('App\Modules\EmailMarketing\Controllers\Backend' )->group(function() {
    Route::get('email-template/list', 'EmailTemplateController@ajaxManageable')->name('email-template.ajax.manageable');

    Route::get('email-template/delete/{id}', 'EmailTemplateController@destroy')->name('email-template.delete');
    Route::resource('email-template', 'EmailTemplateController', ['except' => ['destroy', 'show']]);
});

