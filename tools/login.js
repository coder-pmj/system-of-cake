

$(document).ready(function() {

	//监听登录按钮   login
	$("input#login").click(function() {

		var name = $("#username").val()
		var pwd = $("#password").val()

		// console.log(name+pwd)

		$.ajax({
			type: "post",
			url: "denglu.php",
			data: {
				'name': name,
				'pwd': pwd
			},
			success: function(d) {
				d = JSON.parse(d)
				if(d[0] == '1') {
					Palert('登录成功', function() {
						location.href = 'index-logining.php'
					})
				} else if(d[0] == '2') {
					alert('用户名或密码有误')
				}
			}
		});
	}) //end login

})