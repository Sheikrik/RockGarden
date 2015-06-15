$(".box").each(function(i){
	$("#box_" +i).click(function(){
		$("#hidden_" +i).slideToggle(1000);
	});
});