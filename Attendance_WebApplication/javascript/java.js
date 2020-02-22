var c=!1;

function hideandshow(e) {
  var elem = $(e);
  c ? elem.slideUp(300) : elem.slideDown(300);
  c=!c;
}
function main() {
	var docTop;
	$('.article').scrollTop(200);
	$(document).on('scroll', function() {
		docTop = $(document).scrollTop();
		console.log($(document).scrollTop());
		$('.hero').css({
			"top": -(docTop * 0.2)
		});
	});
}

$(document).ready(main);

$(".log-in").click(function(){
	$(".signIn").addClass("active-dx");
	$(".signUp").addClass("inactive-sx");
	$(".signUp").removeClass("active-sx");
	$(".signIn").removeClass("inactive-dx");
});

$(".back").click(function(){
	$(".signUp").addClass("active-sx");
	$(".signIn").addClass("inactive-dx");
	$(".signIn").removeClass("active-dx");
	$(".signUp").removeClass("inactive-sx");
});
