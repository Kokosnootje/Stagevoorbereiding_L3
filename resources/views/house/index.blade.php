@extends('layouts.app')

@section('content')

@foreach($houses as $house)
    <div  id="{{$house->id}}">
        <a href="{{route('points.add', $house->id)}}">{{$house->name}}</a>
    </div>
@endforeach

@endsection