<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('css/score.css') }}" rel="stylesheet">
	<script type="application/javascript" src="{{asset('js/getScore.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="application/javascript">
	$(function() {
		getScore();
	})
	</script>
</head>
<body>
	<div id="score">
	</div>
</body>
</html>
