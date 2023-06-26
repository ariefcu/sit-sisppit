<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\Keperluan;

use Illuminate\Http\Request;

class CreateselectController extends Controller
{
    public function createselect($santri_id)
    {
        return view('izins.createselect',
        [
            'santri' => Santri::find($santri_id),
            'keperluans' => Keperluan::all()
        ]);
    }
}
