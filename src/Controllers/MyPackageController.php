<?php

namespace MyVendor\MyPackage\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MyPackageController extends Controller
{
    public function index()
    {
        return view('mypackage::index');
    }
}
