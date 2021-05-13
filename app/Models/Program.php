<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function panti()
    {
        return $this->belongsTo(Panti::class);
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }
}
