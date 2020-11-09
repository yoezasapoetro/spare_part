<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianModel extends Model
{
    use HasFactory;

    protected $table = "pembelian";
    public $timestamps = false;
    protected $fillable = [
        'tgl_faktur',
        'no_faktur',
        'nama_supplier',
        'kode_barang',
        'jumlah',
        'harga_satuan',	
    ];
    protected $guards = [];

    public function barang()
    {
        return $this->belongsTo(BarangModel::class, 'kode_barang', 'kode_barang');
    }
}
