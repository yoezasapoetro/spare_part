<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_barang';
    protected $keyType = 'varchar';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'harga_jual',
        'harga_beli',
        'satuan',
        'kategori',
        'stok',
    ];
    protected $table = "barang_master";
    protected $guards = [];


}
