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
            <h2>Gebruiker aanmaken</h2>
        </div>
    </div>
</div>

<form action="{{route('users.store')}}" method="POST" class="form">
    @csrf

    <label for="name">Gebruikersnaam:</label>
    <input name="name" id="name" type="text"><br>

    <label for="password">Wachtwoord:</label>
    <input name="password" id="password" type="password"><br>

    <br><a class="btn btn-primary" href="{{route('users.index')}}">Terug</a>
        <input class="btn btn-primary" type="submit" value="Verstuur">
</form>
@endsection