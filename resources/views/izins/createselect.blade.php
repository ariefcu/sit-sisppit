@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Izin</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('izins.create') }}">Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('izins.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Nama Santri:</strong>
                <input type="text" name="nama_santri" value="{{ $santri->name }}" class="form-control" placeholder="Nama Santri" readonly>
                <input type="text" name="user_id" value="{{ auth()->user()->id }}" class="form-control" hidden>
            </div>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                <strong>Kelas:</strong>
                <input type="text" name="kelas" value="{{ $santri->kelas }}" class="form-control" placeholder="Kelas" readonly>
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Kelas Paralel:</strong>
                <input type="text" name="kelas_paralel" value="{{ $santri->kelas_paralel }}" class="form-control" placeholder="Kelas Paralel" readonly>
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="form-group">
                <strong>Nomor Sakan:</strong>
                <input type="text" name="nomor_sakan" value="{{ $santri->nomor_sakan }}" class="form-control" placeholder="Nomor Sakan" readonly>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Tanggal Keluar:</strong>
                <input type="datetime-local" name="tanggal_keluar" value="{{ old('tanggal_keluar') }}" class="form-control" placeholder="YYYY-MM-DD HH:MM:DD">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Tanggal Masuk:</strong>
                <input type="datetime-local" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" class="form-control" placeholder="YYYY-MM-DD HH:MM:DD">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Nama Penjemput:</strong>
                <input type="text" name="nama_penjemput"value="{{ old('nama_penjemput') }}" class="form-control" placeholder="Nama Penjemput">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Hubungan Keluarga:</strong>
                <input type="text" name="hubungan_keluarga" value="{{ old('hubungan_keluarga') }}" class="form-control" placeholder="Hubungan Keluarga">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Nomor Hp Penjemput:</strong>
                <input type="text" name="nomor_hp_penjemput" value="{{ old('nomor_hp_penjemput') }}" class="form-control" placeholder="Nomor Hp Penjemput">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Keperluan Izin:</strong>
                <select class="form-select" name="keperluan">
                    @foreach ($keperluans as $keperluan)
                    @if(old('keperluan') == $keperluan->name)
                    <option value="{{ $keperluan->name }}" selected>{{ $keperluan->name }}</option>
                    @else
                    <option value="{{ $keperluan->name }}">{{ $keperluan->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Status Izin:</strong> read only
                <input type="text" name="status_izin" value="Menunggu Approval Kesantrian" class="form-control" placeholder="Menunggu Approval Kesantrian" readonly>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<p class="text-center text-primary"><small>SISPPIT</small></p>
@endsection
