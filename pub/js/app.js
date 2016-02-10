
$(document).ready(function(){
	console.log("ready!");
	$(".form-log").on('submit',function(){
		console.log("click");
		var postData=$(this).serialize();
		var formURL=$(this).attr("action");
		$.ajax({
			url:formURL,
			data:postData,
			method:'post',
			dataType:'json',
			beforeSend:function(){
				loading_trans();
			},
			success:function(resp){
				console.log(resp);
				if(resp.redir===(window.location.pathname+'dashboard')){
					show_msg_trans('Login ok');
				}else{
					show_mesg('Usuari inexistent');
				}
				window.location.href=resp.redir;
			}
		)};
		return false;
	});
});