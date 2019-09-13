function Palert(title, callback) {
	alert(title)
	callback()
}//这里自定义一个新的弹出框Palert(),以下的弹出都引用此方法,原alert() 不支持回调函数，
   //此方法仅新增为了新增回调函数，目的是为了消息弹出后执行相应的事件
   