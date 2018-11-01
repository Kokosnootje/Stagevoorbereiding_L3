@extends('layouts.app')

@section('content')

<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
        </div>
    </nav>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gebruiker</h2>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naam:</strong>
                {{ $users->name }}
            </div>
        </div>
    </div>

    <div class="pull-left">
        <a class="btn btn-primary" href="{{route('users.index')}}">Terug</a>
    </div>

@endsection
