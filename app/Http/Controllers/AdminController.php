<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index(){
        $data = Transaksi::all();
        return view('admin.index',compact('data'));
    }

    public function pelayanan(){
        $data = Pelayanan::all();
        return view('admin.pelayanan',compact('data'));
    }

    public function riwayat(){
        $data = Transaksi::all();
        return view('admin.riwayat',compact('data'));
    }

    public function riwayatShow($id){
        $data = Transaksi::find($id);
        return view('admin.riwayatShow',compact('data'));
    }
}
