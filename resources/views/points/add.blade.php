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
            @if (count($errors) > 0)
                <div class="error">
                    <ul>
                        <li>Er moet een nummer worden ingevoerd</li>
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
