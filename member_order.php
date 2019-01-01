<!DOCTYPE html>
<head>
	<?php include("common/meta.html") ?>
    <title>我的订单</title>
    <link rel="stylesheet" type="text/css" href="member/css/member.css">
</head>
<body>
	<?php include("member_top.html"); ?>
	<!-- main -->
	<div class="mem_main">
		<div class="w">
			<!-- mem_left -->
			<?php include("member_left.php"); ?>
			<!-- mem_right -->
			<div class="mem_right nr">
				<h1>我的订单</h1>
				<div class="m_r_main">
					<div class="tag">
						<span class="act">全部订单</span>
						<span>待付款</span>
						<span>待收货</span>
						<span>已完成</span>
					</div>
					<?php for($y=1;$y<5;$y++){ ?>
					<div class="cartD" 
						id="cart<?php echo $y; ?>" 
						<?php if($y>1){ echo "style='display:none;'"; } ?>
					>
		    			<ul class="cartUl">
		    				<li class="litit">
		    					<span class="d1">商品信息</span>
		    					<span class="d2">数量</span>
		    					<span class="d3">价格</span>
		    					<span class="d4">操作</span>
		    				</li>
		    				<?php for($i=1;$i<4;$i++){ ?>
			    				<li class="li1">
			    					<div class="orderno">
			    						<label class="check">
			    							<input type="checkbox" checked="checked">
			    							<span>订单编号 : GFHJY180207001</span>
			    						</label>
			    						<span class="right">2018.5.22</span>
			    					</div>
			    					<div class="ordernr">
			    						<div class="d1">
			    							<div class="imgD">
			    								<img src="store/images/img2.jpg" alt="">
			    							</div>
			    							<div class="imgDis">
			    								<div class="tit">何家英《舞之憩》</div>
			    								<p class="dis">
			    									<span>高仿</span>
							    					<span>作者授权</span>
							    					<span>无装裱</span>
							    					<span>可量产</span>
			    								</p>
			    								<p class="pro_inf">
			    									<span>打印尺寸 : 41X30cm</span>
			    									<span>打印类型 : 优质打印 </span>
			    									<span>画框装裱 : 黑色细框</span>
			    									<span>卡纸选择 : 无卡纸</span>
			    								</p>
			    							</div>
			    						</div>
			    						<div class="d2 numD">
			    							<div class="numD">
				    							<img class="icon" name="0" src="store/images/minus.png" alt="减">
					    						<input class="num" type="text" value="1">
					    						<img class="icon" name="1" src="store/images/plus.png" alt="加">
			    							</div>
			    						</div>
			    						<div class="d3">
			    							¥1500
			    						</div>
			    						<?php if($y==1){ ?>
				    						<?php if($i==1){ ?>
					    						<div class="d4">
					    							<p>完成</p>
					    						</div>
				    						<?php }elseif($i==2){ ?>
					    						<div class="d4">
					    							<a href="" class="an a2">立即付款</a>
					    							<a href="" class="a1">取消订单</a>
					    							<p>15分钟内未支付<br>系统将自动取消订单</p>
					    						</div>
				    						<?php }elseif($i==3){ ?>
					    						<div class="d4">
					    							<a href="" class="an a3">确认收货</a>
					    							<p>还剩8天8时</p>
					    						</div>
					    					<?php } ?>
			    						<?php }elseif($y==2){ ?>
					    						<div class="d4">
					    							<a href="" class="an a2">立即付款</a>
					    							<a href="" class="a1">取消订单</a>
					    							<p>15分钟内未支付<br>系统将自动取消订单</p>
					    						</div>
			    						<?php }elseif($y==3){ ?>
					    						<div class="d4">
					    							<a href="" class="an a3">确认收货</a>
					    							<p>还剩8天8时</p>
					    						</div>
			    						<?php }elseif($y==4){ ?>
					    						<div class="d4">
					    							<p>完成</p>
					    						</div>
			    						<?php } ?>
			    					</div>
			    				</li>
		    				<?php } ?>
		    			</ul>
		    			<div class="moreD" style="margin-top: 60px;">
		    				<a href="" class="an">加载更多</a>
		    			</div>
		    		</div>
			    	<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php include("common/bottom/bottom.html"); ?>
	<script>
		$(function () {
			// 切换
			$(".tag span").click(function(){
				if($(this).not(".act")){
					$(this).addClass('act').siblings('.act').removeClass('act');
					var _index = $(this).index();
					var objId = "#cart"+(_index+1);
					$(objId).show().siblings('.cartD').hide();
				}
			})
		})
	</script>
</body>
</html>