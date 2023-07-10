<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Module2Controller extends Controller
{
    public function index(){
        $person = Auth::user();
        $module = (object) [
            'mid' => '2',
            'title' => 'Dashboard',
            'link'  => '/dashboard',
            'icon' => 'feather icon-home'
        ];
        return view('module2/dashboard', compact('person','module'));
    }
}
