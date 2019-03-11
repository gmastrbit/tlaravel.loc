<?php
/**
 * Created by PhpStorm.
 * User: H_Inc
 * Date: 11.03.2019
 * Time: 15:15
 */

namespace App\Helpers\Contracts;

use Illuminate\Http\Request;
use App\User;

Interface SaveStr{

    public static function save(Request $request, User $user);

    public function checkData($array);

}