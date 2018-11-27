@extends('layouts.app')

@section('content')
	@foreach($houses as $house)
		{{$house->name}}
		{{dd($house->current_points->score)}}
	@endforeach
@endsection
