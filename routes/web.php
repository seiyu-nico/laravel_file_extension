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

Route::get('{php_file}', function () {
    echo '<p>localhost/company.phpでアクセスしています。</p>';
})->where('php_file', 'company.php');

Route::get('{html_file}', function () {
    echo '<p>localhost/company.htmlでアクセスしています。</p>';
})->where('html_file', 'company.html');

Route::get('{php_file}', function () {
    echo '<p>localhost/about.phpでアクセスしています。</p>';
})->where('php_file', 'about.php');

Route::get('{html_file}', function () {
    echo '<p>localhost/about.htmlでアクセスしています。</p>';
})->where('html_file', 'about.html');
