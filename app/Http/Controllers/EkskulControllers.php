<?php

namespace App\Http\Controllers;
use App\Models\AnggotaEksl;
use App\Models\Ekskul;
use Faker\Calculator\Ean;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class EkskulControllers extends Controller
{
    public function index()
    {
        $angt = AnggotaEksl::all();
        $eksl = Ekskul::latest()->paginate(5);
        return view('eksl.index',compact('eksl'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('eksl.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'kodeEkskul'=>'required',
            'namaEkskul'=>'required',
            'jumlahAnggota'=>'required',
            'namaPembina'=>'required',
            'namaPelatih'=>'required',
        ]);
        Ekskul::create($request->all());
        return redirect()->route('eksl.index')->with('succes','Data create successfully');
    }

    public function show(Ekskul $eksl)
    {
        return view('eksl.show', compact('eksl'));
    }

    public function edit(Ekskul $eksl)
    {
        return view('eksl.edit', compact('eksl'));
    }

    public function update(Request $request, Ekskul $eksl)
    {
        $request->validate([
            'kodeEkskul'=>'required',
            'namaEkskul'=>'required',
            'jumlahAnggota'=>'required',
            'namaPembina'=>'required',
            'namaPelatih'=>'required',
        ]);
        $eksl->update($request->all());
        return redirect()->route('eksl.index')->with('succes','Data updated successfully');
    }

    public function destroy(Ekskul $eksl)
    {
        $eksl->delete();
        return redirect()->route('eksl.index')->with('succes','Data deleted successfully');
    }
}
