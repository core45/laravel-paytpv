<?php

namespace Core45\Paytpv;

use Illuminate\Support\Facades\Facade;

class PaytpvFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'laravel-paytpv';
    }
}
