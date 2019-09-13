<?php
	
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
<title>cart</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" type="text/css" href="css/newStyle.css"/>
<!-- js -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //js -->	
<!-- cart -->
<script src="js/simpleCart.min.js"> </script>
    <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- cart -->
</head>
<body>
	<!--header-->
    <!--header-->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="navbar-brand"><a  href="index.html">Yummy</a></h1>
                </div>
                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html" class="active">首页</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">生日<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-4">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4>按关系</h4>
                                        <ul class="multi-column-dropdown">
                                            <li><a class="list" href="products.html">朋友</a></li>
                                            <li><a class="list" href="products.html">爱人</a></li>
                                            <li><a class="list" href="products.html">姐妹</a></li>
                                            <li><a class="list" href="products.html">兄弟</a></li>
                                            <li><a class="list" href="products.html">小孩</a></li>
                                            <li><a class="list" href="products.html">父母</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>按风味</h4>
                                        <ul class="multi-column-dropdown">
                                            <li><a class="list" href="products.html">巧克力</a></li>
                                            <li><a class="list" href="products.html">混合水果</a></li>
                                            <li><a class="list" href="products.html">奶油</a></li>
                                            <li><a class="list" href="products.html">草莓</a></li>
                                            <li><a class="list" href="products.html">香草</a></li>
                                            <li><a class="list" href="products.html">鸡蛋蛋糕</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>按主题</h4>
                                        <ul class="multi-column-dropdown">
                                            <li><a class="list" href="products.html">心形</a></li>
                                            <li><a class="list" href="products.html">卡通蛋糕</a></li>
                                            <li><a class="list" href="products.html">2-3层蛋糕</a></li>
                                            <li><a class="list" href="products.html">正方形</a></li>
                                            <li><a class="list" href="products.html">圆形蛋糕</a></li>
                                            <li><a class="list" href="products.html">照片蛋糕</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>按重量</h4>
                                        <ul class="multi-column-dropdown">
                                            <li><a class="list" href="products.html">1 kG</a></li>
                                            <li><a class="list" href="products.html">1.5 kG</a></li>
                                            <li><a class="list" href="products.html">2 kG</a></li>
                                            <li><a class="list" href="products.html">3 kG</a></li>
                                            <li><a class="list" href="products.html">4 kG</a></li>
                                            <li><a class="list" href="products.html">超大</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown grid">
                            <a href="#" class="dropdown-toggle list1" data-toggle="dropdown">婚礼<b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-4">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4>按关系</h4>
                                        <ul class="multi-column-dropdown">
                                            <li><a class="list" href="products.html">朋友</a></li>
                                            <li><a class="list" href="products.html">爱人</a></li>
                                            <li><a class="list" href="products.html">姐妹</a></li>
                                            <li><a class="list" href="products.html">兄弟r</a></li>
                                            <li><a class="list" href="products.html">小孩</a></li>
                                            <li><a class="list" href="products.html">父母</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>按风味</h4>
                                        <ul class="multi-column-dropdown">
                                            <li><a class="list" href="products.html">巧克力</a></li>
                                            <li><a class="list" href="products.html">混合水果</a></li>
                                            <li><a class="list" href="products.html">奶油</a></li>
                                            <li><a class="list" href="products.html">草莓</a></li>
                                            <li><a class="list" href="products.html">香草</a></li>
                                            <li><a class="list" href="products.html">鸡蛋</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>按主题</h4>
                                        <ul class="multi-column-dropdown">
                                            <li><a class="list" href="products.html">心形</a></li>
                                            <li><a class="list" href="products.html">卡通</a></li>
                                            <li><a class="list" href="products.html">2-3层</a></li>
                                            <li><a class="list" href="products.html">正方形</a></li>
                                            <li><a class="list" href="products.html">圆形</a></li>
                                            <li><a class="list" href="products.html">照片蛋糕</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>按重量</h4>
                                        <ul class="multi-column-dropdown">
                                            <li><a class="list" href="products.html">1 kG</a></li>
                                            <li><a class="list" href="products.html">1.5 kG</a></li>
                                            <li><a class="list" href="products.html">2 kG</a></li>
                                            <li><a class="list" href="products.html">3 kG</a></li>
                                            <li><a class="list" href="products.html">4 kG</a></li>
                                            <li><a class="list" href="products.html">超大</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown grid">
                            <a href="#" class="dropdown-toggle list1" data-toggle="dropdown">特别优惠 <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-4">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4>按价格</h4>
                                        <ul class="multi-column-dropdown">
                                            <li><a class="list" href="products.html">50以下</a></li>
                                            <li><a class="list" href="products.html">50——100</a></li>
                                            <li><a class="list" href="products.html">100-150</a></li>
                                            <li><a class="list" href="products.html">150-200</a></li>
                                            <li><a class="list" href="products.html">200以上</a></li>

                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4>按口味</h4>
                                        <ul class="multi-column-dropdown">
                                            <li><a class="list" href="products.html">巧克力</a></li>
                                            <li><a class="list" href="products.html">混合口味</a></li>
                                            <li><a class="list" href="products.html">奶油</a></li>
                                            <li><a class="list" href="products.html">草莓</a></li>
                                            <li><a class="list" href="products.html">香草</a></li>
                                            <li><a class="list" href="products.html">鸡蛋蛋糕</a></li>
                                        </ul>
                                    </div>

                            </ul>

                    </ul>
                    <!--/.navbar-collapse-->
                </div>
                <!--//navbar-header-->
            </nav>
            <div class="header-info">
                <div class="header-right search-box">
                    <a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                    <div class="search">
                        <form class="navbar-form" method="post" action="search-products2.php">
                            <input type="text" class="form-control" name="txt">
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                搜素
                            </button>
                        </form>
                        <a href="##" class="fangkeliang"></a>
                        <?php
                        if(!file_exists("count.txt")){
                            $one_file=fopen("count.txt","w+"); //建立一个统计文本，如果不存在就创建
                            //在.fangkeliang显示访问量
                            echo"    <script>
    $(function() {
      $('.fangkeliang').html('访问量：'+'$newnum')
    })
</script>"; //首次直接输出第一次
                            fwrite("count.txt","1");  //把数字1写入文本
                            fclose("$one_file");
                        }else{ //如果不是第一次访问直接读取内容，并+1,写入更新后再显示新的访客数
                            $num=file_get_contents("count.txt");
                            $num++;
                            file_put_contents("count.txt","$num");
                            $newnum=file_get_contents("count.txt");
                            echo"
    <script>
    $(function() {
      $('.fangkeliang').html('访问量：'+'$newnum')
    })
</script>
    ";

                        }
                        ?>
                    </div>
                </div>
                <div class="header-right login">
                    <a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                    <div id="loginBox">
                        <form id="loginForm1" method="post" action="denglu.php">
                           
                            <p>您好，<?php  echo $_SESSION['user']; ?></p><a class="sign" href="index.php">退出</a>
                        </form>
                    </div>
                </div>
                <div class="header-right cart">
                    <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                    <div class="cart-box">
                        
                        	<a href="#" id="tip" style="font-size: 16px;">
                                                                                   总金额:<span id="total" style="color: red;">
                       <?php
                      require ('handler/conn.php');
					  $allprice=0;
                                    $sqls="select id from  single";
									$results=mysqli_query($conn, $sqls);
									$RecordCounts=mysqli_num_rows($results);
									//mysqli_free_result($result);
									$results=mysqli_query($conn, "select * from  single" );
									for ($i=0;
									$i < $RecordCounts;
									$i++) {
									$rows=mysqli_fetch_assoc($results);

									if($rows) {
							              $arr[]=substr($rows['price'],1)*$rows['acount'];
								
								$allprice+=$arr[$i];
								
						}
						}
						echo  '$'.$allprice.'.00';
						
                          ?>
                                                                                   	</span>(<?php echo $RecordCounts;?>)
                           </a>
                          <p><a href="javascript:;" class="simpleCart_empty">清空购物车</a></p>
                        
                        <div class="clearfix"> </div>
                    </div>
                     
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>


    <!--//header-->
	
	
	
	<div class="gallery">
		<div class="container">
			
				<table class="table table-hover">
			<thead>
				<tr>
					<th>图片</th>
					<th>名称</th>
					<th>价格</th>
					<th>评分</th>
					<th>数量</th>
					<th></th>
					
				</tr>
			</thead>
				
				
				
				<?php
				require ('handler/conn.php');

				
									$sql="select id from  single";
									$result=mysqli_query($conn, $sql);
									$RecordCount=mysqli_num_rows($result);
									//mysqli_free_result($result);
									$result=mysqli_query($conn, "select * from  single" );
									for ($i=0;
									$i < $RecordCount;
									$i++) {
									$row=mysqli_fetch_assoc($result);

									if($row) {
					?>
				
				
			<tbody id="tobody">
				<tr>
					<td><img src="<?php echo $row['picture']; ?>" alt="图片" width='30' height='30'/></td>
					<td class="td2"><?php echo $row['title']; ?></td>
					<td class="td3"><?php echo $row['price']; ?></td>
					<td><div class="rating"><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></div></td>
				    <td style="position: absolute; left: 1035px;"><input type="text" style="width: 5%;text-align: center;cursor: pointer;" id="less" value="-" readonly="readonly"/><input type="text" style="width: 8%; text-align: center;" id="acount" readonly="" value="<?php echo $row['acount']; ?>" /><input type="text" style="width: 5%;text-align: center;cursor: pointer;" id="add" value="+" readonly="readonly"/></td>
				   
				</tr>
				
			</tbody>
		
				
				
				
				<?php
				}
									}
					?>
				</table>
			
		</div>
	</div>
	<!--//gallery-->
	<!--subscribe-->
	<div class="subscribe">
		 <div class="container">
			 <h3>通讯</h3>
			 <form>
				 <input type="text" class="text" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}">
				 <input type="submit" value="订阅">
			 </form>
		 </div>
	</div>
	<!--//subscribe-->
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-2 footer-grid">
					<h4>公司</h4>
					<ul>
						<li><a href="products.php">产品</a></li>
						<li><a href="#">工作地址</a></li>
						<li><a href="#">团队</a></li>
						
						<li><a href="#">经销商</a></li>
					</ul>
				</div>
				<div class="col-md-2 footer-grid">
					<h4>服务</h4>
					<ul>
						<li><a href="#">支持</a></li>
						<li><a href="#">常见问题</a></li>
						<li><a href="#">证书</a></li>
						<li><a href="#">联系我们</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h4>订单和退货</h4>
					<ul>
						<li><a href="#">订单状态</a></li>
						<li><a href="#">送货政策</a></li>
						<li><a href="#">退货政策</a></li>
						<li><a href="#">数字礼品卡</a></li>
					</ul>
				</div>
				<div class="col-md-2 footer-grid">
					<h4>法律</h4>
					<ul>
						<li><a href="#">隐私</a></li>
						<li><a href="#">条款和条件</a></li>
						<li><a href="#">社会责任感</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid icons">
					<h4>联系我们</h4>
					<ul>
						<li><a href="#"><img src="images/i1.png" alt=""/>在脸书上关注我们</a></li>
						<li><a href="#"><img src="images/i2.png" alt=""/>在推特上关注我们</a></li>
						
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->
	<div class="footer-bottom">
		<div class="container">
			<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
		</div>
	</div>
	
	
	<!--引入功能组件-->
	<script src="tools/function.js"></script><!--必须并且第一引入此文件-->
	<script src="tools/cart-handler.js"></script>
	<script src="tools/delCart.js"></script>
	<script src="tools/tools.js"></script>

	
	
    <!--end js-->
</body>
</html>