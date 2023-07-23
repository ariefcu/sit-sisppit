<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Santri;
use App\Models\Keperluan;
use Illuminate\Http\Request;

class IzinController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    function __construct()
    {
        $this->middleware('permission:izin-list|izin-create|izin-edit|izin-delete', ['only' => ['index','show']]);
        $this->middleware('permission:izin-create', ['only' => ['create','store']]);
        $this->middleware('permission:izin-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:izin-delete', ['only' => ['destroy']]);
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        // $izins = Izin::latest()->paginate(5);
        // return view('izins.index',compact('izins'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('izins.index', [
            'izins' => Izin::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('izins.create', [
            'santris' => Santri::where('user_id', auth()->user()->id)->get()
            // ['id', 'name', 'kelas', 'kelas_paralel', 'nomor_sakan']
        ]);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        request()->validate([
            'nama_santri' => 'required',
            'kelas' => 'required',
            'kelas_paralel' => 'required',
            'nomor_sakan' => 'required',
            'tanggal_keluar' => 'required| after:today',
            'tanggal_masuk' => 'required| after:tanggal_keluar',
            'nama_penjemput' => 'required',
            'hubungan_keluarga' => 'required',
            'nomor_hp_penjemput' => 'required',
            'keperluan' => 'required'
        ]);

        Izin::create($request->all());

        return redirect()->route('izins.index')
        ->with('success','Izin created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Izin  $izin
    * @return \Illuminate\Http\Response
    */
    public function show(Izin $izin)
    {
        return view('izins.show', compact('izin'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Izin  $izin
    * @return \Illuminate\Http\Response
    */
    public function edit(Izin $izin)
    {
        return view('izins.edit',
        [
            'izin' => $izin,
            'keperluans' => Keperluan::all()
        ]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Izin  $izin
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Izin $izin)
    {
        request()->validate([
            'nama_santri' => 'required',
            'kelas' => 'required',
            'kelas_paralel' => 'required',
            'nomor_sakan' => 'required',
            'tanggal_keluar' => 'required| after:today',
            'tanggal_masuk' => 'required| after:tanggal_keluar',
            'nama_penjemput' => 'required',
            'hubungan_keluarga' => 'required',
            'nomor_hp_penjemput' => 'required',
            'keperluan' => 'required'
        ]);

        $izin->update($request->all());

        return redirect()->route('izins.index')
        ->with('success','Izin updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Izin  $izin
    * @return \Illuminate\Http\Response
    */
    public function destroy(Izin $izin)
    {
        $izin->delete();

        return redirect()->route('izins.index')
        ->with('success','Izin deleted successfully');
    }
}
