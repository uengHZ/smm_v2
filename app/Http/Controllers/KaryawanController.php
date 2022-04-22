<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karayawan;
class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        return view('karyawan.index');
    }

    public function get_data(Request $request)
    {
        $data = Karayawan::orderBy('nama', 'asc')->get();
        return response()->json($data);
    }
}
