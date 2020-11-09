<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_customer';
    protected $keyType = 'varchar';
    public $incrementing = false;
    public $timestamps = false;
    protected $table = "customer";
    protected $fillable = [
        'kode_customer',
        'nama_customer',
        'alamat',
        'hp',	
    ];
    protected $guards = [];
}
