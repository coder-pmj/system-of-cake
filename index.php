<?php
header("content-type:text/html;charset=utf-8");

	?>

<!DOCTYPE html>
<html>
<head>
<title>Home-未登录</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- js -->
<!--<script src="js/jquery.min.js"></script>-->
<script src="tools/jquery-3.3.1.min.js"></script>

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
                        <form class="navbar-form" method="post" action="search-products.php">
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
                        <form id="loginForm">
                            <fieldset id="body">
                                <fieldset>
                                    <label for="username">用户名</label>
                                    <input type="text" name="username" id="username">
                                </fieldset>
                                <fieldset>
                                    <label for="password">密码</label>
                                    <input type="password" name="password" id="password">
                                </fieldset>
                                <input type="button" id="login" value="登录">
                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>记住密码</i></label>
                            </fieldset>
                            <p>新用户 ? <a class="sign" href="account.html">请注册</a>
                        </form>
                    </div>
                </div>
                <div class="header-right cart">
                    <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                    <div class="cart-box">
                        
                        	<a href="#" id="tip" style="font-size: 16px;">
                                <span> 暂无信息，点我去登录 </span>
                           </a>
                        
                        
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>


    <!--//header-->
	<!--banner-->
	
	<?php  require('handler/mysql-query.php');
	$sql1="select * from productA where id='1'";
	$row1=query($sql1);
	
	$sql2="select * from productA where id='2'";
	$row2=query($sql2);
	
	$sql3="select * from productA where id='3'";
	$row3=query($sql3);
	
	?>
	<div class="banner">
		<div class="container">
			<h2 class="hdng"><?php echo substr($row1['title'], 0,5); ?> <span><?php echo substr($row1['title'], 5,7);?></span> <?php echo substr($row1['title'], 11,12); ?>--></h2>
			<p>我们用心做一个蛋糕只为您的美好体验</p>
			<a href="products-tourist.php">加入购物车</a>
			<div class="banner-text">			
				<img src="<?php echo $row1['picture'] ?>" alt=""/>	
			</div>
		</div>
	</div>			
	<!--//banner-->

	<!--gallery-->
	<div class="gallery">
		<div class="container">
			<div class="gallery-grids">
				<div class="col-md-8 gallery-grid glry-one">
					<a href="products-tourist.php"><img src="<?php echo $row2['picture']; ?>" class="img-responsive" alt=""/>
						<div class="gallery-info">
							<p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
							<a class="shop" href="#">加入购物车</a>
							<div class="clearfix"> </div>
						</div>
					</a>
					<div class="galy-info">
						<p id="title"><?php echo $row2['title']; ?></p>
						<div class="galry">
							<div class="prices">
								<h5 class="item_price"><?php echo $row2['price']; ?></h5>
							</div>
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 gallery-grid glry-two">
					<a href="products-tourist.php"><img src="<?php echo $row3['picture']; ?>" class="img-responsive" alt=""/>
						<div class="gallery-info galrr-info-two">
							<p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</p>
							<a class="shop" href="#">加入购物车</a>
							<div class="clearfix"> </div>
						</div>
					</a>
					<div class="galy-info">
						<p id="title"><?php echo $row3['title']; ?></p>
						<div class="galry">
							<div class="prices">
								<h5 class="item_price"><?php echo $row3['price']; ?></h5>
							</div>
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				
				<?php
				require ('handler/conn.php');

				
									$sql="select id from  productA where id>'3'";
									$result=mysqli_query($conn, $sql);
									$RecordCount=mysqli_num_rows($result);
									//mysqli_free_result($result);
									$result=mysqli_query($conn, "select * from  productA where id>'3'" );
									for ($i=0;
									$i < $RecordCount;
									$i++) {
									$row=mysqli_fetch_assoc($result);

									if($row) {
					?>
				<div class="col-md-3 gallery-grid ">
					<a href="products-tourist.php"><img src="<?php echo $row['picture']; ?>" class="img-responsive" alt="图片"/>
						<div class="gallery-info">
							<p><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>详情</p>
							<a class="shop" href="#">加入购物车</a>
							<div class="clearfix"> </div>
						</div>
					</a>
					<div class="galy-info">
						<p id="title"><?php echo $row['title']; ?></p>
						<div class="galry">
							<div class="prices">
								<h5 class="item_price"><?php echo $row['price']; ?></h5>
							</div>
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>						
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				
				<?php
				}
									}
					?>
				
			</div>	
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
	<script src="tools/function.js"></script><!--必须并且第一引入此文件，其他组件都会用到此函数-->
	
	<script src="tools/login.js"></script>
	<script src="tools/click.js"></script>
	
    <!--end js-->
</body>
</html>