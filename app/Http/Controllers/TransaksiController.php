<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    //
    public function store(Request $request){
        $data = $request->validate([
            'pelayanan_id' => 'required',
            'date' => 'required'
        ]);

        Transaksi::create([
            'pelayanan_id' => $data['pelayanan_id'],
            'user_id' => Auth::user()->id,
            'date' => $data['date']
        ]);

        return redirect()->route('user.riwayat');
    }
}
