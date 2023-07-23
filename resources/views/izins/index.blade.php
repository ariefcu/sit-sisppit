@extends('layouts.app')
@section('content')
<div class="row">
    {{-- <div class="col-lg-12 margin-tb"> --}}
    <div class="col-12 margin-tb">
        <div class="pull-left">
            <h2>Izin Management</h2>
        </div>
        <div class="pull-right">
            @can('izin-create')
            <a class="btn btn-success" href="/izins/create">Create New Izin</a>
            @endcan
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Santri</th>
        {{-- <th>Kelas</th> --}}
        <th>Kls</th>
        <th>Kls Prll</th>
        {{-- <th>Nomor Sakan</th> --}}
        <th>Skn</th>
        {{-- <th>Tanggal Keluar</th>
        <th>Tanggal Masuk</th>
        <th>Nama Penjemput</th>
        <th>Hubungan Keluarga</th>
        <th>Nomor Hp Penjemput</th>
        <th>Keperluan Izin</th>
        <th>Status Izin</th> --}}
        {{-- <th width="280px">Action</th> --}}
        <th width="10px">Action</th>
    </tr>
    @foreach ($izins as $izin)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $izin->nama_santri }}</td>
        <td>{{ $izin->kelas }}</td>
        <td>{{ $izin->kelas_paralel }}</td>
        <td>{{ $izin->nomor_sakan }}</td>
        {{-- <td>{{ $izin->tanggal_keluar }}</td>
        <td>{{ $izin->tanggal_masuk }}</td>
        <td>{{ $izin->nama_penjemput }}</td>
        <td>{{ $izin->hubungan_keluarga }}</td>
        <td>{{ $izin->nomor_hp_penjemput }}</td>
        <td>{{ $izin->keperluan }}</td>
        <td>{{ $izin->status_izin }}</td> --}}
        <td>
            <form action="{{ route('izins.destroy',$izin->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('izins.show', $izin->id) }}">Show</a>
                @can('izin-edit')
                <a class="btn btn-primary" href="{{ route('izins.edit', $izin->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('izin-delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{-- {!! $izins->links() !!} --}}
<p class="text-center text-primary"><small>SISPPIT</small></p>
@endsection
