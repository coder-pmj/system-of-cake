<?php
	session_start();
	
	?>
<!DOCTYPE html>
<html>
<head>
<title>single</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript">addEventListener("load", function() {
	setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
	window.scrollTo(0, 1);
}</script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- js -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<script src="js/imagezoom.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>// Can also be used with $(document).ready()
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});
});</script>


<!--//FlexSlider -->
</head>
<body>
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
					<h1 class="navbar-brand"><a  href="index.php">Yummy</a></h1>
				</div>
				<!--navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="active">首页</a></li>
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
						</li>								
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
						if (!file_exists("count.txt")) {
							$one_file = fopen("count.txt", "w+");
							//建立一个统计文本，如果不存在就创建
							//在.fangkeliang显示访问量
							echo "    <script>
                        $(function() {
                        $('.fangkeliang').html('访问量：'+'$newnum')
                        })
                        </script>";
							//首次直接输出第一次
							fwrite("count.txt", "1");
							//把数字1写入文本
							fclose("$one_file");
						} else {//如果不是第一次访问直接读取内容，并+1,写入更新后再显示新的访客数
							$num = file_get_contents("count.txt");
							$num++;
							file_put_contents("count.txt", "$num");
							$newnum = file_get_contents("count.txt");
							echo "
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
										//累加购物车总金额
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
	<!--//single-page-->
	
	
	<div class="single">
		<div class="container">
			<div class="single-grids">				
				<div class="col-md-4 single-grid">		
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/2.png" class="li">
								<div class="thumb-image"> <img src="images/2.png" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<!--<li data-thumb="images/2.png" class="li">
								 <div class="thumb-image"> <img src="images/2.png" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/2.png"  class="li">
							   <div class="thumb-image"> <img src="images/2.png" data-imagezoom="true" class="img-responsive"> </div>
							</li> -->
						</ul>
					</div>
				</div>	
				<div class="col-md-4 single-grid simpleCart_shelfItem">		
					<h3 id="h3">三层玫瑰奶油蛋糕</h3>
					<p>切蛋糕是庆祝时刻的最佳方式之一，还有什么比吃一块美味可口、令人垂涎欲滴的巧克力蛋糕更好的庆祝方式呢</p>
					<ul class="size">
						<h3>大小</h3>
							<li><a href="#">1 KG</a></li>
							<li><a href="#">2 KG</a></li>
							<li><a href="#">3 KG</a></li>
							<li><a href="#">4 KG</a></li>
					</ul>
					<ul class="size">
						<h3>层数</h3>
							<li><a href="#">1 层</a></li>
							<li><a href="#">2 层</a></li>
							<li><a href="#">3 层</a></li>
					</ul>
					<div class="galry">
						<div class="prices">
							<h5 class="item_price">$200.00</h5>
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
					<p class="qty"> 数量:  </p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
					<div class="btn_form">
						<a href="#" class="add-cart item_add">加入购物车</a>
					</div>
					<div class="tag">
						<p>类别 : <a href="#"> 蛋糕</a></p>
						
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- collapse -->
	<div class="collpse tabs">
		<div class="container">
			<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  描述
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
                            巧克力蛋糕是一种以巧克力、鸡蛋、面粉为主制成的蛋糕，常见于生日派对及婚礼，是常见的甜品之一。它的种类繁多，
                            适合各年龄段的人食用。巧克力蛋糕起源于墨西哥，盛行于西方国家的巧克力，历来被人们视为“幸福食品”。据美国饮食协会研究表明，巧克力中含多酚物质，
                            该物质在水果、蔬菜、红酒和茶中也都存在，对人体健康有诸多好处
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							 附加信息
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
                            胃功能较弱者少食为好。
                            巧克力中还含有钙、磷、镁、铁、锌和铜等多种矿物质。它们会促进氧在血液中的循环，及时为你补充在运动中消耗的营养物质。
                            制造快乐
                            巧克力是快乐的制造者。大量的科学研究表明，巧克力给人带来好心情是因为巧克力中的苯乙胺可以帮助调节人的情绪。巧克力中还含有丰富的镁元素，镁具有安神和抗忧郁的作用。
                            一块44克重的黑巧克力中，镁的含量约为50.6毫克。
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								推荐理由
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
                            在富含水果、蔬菜和全谷类食物的平衡膳食中，适量地食用巧克力，并保持有规律的运动是一种有利于心脏健康的生活方式。
                            研究者相信，类黄酮物质，这种存在于植物性食物中有益于健康的化合物是促进心脏健康的原因。黄烷醇是类黄酮物质的一个亚类，它在苹果、葡萄、红葡萄酒、茶、某些可可粉和巧克力中的含量十分丰富。由于黄烷醇在加工过程中易被破坏，因此，并不是所有巧克力都含有相同含量的黄烷醇。生产巧克力时必须小心地加工可可豆，
                            才能保存其中的黄烷醇。正在进行的科学研究表明：黄烷醇可以通过多种途径促进心脏健康。
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!--//collapse -->
	<!--related-products-->
	<div class="related-products">
		<div class="container">
			<h3>相关产品</h3>
			<div class="product-model-sec single-product-grids">
				<div class="product-grid single-product">
					<a href="single.php">
					<div class="more-product"><span> </span></div>						
					<div class="product-img b-link-stripe b-animate-go  thickbox">
						<img src="images/m1.png" class="img-responsive" alt="">
						<div class="b-wrapper">
						<h4 class="b-animate b-from-left  b-delay03">							
						<button>详情</button>
						</h4>
						</div>
					</div>
					</a>					
					<div class="product-info simpleCart_shelfItem">
						<div class="product-info-cust prt_name">
							<h4>三层玫瑰奶油蛋糕</h4>								
							<span class="item_price">$200</span>
							<div class="ofr">
							  <p class="pric1"><del>$2300</del></p>
							  <p class="disc">[15% Off]</p>
							</div>
							<div class="clearfix"> </div>
						</div>												
					</div>
				</div>
				<div class="product-grid single-product">
					<a href="single.php">
					<div class="more-product"><span> </span></div>						
					<div class="product-img b-link-stripe b-animate-go  thickbox">
						<img src="images/m2.png" class="img-responsive" alt="">
						<div class="b-wrapper">
						<h4 class="b-animate b-from-left  b-delay03">							
						<button>详情</button>
						</h4>
						</div>
					</div>
					</a>					
					<div class="product-info simpleCart_shelfItem">
						<div class="product-info-cust prt_name">
							<h4>巧克力蛋糕</h4>								
							<span class="item_price">$400</span>
							<div class="ofr">
							  <p class="pric1"><del>$450</del></p>
							  <p class="disc">[15% Off]</p>
							</div>
							<div class="clearfix"> </div>
						</div>												
					</div>
				</div>
				<div class="product-grid single-product">
					<a href="single.php">
					<div class="more-product"><span> </span></div>						
					<div class="product-img b-link-stripe b-animate-go  thickbox">
						<img src="images/m3.png" class="img-responsive" alt="">
						<div class="b-wrapper">
						<h4 class="b-animate b-from-left  b-delay03">							
						<button>详情</button>
						</h4>
						</div>
					</div>
					</a>					
					<div class="product-info simpleCart_shelfItem">
						<div class="product-info-cust prt_name">
							<h4>小清新蛋糕</h4>								
							<span class="item_price">$180</span>
							<div class="ofr">
							  <p class="pric1"><del>$2300</del></p>
							  <p class="disc">[15% Off]</p>
							</div>
							<div class="clearfix"> </div>
						</div>												
					</div>
				</div>
				<div class="product-grid single-product">
					<a href="single.html">
					<div class="more-product"><span> </span></div>						
					<div class="product-img b-link-stripe b-animate-go  thickbox">
						<img src="images/m4.png" class="img-responsive" alt="">
						<div class="b-wrapper">
						<h4 class="b-animate b-from-left  b-delay03">							
						<button>详情</button>
						</h4>
						</div>
					</div>
					</a>					
					<div class="product-info simpleCart_shelfItem">
						<div class="product-info-cust prt_name">
							<h4奥利奥蛋糕</h4>								
							<span class="item_price">$120</span>
							<div class="ofr">
							  <p class="pric1"><del>$2300</del></p>
							  <p class="disc">[15% Off]</p>
							</div>
							<div class="clearfix"> </div>
						</div>												
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--related-products-->
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
	<!--footer-->
	<div class="footer-bottom">
		<div class="container">
			<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
		</div>
	</div>
	<script src="tools/function.js"></script>
	<script src="tools/single2-add.js"></script>
	<script src="tools/login.js"></script>
	<script>
		
		
		
		//用于详情内容显示的是被单击的
		var s=sessionStorage.getItem('pictureUrl')
	document.querySelector('img.img-responsive').setAttribute("src",s)
	    var dh=document.getElementsByTagName('li')
		
		
		for(var i=0;i<dh.length;i++){
			dh[i].setAttribute("data-thumb",s)
		}
		
		
		document.getElementById('h3').innerHTML=sessionStorage.getItem('title')
		document.querySelector('.item_price').innerHTML=sessionStorage.getItem('price')
	//end
	</script>
	
</html>