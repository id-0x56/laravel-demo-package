<?php

namespace id_0x56\LaravelDemoPackage\Classes;

class LaravelDemoPackage
{
    public static function hi()
    {
        return config('demo-package.options.hi') . ' ' . config('demo-package.options.message');
    }
}
