<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $pageType = 'settings';
        return view('settings.index', compact('pageType'));
    }
}
