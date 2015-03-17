<?php

/**
 * The Home Page
 */
Route::get('/', 'PagesController@home');

/**
 * Authentication
 */
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/**
 * Notices
 */
Route::resource('notices', 'NoticesController');
