<!DOCTYPE html>
<head>
	<?php include("common/meta.html") ?>
    <title>会员中心</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
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
				<h1>会员中心</h1>
				<div class="m_r_main">
					<!-- 快捷入口 -->
					<div class="entry">
						<?php $entry = [
							"待付款" => [
								"href" => "",
								"img" => "member/images/payment.png",
								"no" => 3
							],
							"待收货" => [
								"href" => "",
								"img" => "member/images/receive.png",
								"no" => 0
							],
							"购物车" => [
								"href" => "",
								"img" => "member/images/cart.png",
								"no" => 2
							],
							"代金券" => [
								"href" => "",
								"img" => "member/images/coupon.png",
								"no" => 33
							],
						] ?>
						<?php foreach ($entry as $k => $v) { ?>
						<a href="<?php echo $v['href']; ?>">
							<div class="d1">
								<img src="<?php echo $v['img']; ?>" alt="<?php echo $k; ?>">
								<?php if($v['no']>0){ ?>
									<span class="no"><?php echo $v['no']; ?></span>
								<?php } ?>
							</div>
							<p class="p1"><?php echo $k; ?></p>
						</a>
						<?php } ?>
					</div>
					<!-- 近期订单 -->
					<div class="order_near">
						<h3 class="h3">
							近期订单
							<a class="more" href="">查看全部订单</a>
						</h3>
						<div class="cartD">
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
				    					</div>
				    				</li>
			    				<?php } ?>
			    			</ul>
			    		</div>
					</div>
					<!-- 新建词条 -->
					<div class="my_word">
						<h3 class="h3">
							新建词条
							<a class="more" href="">查看全部词条</a>
						</h3>
						<table class="tab1">
							<tr>
								<th style="min-width: 300px;">词条名称</th>
								<th>浏览次数</th>
								<th>创建日期</th>
								<th>当前状态</th>
								<th width="160">操作</th>
							</tr>
							<tr class="tr1">
								<td class="td1">毕加索</td>
								<td>12354</td>
								<td>2018.5.22</td>
								<td><span class="green">已通过</span></td>
								<td><a href="" class="a1">修改</a></td>
							</tr>
							<tr class="tr1">
								<td class="td1">毕加索</td>
								<td>12354</td>
								<td>2018.5.22</td>
								<td><span class="gray">待审核</span></td>
								<td><a href="" class="a1">删除</a><a href="" class="a1">修改</a></td>
							</tr>
							<tr class="tr1">
								<td class="td1">毕加索</td>
								<td>12354</td>
								<td>2018.5.22</td>
								<td><span class="red">未通过</span></td>
								<td><a href="" class="a1">删除</a><a href="" class="a1">修改</a></td>
							</tr>
							<tr class="tr2">
								<td class="td1 dis" colspan="5">关键词不符合规定,建议您按照示例规范填写内容，以便提高通过审核的几率。</td>
							</tr>
							<tr class="tr1">
								<td class="td1">毕加索</td>
								<td>12354</td>
								<td>2018.5.22</td>
								<td><span class="gray">待审核</span></td>
								<td><a href="" class="a1">删除</a><a href="" class="a1">修改</a></td>
							</tr>
						</table>
					</div>
					<!-- 近期浏览商品 -->
					<div class="goods_near">
						<h3 class="h3">
							近期浏览商品
			    			<div class="right" id="exhibition-pagination"></div>
						</h3>

		                <div class="swiper-container recommend-right" id="swiper-exhibition">
		                    <div class="swiper-wrapper">
		                        <?php for($i=1;$i<13;$i++){ ?>
		                            <div class="swiper-slide">
		                                <a class="imgD" href="store_details1.php">
		                                    <img src="index/images/pro2.jpg" alt="献给大卫的兔子">
		                                    <div class="priD">
		                                        <p class="price">¥ 8.222</p>
		                                        <p class="p2">立即购买</p>
		                                    </div>
		                                </a>
		                                <p class="p1">徐洋<?php echo $i; ?></p>
		                                <p class="p2">献给大卫的兔子</p>
		                            </div>
		                        <?php } ?>
		                    </div>
		                </div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("common/bottom/bottom.html"); ?>
	<script>
		// 精选推荐
        var figures = new Swiper('#swiper-exhibition', {
            loop: true,
            autoplay:true,
            autoHeight: true,
            pagination:{
                el:'#exhibition-pagination',
                clickable :true,
            },
            //网格分布
            slidesPerView:4,
            slidesPerGroup : 4,
			spaceBetween : 50,
        });
		$(function(){
			// 作品数量 加减
			$(".cartD .numD .icon").click(function() {
				var numOb = $(this).siblings('.num');
				var num = numOb.val();
				var fuc = $(this).attr("name");
				if(fuc == 1){
					numOb.val(++num);
				}else{
					if(num>1){
						numOb.val(--num);
					}else{
						numOb.val(1);
					}
				}

			});
			$(".cartD .numD .num").blur(function() {
				if($(this).val()<1){$(this).val(1);}
			});
		})
	</script>
</body>
</html>