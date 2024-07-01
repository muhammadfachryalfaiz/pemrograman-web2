<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function show(): View{
        return view('dashboard.index');
    }

    public function laporan(): View{
        return view('dashboard.laporan');
    }
}
