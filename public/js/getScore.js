function getScore(houses){
	$.get('getscore', function(houses){
			$('#score').empty().html(houses);
			var fncGetScore = function() {
				getScore();
			};
			setTimeout(fncGetScore, 5000)
	});
}