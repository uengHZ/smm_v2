<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mt extends Model
{
    use HasFactory;
    protected $table = "mt_header";
    protected $fillable = [
        'mt_no', 'mt_date', 'nik', 'amount', 'created_at', 'updated_at'
    ];

    public function scopeKaryawan()
    {
        return DB::table('karyawan')
            ->select('nik', 'nama', 'departemen')
            ->orderBy('nama', 'asc')
            ->get();
    }

    public function scopeItem()
    {
        return DB::table('item')
            ->select('item.item_no', 'item.item', 'item.lokasi', 'item.satuan', 'item.standard_price', 'whinventory.saldo_akhir')
            ->join('whinventory', 'item.item_no', '=', 'whinventory.item_no')
            ->orderBy('item.item', 'asc')
            ->get();
    }
}
