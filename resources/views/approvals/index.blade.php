@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Approval Management</h2>
        </div>
        {{-- TIDAK ADA CREATE DI APPROVAL --}}
        {{-- <div class="pull-right">
            @can('approval-create')
            <a class="btn btn-success" href="/approvals/create">Create New Approval</a>
            @endcan
        </div> --}}
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
        {{-- <th>Kelas Paralel</th> --}}
        <th>Kls Prll</th>
        {{-- <th>Nomor Sakan</th> --}}
        <th>Sakan</th>
        {{-- <th>Tanggal Keluar</th>
        <th>Tanggal Masuk</th>
        <th>Nama Penjemput</th>
        <th>Hubungan Keluarga</th>
        <th>Nomor Hp Penjemput</th>
        <th>Keperluan Izin</th>
        <th>Status Izin</th> --}}
        <th width="280px">Action</th>
    </tr>
    @foreach ($approvals as $approval)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $approval->nama_santri }}</td>
        <td>{{ $approval->kelas }}</td>
        <td>{{ $approval->kelas_paralel }}</td>
        <td>{{ $approval->nomor_sakan }}</td>
        {{-- <td>{{ $approval->tanggal_keluar }}</td>
        <td>{{ $approval->tanggal_masuk }}</td>
        <td>{{ $approval->nama_penjemput }}</td>
        <td>{{ $approval->hubungan_keluarga }}</td>
        <td>{{ $approval->nomor_hp_penjemput }}</td>
        <td>{{ $approval->keperluan }}</td>
        <td>{{ $approval->status_izin }}</td> --}}
        <td>
            <form action="{{ route('approvals.destroy',$approval->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('approvals.show', $approval->id) }}">Show</a>
                @can('approval-edit')
                <a class="btn btn-primary" href="{{ route('approvals.edit', $approval->id) }}">Approve</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('approval-delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{-- {!! $approvals->links() !!} --}}
<p class="text-center text-primary"><small>SISPPIT</small></p>
@endsection
