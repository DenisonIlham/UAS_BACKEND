<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\Agama;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Agama33Controller extends Controller
{
    public function index33()
    {
        $agama = Agama::all();
        return view('admin.agama', compact('agama'));

        if($agama){
            return ApiFormatter::createApi(200, 'Success',$agama);
        }else{
            return ApiFormatter::createApi(400, 'Failed');
        }
    
    }
    public function create33(Request $request)
    {
        Agama::create(['nama_agama' => $request->agama]);
        return Redirect::back()->with(['agamaadd' => 'Data agama berhasil ditambahkan!']);
    }
    public function edit33($id)
    {
        $agama = Agama::where('id', $id)->get();
        return view('admin.edit_agama', compact('agama'));
    }
    public function update33(Request $request)
    {
        Agama::where('id', $request->id)->update(['nama_agama' => $request->agama]);
        return redirect('/admin33/data-agama33')->with(['agama' => 'Data agama berhasil diupdate!']);
    }
    public function delete33($id)
    {
        Agama::where('id', $id)->delete();
        return Redirect::back()->with(['agamadel' => 'Data agama berhasil dihapus!']);
    }
}