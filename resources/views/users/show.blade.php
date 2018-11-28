@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2>Gebruiker info</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Naam:</strong>
                {{$user->name}}
                <br>
                <strong>Huizen:</strong>
                @if (!empty($user->houses))
                    @foreach($user->houses AS $key=>$house)
                        @if($key > 0), @endif {{$house->name}}
                    @endforeach
                @endif
            </div>
        </div>
    </div>

        <a class="btn btn-primary" href="{{route('users.index')}}">Terug</a>

@endsection
