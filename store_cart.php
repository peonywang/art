<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术商店-购物车</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
	<?php include("top.html") ?>
	<script>$(function () {$(".com-top .nav a[name='store']").addClass('act');})</script>
	<div class="bannerD3">
		<div class="w">
			<a href="index.php">首页</a> - <a href="store.php">艺术商店</a> - <span>购物车</span>
		</div>
    </div>
    <div class="index_main page_main">
    	<div class="w">
    		<!-- 购物车 -->
    		<div class="cartD nr">
    			<h1>购物车</h1>
    			<div class="nopro">
    				<p class="gray">
    					您还没有选购艺术品，马上进入<a href="store.php" class="textback">艺术商店</a>选购吧。
    				</p>
    			</div>
    			<ul class="cartUl">
    				<li class="litit">
    					<span class="d1">商品信息</span>
    					<span class="d2">数量</span>
    					<span class="d3">价格</span>
    					<span class="d4">操作</span>
    				</li>
    				<?php for($i=1;$i<3;$i++){ ?>
	    				<li class="li1">
	    					<div class="orderno">
	    						<label class="check">
	    							<input type="checkbox" name="order">
	    							<span>订单编号 : GFHJY180207001</span>
	    						</label>
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
		    						<span>购买数量 : </span>
	    							<div class="numD">
		    							<img class="icon" name="0" src="store/images/minus.png" alt="减">
			    						<input class="num" type="text" value="1">
			    						<img class="icon" name="1" src="store/images/plus.png" alt="加">
	    							</div>
	    						</div>
	    						<div class="d3">
	    							¥1500
	    						</div>
	    						<div class="d4">
	    							<span class="del">删除</span>
	    						</div>
	    					</div>
	    				</li>
    				<?php } ?>
    			</ul>
    			<div class="selD">
    				<label class="check"><input type="checkbox" name="quanxuan"><span>全选</span></label>
    				<span class="pro">
    					<span>装裱费 : 300元</span>
    					<span>运费 : 100元</span>
    				</span>
    				<select name="" id="">
    					<option value="">满399元减60元</option>
    					<option value="">满599元减150元</option>
    				</select>
    				<div class="right">
    					<span class="s1">总价 : </span>
    					<span class="price">¥1000</span>
    					<a href="store_order.php" class="an right">结算</a>
    				</div>
    			</div>
    		</div>
    		<!-- 精选推荐 -->
	    	<div class="artistD nr">
		    	<div class="recommend" style="padding:0;">
		    		<h3 class="h3_tit">精选推荐</h3>
		    		<ul class="artlistD recommend-right">
	                    <?php for($i=1;$i<5;$i++){ ?>
		    			<li>
		    				<a class="imgD" href="store_details.php">
                                <img src="index/images/pro2.jpg" alt="献给大卫的兔子">
                                <div class="priD">
                                    <p class="price">¥ 8.222</p>
                                    <p class="p2">立即购买</p>
                                </div>
                            </a>
                            <p class="p1">徐洋<?php echo $i; ?></p>
                            <p class="p2">献给大卫的兔子</p>
                            <p class="dis">卡纸，墨水，马克笔，喷漆 21×29cm</p>
                            <p class="dis">
                                <span class="see">2360</span>
                                <span class="favorite">1234</span>
                            </p>
		    			</li>
	                    <?php } ?>
		    		</ul>
		    	</div>
	    	</div>
    	</div>
    </div>
	<?php include("common/bottom/bottom.html") ?>

	<script>
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


	        // 全选
	        var allcheck = $(".selD input[name=quanxuan]");
	        var orderInp = $(".cartUl input[name=order]");
	        allcheck.click(function(){
	        	var _this = $(this);
	        	var _checked = $(this).prop('checked');//判断是否选中
	        	if(_checked){
	        		orderInp.prop('checked',true);
	        		_this.next("span").html("取消");
	        	}else{
	        		orderInp.prop('checked',false);
	        		_this.next("span").html("全选");
	        	}
	        	orderInp.click(function(){
	        		_this.prop('checked',false).next("span").html("全选");
	        	});
	        });
		})
	</script>
</body>
</html>