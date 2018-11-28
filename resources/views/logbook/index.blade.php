@extends('layouts.app')

@section('content')
    @foreach($points as $point)
        <table>
            <tr>
                <td>huis</td>
                <td>punten</td>
                <td>gewijzigd op</td>
            </tr>
            <tr>
                <td>{{$point->points_today->house->name}}</td>
                <td>{{$point->change}}</td>
                <td>{{$point->created_at}}</td>
            </tr>
        </table>
    @endforeach
@endsection