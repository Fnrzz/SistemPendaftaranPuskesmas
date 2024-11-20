<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    //
    public function create(){
        return view('admin.pelayananCreate');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'doktor_name' => 'required'
        ]);

        Pelayanan::create([
            'name' => $data['name'],
            'doktor_name' => $data['doktor_name']
        ]);

        return redirect('/admin/pelayanan');
    }

    public function edit($id){
        $data = Pelayanan::find($id);
        return view('admin.pelayananEdit',compact('data'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required',
            'doktor_name' => 'required'
        ]);

        $pelayanan = Pelayanan::find($id);

        $pelayanan->name = $data['name'];   
        $pelayanan->doktor_name = $data['doktor_name'];
        $pelayanan->save();

        return redirect('/admin/pelayanan');
    }

    public function delete($id){
        $pelayanan = Pelayanan::find($id);
        $pelayanan->delete();
        return redirect('/admin/pelayanan');
    }
}
