@extends('layouts.app')

@section('content')
	@foreach($houses as $house)
		{{$house->name}}
        @if(!empty($house->current_points()->score))
		    {{$house->current_points()->score}}
        @endif
	@endforeach
@endsection
