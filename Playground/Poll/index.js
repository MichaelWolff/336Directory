function get_poll(){
	loading();
	$("ul").html("");
	$.ajax({
		type: "POST",
		url: "ajax.php",
		data : "act=getq",
		dataType: "json",
		success: function(response){
			var ans1, ans = "";
			if($(".poll").html().length)
			$(".poll").css("display","none");
			if(response.id){
				$.each(response.answers, function(i,val) {

					ans+='<li class="list-group-item"><div class="radio"><label><input class="rad" type="radio" name="poll_options" id="'+i+'" value="'+i+'"><label for="'+i+'">'+val+'</label></label></div></li>';

				});
				$(".poll").html("");
				$(".question").html(response.question);
				$("ul").append(ans);
			}else{
				$(".next").remove();
				$(".question").html('');
				$(".button").remove();
				$(".poll").fadeIn("slow").html("<span class='err'>OOPS. No more question there! :(</span>");
			}
		}
	});
}

