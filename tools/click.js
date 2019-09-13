$(document).ready(function() {

	//头部鼠标触发事件  mouse
	$("a#tip").click(function() {
		$("div#loginBox").show()
		$(".cart-box").hide()
	})

	$('.glyphicon-user').mouseenter(function() {
		$('#loginBox').show()
	})

	$('.glyphicon-user').click(function() {
		$('#loginBox').hide()
	})

	$('.glyphicon-search').mouseenter(function() {
		$('#loginBox').hide()
	})
	$('.glyphicon-shopping-cart').mouseenter(function() {
		$('#loginBox').hide()
	})

	$(".glyphicon-shopping-cart").mouseenter(function() {
		$('.cart-box').show()

	})
	$(".cart-box").mouseleave(function() {
		$(this).hide()
	}) //end mouse
	
	
	//监听加入购物车按钮   single 
	$("a.shop").click(function() {
		
		Palert('请先登录',function(){
			$('#loginBox').show()
		})
		
	})
	
	

})