<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Isabella";
    return view('home.about')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("description", $description)
      ->with("author", $author);
})->name("home.about");
Route::get('/contact', function () {
    $data1 = "Contact - Online Store";
    $data2 = "Contact";
    $email = "appemail@gmail.com";
    $address = "eafit";
    $phoneNumber ="312345378";
    $description = "This is the contact info of the page ...";
    return view('home.contact')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("email", $email)
      ->with("address", $address)
      ->with("phoneNumber", $phoneNumber)
      ->with("description", $description);
})->name("home.about");
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/success', function () {
    return view('product.success');
})->name("product.success");

