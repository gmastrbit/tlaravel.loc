<?php
/**
 * Created by PhpStorm.
 * User: H_Inc
 * Date: 11.03.2019
 * Time: 18:26
 */

namespace App\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

class SaveStr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'savestr';
    }
}