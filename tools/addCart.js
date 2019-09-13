$(document).ready(function(){
	
	$('input.item_add').click(function(){
		
		var index = $(this).parents(".product-grid").index()
		
		var price = $('span.item_price').eq(index).text()
		var title = $('h4#title').eq(index).text()
		var pictureUrl = $('img')[index].src
		var acount=$('input.item_quantity').eq(index).val()
		
		
		$.ajax({
			type: "post",
			url: "handler/product-add.php",
			data: {
				'price': price,
				'title': title,
				'picture': pictureUrl,
				'acount':acount
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
		
	})
	
})
