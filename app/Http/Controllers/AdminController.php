<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data_layout = [
            'title' => 'Halaman Admin',
        ];
        View::share('$data_layout', $data_layout);
        return view('admin.index', [
            'username' => 'Fachri',
        ]);
    }
}
