<?php
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'function/main.php';

# GET
Router::url('', 'get', function () { 
    return view('home'); 
});
Router::url('login', 'get', function () { 
    return view('login'); 
});
Router::url('register', 'get', function () {
     return view('register'); 
}); 
Router::url('dashboard', 'get', function () {
     return view('dashboard'); 
}); 

new Router();