<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Module3Controller extends Controller
{
    public function index(){
        $person = Auth::user();
        $module = (object) [
            'mid' => '3',
            'title' => 'Slip Gaji',
            'link'  => '/slip-gaji',
            'icon' => 'feather icon-layout'
        ];
        return view('module3/index',compact('person', 'module'));
    }
}
