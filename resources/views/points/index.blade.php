<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('css/score.css') }}" rel="stylesheet">
	<script type="application/javascript" src="{{asset('js/getScore.js')}}"></script>
    <script type="application/javascript">
	$(function() {
		getScore();
	})
	</script>
</head>
<body>
	<span>
	@foreach($houses as $house)
	<div id="div{{$house->id}}">
		{{$house->name}}<br>
		<div id="score">
        @if(!empty($house->current_points()->score))
		    {{$house->current_points()->score}}
			@else
			0
        @endif
		</div>
		<img src="{{asset('photo/logo'.$house->id.'.png')}}" id="img{{$house->id}}">
	</div>
	@endforeach
	</span>


</body>
</html>
