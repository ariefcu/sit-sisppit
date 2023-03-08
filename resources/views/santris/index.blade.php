@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Santri</h2>
        </div>
        <div class="pull-right">
            @can('santri-create')
            <a class="btn btn-success" href="{{ route('santris.create') }}"> Create New Santri</a>
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
        <th>Name</th>
        <th>Details</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($santris as $santri)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $santri->name }}</td>
        <td>{{ $santri->detail }}</td>
        <td>
            <form action="{{ route('santris.destroy',$santri->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('santris.show',$santri->id) }}">Show</a>
                @can('santri-edit')
                <a class="btn btn-primary" href="{{ route('santris.edit',$santri->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('santri-delete')
                <button type="submit" class="btn btn-danger">Delete</button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $santris->links() !!}
<p class="text-center text-primary"><small>Tutorial by LaravelTuts.com</small></p>
@endsection
