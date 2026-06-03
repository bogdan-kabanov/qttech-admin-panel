<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */
    protected $except = [
        'XSRF-TOKEN-AK',
        'XSRF-TOKEN-AD',
        'XSRF-TOKEN-DU',
        'XSRF-TOKEN-PI',
        'XSRF-TOKEN-SB',
        'XSRF-TOKEN-MS',
        'XSRF-TOKEN-AI',
        'XSRF-TOKEN-MI',
    ];
}
