@extends('layouts.app')

@section('content')
    <div>
        <div>
            <img src="">
        </div>
        <div>
            <form action="{{route('points.store')}}" method="POST" class="form">
                @csrf
                    <button type="submit" name="value" value="10">10</button>
                    <button type="submit" name="value" value="25">25</button>
                    <button type="submit" name="value" value="50">50</button><br>

                    <button type="submit" name="value" value="">-10</button>
                    <button type="submit" name="value" value="">-25</button>
                    <button type="submit" name="value" value="">-50</button><br>

                    <input type="text" name="customValue">
                    <button type="submit">Verzenden</button>
            </form>
        </div>
    </div>
@endsection