<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function pelayanan()
    {
        return view('home.pelayanan');
    }


    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function dashboardPelayanan()
    {
        $data = Pelayanan::all();
        return view('user.pelayanan',compact('data'));
    }

    public function dashboardRiwayat()
    { 
        $data = Transaksi::where('user_id',Auth::user()->id)->get();
        return view('user.riwayat',compact('data'));
    }

    public function dashboardRiwayatShow($id)
    {
        $data = Transaksi::find($id);
        return view('user.riwayatShow',compact('data'));
    }
}
