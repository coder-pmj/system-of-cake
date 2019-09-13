
$(document).ready(function() {

	//监听加入购物车按钮   single
	$("a.shop").click(function() {

		//获取元素下标
		var index = $(this).parents(".gallery-grid").index()

		//获取点击元素对应的属性，如price
		var price = $('h5.item_price').eq(index).text()
		var title = $('p#title').eq(index).text()
		var pictureUrl = $('img')[index + 1].src

		//console.log(price+title+pictureUrl)
		$.ajax({
			type: "post",
			url: "handler/single-handler.php",
			data: {
				'price': price,
				'title': title,
				'picture': pictureUrl
			},
			success: function(d) {
				d = JSON.parse(d)

				if(d[0] == '2') {
					Palert('已加至购物车', function() {
						history.go(0)
					})

				} else if(d[0] == '1') {
					Palert('购物车已存在此商品', function() {
						history.go(0)
					})
				}
			}
		});

	})//end single
     

	

	//正则匹配,用来判断邮箱输入格式   email
	var ext = /^[A-Za-z1-9]+\@[a-z]+\.[a-z]+/

	$("input[type=submit]").click(function() {

		var txt = $('input.text').val()

		if(!txt.match(ext)) {

			alert('邮箱格式不正确')

		} else {

			//这里写将邮箱保存至数据库的代码，这里用alert()代替，也可以不做此功能
			alert('订阅成功')
		}

	})//end email
	
	
	
	//实时更新购物车总金额  total
	/*
	var prices = 0
	var uls = $('#list-cont ul').length; //每一行
	*/
	//end  total*/
	
	
	//详情按钮监听  button
	$('button#product').click(function(){
		
		var index = $(this).parents(".product-grid").index()
		var title=$('h4#title').eq(index).text()
		var price=$('span.item_price').eq(index).text()
		var pictureUrl = $('img')[index].src
		/*open('single.php')*/
		//alert(title+price+pictureUrl)
		
		
		sessionStorage.setItem("title",title)
		sessionStorage.setItem("price",price)
		sessionStorage.setItem("pictureUrl",pictureUrl)
		
		open('single.php')  //显示详情页
		
	})//end  button

	
	
	
	//single.php页  add按钮的监听
	
	
	//end add
	
	

})