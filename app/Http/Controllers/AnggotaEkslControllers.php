<?php

namespace App\Http\Controllers;
use App\Models\AnggotaEksl;
use App\Models\Ekskul;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AnggotaEkslControllers extends Controller
{
    public function index()
    {
        $eksl = Ekskul::all();
        $angt = AnggotaEksl::with('ekskul')->latest()->paginate(5);
        return view('angt.index',compact('angt', 'eksl'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        $eksl = Ekskul::all();
        return view('angt.create', compact('eksl'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'kodeEkskul'=>'required',
            'kelas'=>'required',
            'jenis_kelamin'=>'required',
        ]);
        AnggotaEksl::create($request->all());
        return redirect()->route('angt.index')->with('succes','Data create successfully');
    }

    public function show(AnggotaEksl $angt)
    {
        $eksl = Ekskul::all();
        return view('angt.show', compact('angt', 'eksl'));
    }

    public function edit(AnggotaEksl $angt)
    {
        $eksl = Ekskul::all();
        return view('angt.edit', compact('angt', 'eksl'));
    }

    public function update(Request $request, AnggotaEksl $angt)
    {
        $request->validate([
            'nis'=>'required',
            'nama'=>'required',
            'kodeEkskul'=>'required',
            'kelas'=>'required',
            'jenis_kelamin'=>'required',
        ]);
        $angt->update($request->all());
        return redirect()->route('angt.index')->with('succes','Data updated successfully');
    }

    public function destroy(AnggotaEksl $angt)
    {
        $angt->delete();
        return redirect()->route('angt.index')->with('succes','Data deleted successfully');
    }
}
