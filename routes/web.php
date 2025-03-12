<?php

use MyVendor\MyPackage\Controllers\MyPackageController;
use Illuminate\Support\Facades\Route;

Route::get('/mypackage', [MyPackageController::class, 'index']);
