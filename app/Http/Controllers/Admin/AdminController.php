<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        // встановити посередник безпосередньо для потрібного контролера
        $this->middleware('auth');
    }
    
    public function show()
    {
        return view('welcome');
    }
}
