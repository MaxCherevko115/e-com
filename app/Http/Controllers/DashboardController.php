<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    function index(): View
    {
        return view('layouts.dashboard.index');
    }
}
