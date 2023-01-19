<?php

namespace App\Http\Controllers;
use App\Models\AnggotaEksl;
use App\Models\Ekskul;
use App\Models\Absen;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AbsenControllers extends Controller
{
    public function index()
    {
        $angt = AnggotaEksl::all();
        $eksl = Ekskul::all();
        $absn = Absen::with('anggota', 'ekskul')->latest()->paginate(5);
        return view('absn.index',compact('absn', 'eksl','angt'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        $angt = AnggotaEksl::all();
        $eksl = Ekskul::all();
        return view('absn.create', compact('eksl', 'angt'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodeEkskul'=>'required',
            'nis'=>'required',
            'tglAbsen'=>'required',
            'presensi'=>'required',
            'fotoTimestamp'=>'mimes:jpg,png,jpeg|image',
        ]);
        $file_name = $request->fotoTimestamp->getClientOriginalName();
        $fotoTimestamp = $request->fotoTimestamp->storeAs('fotoTimestamp',$file_name);
        Absen::create([
            'kodeEkskul' => $request->kodeEkskul,
            'nis' => $request->nis,
            'tglAbsen' => $request->tglAbsen,
            'presensi' => $request->presensi,
            'fotoTimestamp' => $fotoTimestamp,
        ]);
        return redirect()->route('absn.index')->with('succes','Data create successfully');
    }

    public function show(Absen $absn)
    {
        $angt = AnggotaEksl::all();
        $eksl = Ekskul::all();
        return view('absn.show', compact('absn','angt', 'eksl'));
    }

    public function edit(Absen $absn)
    {
        $angt = AnggotaEksl::all();
        $eksl = Ekskul::all();
        return view('absn.edit', compact('absn','angt', 'eksl'));
    }

    public function update(Request $request, Absen $absn)
    {
        $request->validate([
            'kodeEkskul'=>'required',
            'nis'=>'required',
            'tglAbsen'=>'required',
            'presensi'=>'required',
            'fotoTimestamp'=>'required',
        ]);
        $absn->update($request->all());
        return redirect()->route('absn.index')->with('succes','Data updated successfully');
    }

    public function destroy(Absen $absn)
    {
        $absn->delete();
        return redirect()->route('absn.index')->with('succes','Data deleted successfully');
    }
}
