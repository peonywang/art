$(function(){
	$(".favorite").click(function(){
		if($(this).is(".act")){
			$(this).removeClass("act")
		}else{
			$(this).addClass('act')
		}
	})
})