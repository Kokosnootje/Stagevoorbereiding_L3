@extends('layouts.app')

@section('content')
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand">Alle gebruikers </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a class="btn btn-small btn-info" href="{{route('users.create')}}">Maak gebruiker aan</a>
            </ul>
        </nav>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>Naam</td>
                <td>Acties</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>
                        <div class="btn-toolbar" role="toolbar">
                        <form class="btn btn-group mr-2 btn-primary" id="user-show{{$user->id}}" action="{{route('users.show', $user->id)}}">
                            <i class="fas fa-eye fa-lg btn" onclick="document.getElementById('user-show{{$user->id}}').submit();"></i>
                        </form>
                        <form class="btn btn-group mr-3 btn-success" id="user-edit{{$user->id}}" action="{{route('users.edit', $user->id)}}">
                            <i class="fas fa-edit fa-lg btn" onclick="document.getElementById('user-edit{{$user->id}}').submit();"></i>
                        </form>
                        <form class="btn btn-group mr-4 btn-danger" id="user-destroy{{$user->id}}" class="delete" action="{{route('users.destroy', $user->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                                <i class="fas fa-trash-alt fa-lg btn" onclick="if (confirm('Weet je het zeker?')) { document.getElementById('user-destroy{{$user->id}}').submit();}"></i>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
