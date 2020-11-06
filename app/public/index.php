<?php
require_once '../vendor/autoload.php';
use Steampixel\Route;

Route::add('/', function() {
    include '../templates/_index.php';
});

Route::run('/');