@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Izin</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('izins.index') }}">Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Nama Santri:</strong>
                {{ $izin->nama_santri }}
            </div>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                <strong>Kelas:</strong>
                {{ $izin->kelas }}
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Kelas Paralel:</strong>
                {{ $izin->kelas_paralel }}
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Nomor Sakan:</strong>
                {{ $izin->nomor_sakan }}
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Tanggal Keluar:</strong>
                {{ $izin->tanggal_keluar }}
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Tanggal Masuk:</strong>
                {{ $izin->tanggal_masuk }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Nama Penjemput:</strong>
                {{ $izin->nama_penjemput }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Hubungan Keluarga:</strong>
                {{ $izin->hubungan_keluarga }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Nomor Hp Penjemput:</strong>
                {{ $izin->nomor_hp_penjemput }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Keperluan Izin:</strong>
                {{ $izin->keperluan }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Status Izin:</strong>
                {{ $izin->status_izin }}
            </div>
        </div>
    </div>
    <p class="text-center text-primary"><small>SISPPIT</small></p>
@endsection
