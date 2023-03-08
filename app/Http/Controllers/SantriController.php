<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{ 
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    function __construct()
    {
        $this->middleware('permission:santri-list|santri-create|santri-edit|santri-delete', ['only' => ['index','show']]);
        $this->middleware('permission:santri-create', ['only' => ['create','store']]);
        $this->middleware('permission:santri-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:santri-delete', ['only' => ['destroy']]);
    }
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $santris = Santri::latest()->paginate(5);
        return view('santris.index',compact('santris'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('santris.create');
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
            'name' => 'required',
            'detail' => 'required',
        ]);
        
        Santri::create($request->all());
        
        return redirect()->route('santris.index')
        ->with('success','Santri created successfully.');
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Santri  $santri
    * @return \Illuminate\Http\Response
    */
    public function show(Santri $santri)
    {
        return view('santris.show',compact('santri'));
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Santri  $santri
    * @return \Illuminate\Http\Response
    */
    public function edit(Santri $santri)
    {
        return view('santris.edit',compact('santri'));
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Santri  $santri
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Santri $santri)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        
        $santri->update($request->all());
        
        return redirect()->route('santris.index')
        ->with('success','Santri updated successfully');
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Santri  $santri
    * @return \Illuminate\Http\Response
    */
    public function destroy(Santri $santri)
    {
        $santri->delete();
        
        return redirect()->route('santris.index')
        ->with('success','Santri deleted successfully');
    }
}
