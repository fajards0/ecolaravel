<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;
use App\Models\User;
use App\Models\Transaksi;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'address', 'payment_method', 'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }


}
