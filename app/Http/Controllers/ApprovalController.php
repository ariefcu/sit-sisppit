<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Keperluan;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    function __construct()
    {
        $this->middleware('permission:approval-list|approval-create|approval-edit|approval-delete', ['only' => ['index','show']]);
        $this->middleware('permission:approval-create', ['only' => ['create','store']]);
        $this->middleware('permission:approval-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:approval-delete', ['only' => ['destroy']]);
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('approvals.index', [
            'approvals' => Izin::where('status_izin', "Menunggu Approval Kesantrian")->get()
        ]);
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    // TIDAK ADA CREATE DI APPROVAL
    // public function create()
    // {
    //     return view('approvals.create');
    // }

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

        return redirect()->route('approvals.index')
        ->with('success','Approval created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Izin  $approval
    * @return \Illuminate\Http\Response
    */
    public function show(Izin $approval)
    {
        return view('approvals.show',compact('approval'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Izin  $approval
    * @return \Illuminate\Http\Response
    */
    public function edit(Izin $approval)
    {
        return view('approvals.edit',
        [
            'approval' => $approval,
            'keperluans' => Keperluan::all()
        ]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Izin  $approval
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Izin $approval)
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

        $approval->update($request->all());

        return redirect()->route('approvals.index')
        ->with('success','Approval updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Izin  $approval
    * @return \Illuminate\Http\Response
    */
    public function destroy(Izin $approval)
    {
        $approval->delete();

        return redirect()->route('approvals.index')
        ->with('success','Approval deleted successfully');
    }
}
