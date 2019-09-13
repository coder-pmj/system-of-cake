$(document).ready(function(){
	
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
		
		open('single2.php')  //显示详情页
		
	})//end  button
	
})