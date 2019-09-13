$(document).ready(function(){
	
	$('div.btn_form').click(function(){
		
		//var index = $(this).parents(".product-grid").index()
		
		var price = $('h5.item_price').text()
		var title = $('h3#h3').text()
		var pictureUrl = $('img.img-responsive')[0].src
		var acount=$('input#quantity').val()
		
		
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
