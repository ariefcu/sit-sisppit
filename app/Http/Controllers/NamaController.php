<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaController extends Controller
{
    public function nama_method_1()
    {
        return "Route::get('/URI_1', [NamaController::class, 'nama_method_1'])->name('nama_route_1');";
    }

    public function nama_method_2()
    {
        return "Route::get('/URI_2/{nama_parameter_2}', [NamaController::class, 'nama_method_2'])->name('nama_route_2');";
    }

    public function nama_method_3()
    {
        return "Route::get('/URI_3/{nama_parameter_3}/nama_sub_route_3', [NamaController::class, 'nama_method_3'])->name('nama_route_3');";
    }

    public function nama_method_4($nama_parameter_4)
    {
        return $nama_parameter_4;
    }

    public function nama_method_5($nama_parameter_5)
    {
        return $nama_parameter_5;
    }

    public function nama_method_6()
    {
        $nama = "Arief Cahyo Utomo";
        return view('nama_view_6', ['nama' => $nama]);
    }

    public function nama_method_7()
    {
        $nama = "Arief Cahyo Utomo";
        $pelajaran = ["Algoritma", "TIK", "B. Inggris"];
        return view('nama_view_7', ['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
