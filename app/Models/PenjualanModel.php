<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanModel extends Model
{
    use HasFactory;

    protected $table = "penjualan";
    public $timestamps = false;
    protected $fillable = [
        'tgl_faktur',
        'no_faktur',
        'kode_customer',
        'kode_barang',
        'jumlah',
        'harga_satuan',
        'harga_total',	
    ];
    protected $guards = [];

    public function customer()
    {
        return $this->belongsTo(CustomerModel::class, 'kode_customer', 'kode_customer');
    }

    public function barang()
    {
        return $this->belongsTo(BarangModel::class, 'kode_barang', 'kode_barang');
    }
}
