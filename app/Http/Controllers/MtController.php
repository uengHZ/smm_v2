<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mt;
use App\Models\karayawan;
use App\Models\barang;

class MtController extends Controller
{
    public function index()
    {
        return view('mt.index');
    }

    public function get_data()
    {
        $data = Mt::orderBy('mt_date', 'desc')->get();
        return response()->json($data);
    }

    public function add()
    {
        return view('mt.add');
    }

    public function get_add()
    {
        $karyawan = karayawan::orderBy('nama', 'asc')->get();
        $barang = barang::select('item.item_no','item.item','item.lokasi','item.satuan','item.standard_price','whinventory.saldo_akhir')
                    ->join('whinventory','item.item_no','=','whinventory.item_no')
                    ->orderBy('item.item_no', 'asc')->get();
        $arrData = [
                    'data_k' => $karyawan,
                    'data_b' => $barang
                ];

        return response()->json($arrData);
    }

    public function get_add_karyawan_details($id)
    {
        // dd($id);
        $karyawan = karayawan::where('nik',$id)->first();
        // dd($karyawan);
        return response()->json($karyawan);
    }

    public function get_add_barang_details($id)
    {
        // dd($id);
        $barang = barang::select('item.item_no','item.item','item.lokasi','item.satuan','item.standard_price','whinventory.saldo_akhir')
                    ->join('whinventory','item.item_no','=','whinventory.item_no')
                    ->where('item.item_no',$id)
                    ->orderBy('item.item_no', 'asc')
                    ->first();
        // $barang = barang::where('item_no',$id)->first();
        // dd($karyawan);
        return response()->json($barang);
    }

    public function save($id)
    {
        dd($id);
    }
}

