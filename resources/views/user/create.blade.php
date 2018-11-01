<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Gebruiker aanmaken</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('users.index')}}"> Back</a>
        </div>
    </div>
</div>

<form action="{{route('users.store')}}" method="POST" class="form">
    @csrf

    <label for="name">Gebruikersnaam:</label>
    <input name="name" id="name" type="text"><br>

    <label for="password">Wachtwoord:</label>
    <input name="password" id="password" type="password"><br>

    <br><input type="submit" value="Send">
</form>