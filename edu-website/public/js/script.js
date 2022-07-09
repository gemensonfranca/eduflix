$(document).ready(function(){
	$(".bt_new_curso").click(function(event){
		event.preventDefault();
		$(".modal_cdt").fadeIn();
	});
});

$(document).ready(function(){
	$(".fechar").click(function(event){
		event.preventDefault();
		$(".modal_cdt").fadeOut();
	});
});