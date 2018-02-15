$(function(){

	$(document).on("click","#shuffle",function(){

		$.get("do_reshuffle",function(data){

			data = $(data);

			// console.log(data.eq(2).html());

			var deck2 = data.eq(0).find('#shuffled_deck');
			var deck3 = data.eq(2).find('#new_deck');

			$('#shuffled_deck').html(deck2.html());
			$('#new_deck').html(deck3.html());

		});

	});

});
