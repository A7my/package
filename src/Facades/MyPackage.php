<?php

namespace MyVendor\MyPackage\Facades;

use Illuminate\Support\Facades\Facade;

class MyPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mypackage';
    }
}
