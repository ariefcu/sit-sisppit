@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pilih Santri</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('izins.index') }}">Back</a>
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
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Santri</th>
            {{-- <th>Kelas</th> --}}
            <th>Kls</th>
            {{-- <th>Kelas Paralel</th> --}}
            <th>Kls Prll</th>
            {{-- <th>Nomor Sakan</th> --}}
            <th>Skn</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($santris as $santri)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $santri->name }}</td>
            <td>{{ $santri->kelas }}</td>
            <td>{{ $santri->kelas_paralel }}</td>
            <td>{{ $santri->nomor_sakan }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('izins.createselect', $santri->id) }}">Pilih</a>
            </td>
        </tr>
        @endforeach
    </table>
    <p class="text-center text-primary"><small>SISPPIT</small></p>
@endsection
