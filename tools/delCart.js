$(document).ready(function(){
	
	$("a.simpleCart_empty").click(function(){
		$.ajax({
			type:"post",
			url:"handler/del.php",
			success:function(){
				Palert('删除成功',function(){
				history.go(0)	
				})
			}
		});
	})
	
})
