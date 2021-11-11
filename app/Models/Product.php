<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nama_barang'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_products', 'product_id', 'user_id')
             ->withTimestamps()
             ->withPivot('tanggal')
        ;
    }
}
