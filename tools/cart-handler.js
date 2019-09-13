$(document).ready(function(){
	
	
	//定义动态修改数值的函数
	function Aja(acount,title){
  	   $.ajax({
  	   	type:"post",
  	   	url:"handler/change.php",
  	   	data:{'acount':acount,
  	   	'title':title}
  	   });//end
  }
	
	//  '-'按钮
	$("input#less").click(function(){
		
			var index = $(this).parents("#tobody").index()
			var acount=$('input#acount').eq(index-1).val()
			var title=$('td.td2').eq(index-1).text()
			
			
		   if(acount>1){
		   	acount=parseInt(acount)-1
		   	$('input#acount').eq(index-1).val(acount)
		   }
		   
			
		  Aja(acount,title)
		})
	
	
	//  '+'按钮
	$("input#add").click(function(){
		
		
			var index = $(this).parents("#tobody").index()
			var acount=$('input#acount').eq(index-1).val()
			var title=$('td.td2').eq(index-1).text()
			
			   acount=parseInt(acount)+1
			   
			 $('input#acount').eq(index-1).val(acount)
			 
			 Aja(acount,title)
		})

	
})

