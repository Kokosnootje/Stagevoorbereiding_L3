<!DOCTYPE html>
<html>
<head>
    <title>Gebruikers</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
        </div>
    </nav>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Wijzig gebruiker</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('users.index')}}">Terug</a>
        </div>
    </div>
</div>

<form action="{{ route('users.update', $user) }}" method="POST">
    <input type="hidden" value="PUT" name="_method" />
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naam:</strong>
                <input type="text" name="name" id='name' value="{{$user->name}}" class="form-control">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </div>
</form>