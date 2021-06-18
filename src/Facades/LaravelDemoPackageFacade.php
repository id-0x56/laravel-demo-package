<?php

namespace id_0x56\LaravelDemoPackage\Facades;

use id_0x56\LaravelDemoPackage\Classes\LaravelDemoPackage;
use Illuminate\Support\Facades\Facade;

class LaravelDemoPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LaravelDemoPackage::class;
    }
}
