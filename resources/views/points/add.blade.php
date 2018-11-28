@extends('layouts.app')

@section('content')
    <div>
        <script type="application/javascript">
            $(document).ready(function() {
                $(window).keydown(function(event){
                    if(event.keyCode == 13) {
                        event.preventDefault();
                        return false;
                    }
                });
            });
        </script>
        <br />
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h3>Errors: </h3>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('points.store', $house->id)}}" method="POST" class="form">
                @csrf
                    <button type="submit" name="value" value="10">10</button>
                    <button type="submit" name="value" value="25">25</button>
                    <button type="submit" name="value" value="50">50</button><br>

                    <button type="submit" name="value" value="-10">-10</button>
                    <button type="submit" name="value" value="-25">-25</button>
                    <button type="submit" name="value" value="-50">-50</button><br>

                    <input type="text" name="customValue">
                    <button type="submit">Verzenden</button>
            </form>
        </div>
    </div>
@endsection
