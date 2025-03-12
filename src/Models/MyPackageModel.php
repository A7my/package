<?php

namespace MyVendor\MyPackage\Models;

use Illuminate\Database\Eloquent\Model;

class MyPackageModel extends Model
{
    protected $table = 'mypackage_table';
    protected $fillable = ['name', 'description'];
}
