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
            <a class="navbar-brand" href="">Gebruikers</a>
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
            <td>Opties</td>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>
                    <a class="btn btn-small btn-success" href="{{route('users.show', $u->id)}}">Laat gebruiker zien</a>

                    <a class="btn btn-small btn-info" href="{{route('users.edit', $u->id)}}">Wijzig gebruiker</a>

                    </td>
                <td>
                    <form action="{{route('users.destroy', $u->id)}}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>