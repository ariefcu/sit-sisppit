@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Approval</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('approvals.index') }}">Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Nama Santri:</strong>
                {{ $approval->nama_santri }}
            </div>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                <strong>Kelas:</strong>
                {{ $approval->kelas }}
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Kelas Paralel:</strong>
                {{ $approval->kelas_paralel }}
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Nomor Sakan:</strong>
                {{ $approval->nomor_sakan }}
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Tanggal Keluar:</strong>
                {{ $approval->tanggal_keluar }}
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Tanggal Masuk:</strong>
                {{ $approval->tanggal_masuk }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Nama Penjemput:</strong>
                {{ $approval->nama_penjemput }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Hubungan Keluarga:</strong>
                {{ $approval->hubungan_keluarga }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Nomor Hp Penjemput:</strong>
                {{ $approval->nomor_hp_penjemput }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Keperluan Izin:</strong>
                {{ $approval->keperluan }}
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Status Iziz:</strong>
                {{ $approval->status_izin }}
            </div>
        </div>
    </div>
    <p class="text-center text-primary"><small>SISPPIT</small></p>
@endsection
