<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $guarded = ['id'];

    public function pelayanan(){
        return $this->belongsTo(Pelayanan::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
