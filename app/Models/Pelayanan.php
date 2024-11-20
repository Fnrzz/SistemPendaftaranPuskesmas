<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    //
    protected $guarded = ['id'];

    public function transaction(){
        return $this->hasMany(Transaksi::class);
    }
}
