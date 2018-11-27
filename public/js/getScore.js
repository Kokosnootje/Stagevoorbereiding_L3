function getScore($houses){
	$.get("{{route('points.index')}}", function($houses){
		console.log($houses);
	});
}
