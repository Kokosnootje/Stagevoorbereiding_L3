@extends('layouts.app')

@section('content')
    @foreach($points as $point)
        <table class="table table-striped table-bordered">
            <tr>
                <td>huis</td>
                <td>punten</td>
                <td>gegeven door</td>
                <td>gewijzigd op</td>
            </tr>
            <tr>
                <td>{{$point->points_today->house->name}}</td>
                <td>{{$point->change}}</td>
                <td>{{$point->user->name}}</td>
                <td>{{$point->created_at}}</td>
            </tr>
        </table>
    @endforeach
@endsection