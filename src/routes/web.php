<?php
use Illuminate\Support\Facades\Route;
use Pranjal\Contact\Http\Controllers\ContactController;

Route::group(['namespace' => 'Pranjal\contact\Http\Controllers'], function(){
    Route::get('contact',[ContactController::class,'index'])->name('contact');
    Route::post('contact',[ContactController::class,'send']);
});
