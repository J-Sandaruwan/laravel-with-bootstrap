<?php

/****************************************************************
 *
 * Temp User Service
 *
 * php version 8
 *
 * Okto Zone
 * Bs Project Project
 * SE: Janith Sandaruwan [janith@oktozone.com]
 * Okto Dev
 ****************************************************************/

namespace domain\Facades\Users;

use domain\Services\Users\TempUserService;
use Illuminate\Support\Facades\Facade;

class TempUserFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TempUserService::class;
    }
}
