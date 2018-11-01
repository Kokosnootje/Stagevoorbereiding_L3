@extends('layouts.app')

@section('content')
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand">Gebruikers</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{route('users.create')}}">Maak gebruiker aan</a>
            </ul>
        </nav>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Naam</td>
                <td>Laat gebruiker zien</td>
                <td>Wijzig gebruiker</td>
                <td>Verwijder gebruiker</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        <form action="{{route('users.show', $user->id)}}">
                            <input class="btn btn-small btn-info" type="submit" value="Show">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('users.edit', $user->id)}}">
                            <input class="btn btn-small btn-info" type="submit" value="Edit">
                        </form>
                    </td>

                    <td>
                        <form action="{{route('users.destroy', $user->id)}}" method="post" onSubmit="return confirmDelete()">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-small btn-info" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
