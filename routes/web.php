<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "welcome");

Route::get("/about", function() {
    return view("about");
});

Route::get("/shop", function() {
    return view("shop");
});

Route::get("/contact", function() {
    return view("contact");
});
