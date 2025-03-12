<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/mypackage-api', function () {
    return Response::json([
        'message' => 'Welcome to MyPackage API',
    ]);
});
