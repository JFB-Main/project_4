<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/catalog', function () {
    return view('pages.catalog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/form-preorder', function () {
    return view('pages.form-preorder');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/pc-branch-high', function () {
    return view('pages.pc-branch-high');
});

Route::get('/pc-branch-low', function () {
    return view('pages.pc-branch-low');
});

Route::get('/pc-branch-medium', function () {
    return view('pages.pc-branch-medium');
});

Route::get('/singup', function () {
    return view('pages.singup');
});

Route::get('/testing', function () {
    return view('pages.testing');
});