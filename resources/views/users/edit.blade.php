@extends('layouts.app')

@section('content')

<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
        </div>
    </nav>

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Wijzig gebruiker</h2>
        </div>
    </div>
</div>

<form action="{{ route('users.update', $user) }}" method="POST">
    <input type="hidden" value="PUT" name="_method" />
    @csrf

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" name="name" id='name' value="{{$user->name}}" class="form-control"><br>
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id='password'  class="form-control"><br>
                <label for="house">Gekoppeld Huis:</label>
                <div class="form-check">
                    @foreach($houses as $house)
                        @if($house->professor_id == $user->id)
                            <label class="form-check-label">
                                <input class="form-check-input" name="houses[]" id="houses{{$house->id}}" type="checkbox" value="{{$house->id}}" checked>{{$house->name}}
                            </label><br>
                        @else
                            <label class="form-check-label">
                                <input class="form-check-input" name="houses[]" id="houses{{$house->id}}" type="checkbox" value="{{$house->id}}">{{$house->name}}
                            </label><br>
                        @endif
                    @endforeach
                </div><br>
            </div>

            <div class="col-md-12 text-center">
                <a class="btn btn-primary" href="{{route('users.index')}}">Terug</a>
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </div>
        </div>
    </div>
</form>
</div>

@endsection