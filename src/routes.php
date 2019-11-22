<?php
Route::post('/blacklist', 'Davaramyan\Blacklist\BlacklistController@store');
Route::get('/blacklist', 'Davaramyan\Blacklist\BlacklistController@check');
Route::delete('/blacklist/{email}', 'Davaramyan\Blacklist\BlacklistController@destroy');