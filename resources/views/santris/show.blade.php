@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Santri</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('santris.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $santri->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $santri->detail }}
        </div>
    </div>
</div>
@endsection
<p class="text-center text-primary"><small>Tutorial by LaravelTuts.com</small></p>
