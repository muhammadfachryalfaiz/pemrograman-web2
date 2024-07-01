<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UnitKerjaController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Unit Kerja',
        ];
        $list_unitkerja = UnitKerja::all();
        View::share($data_layout);
        return view('unitkerja.show', ['list_unitkerja' => $list_unitkerja]);
    }


}
