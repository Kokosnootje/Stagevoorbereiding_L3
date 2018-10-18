<!DOCTYPE html>
<html>
<head>
    <title>User</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $users=> $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>

                <td>
                    <a class="btn btn-small btn-success" href="{{ URL::to('$users/' . $value->id) }}">Show this user</a>
                    <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit this user</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>