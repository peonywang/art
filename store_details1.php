<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术商店-详情页1</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
<?php include("top.html") ?>
<script>$(function () {$(".com-top .nav a[name='store']").addClass('act');})</script>

	<div class="bannerD3">
		<div class="w">
			<a href="index.php">首页</a> - <a href="store.php">艺术商店</a> - <a href="store_list.php">水彩画</a> - <span>详情页</span>
		</div>
    </div>
    <div class="index_main page_main">
    	<div class="w">
    		<div class="proD nr">
	    		<!-- 商品详情 -->
	    		<div class="pro">
	    			<div class="pro1">
		    			<div class="pro_left">
		    				<div class="imgD">
		    					<span><img src="store/images/img1.jpg" alt=""></span>
		    				</div>
		    				<div class="zoomImgD">
		    					<div class="zoomBig" style="display: none;"></div>
		    				</div>
		    				<div class="smallD">
		    					<img src="store/images/img1.jpg" alt="">
		    					<img src="store/images/img2.jpg" alt="">
		    					<img src="store/images/img3.jpg" alt="">
		    					<img src="store/images/img4.jpg" alt="">
		    					<img src="store/images/img5.jpg" alt="">
		    				</div>
		    			</div>
		    			<div class="pro_right">
		    				<div class="pro_right_nr">
			    				<h1>何家英《舞之憩》</h1>
			    				<p class="dis">
			    					<span>高仿</span>
			    					<span>作者授权</span>
			    					<span>无装裱</span>
			    					<span>可量产</span>  
			    				</p>
			    				<dl class="pro_inf">
			    					<dt class="chose2dt">打印尺寸<i>:</i></dt>
			    					<?php $chicun = [
			    						"41×30","61×46","81×61","102×76","122×91","142×107"
			    					] ?>
			    					<dd class="chose chose2">
			    						<?php foreach ($chicun as $k => $v) { ?>
				    						<label>
				    							<input type="radio" name="chicun" 
					    							<?php if($k==0){ echo "checked='checked'";} ?>
					    							<?php if($k>3){ echo "disabled class='disabled'";} ?>
				    							>
				    							<span><?php echo $v; ?></span>
				    						</label>
			    						<?php } ?>
			    					</dd>

			    					<dt class="chose2dt">打印类型<i>:</i></dt>
			    					<dd class="chose chose2">
			    						<label><input type="radio" name="dayin" checked="checked"><span>普通打印</span></label>
			    						<label><input type="radio" name="dayin"><span>优质打印</span></label>
			    					</dd>

			    					<dt class="chose1dt">画框装裱<i>:</i></dt>
			    					<?php $huakuang = [
			    						"白色细框" => "baix", "黑色细框" => "heix", "原木细框" => "yuanx", "碳木简约" => "tanj", "金色简约" => "jinj", "金色古典" => "jing", "黑色古典" => "heig", "金色现代" => "jinx"
			    					] ?>
			    					<dd class="chose chose1">
			    						<label><input type="radio" name="mount" checked="checked" value="none"><span>无框</span></label>
			    						<?php foreach ($huakuang as $k => $v) { ?>
				    						<label>
				    							<input type="radio" name="mount" value="<?php echo $v; ?>">
				    							<span>
				    								<img src="store/images/<?php echo $v; ?>.png" alt="<?php echo $k; ?>" title="<?php echo $k; ?>">
				    							</span>
				    						</label>
			    						<?php } ?>
			    					</dd>

			    					<dt class="chose2dt">卡纸选择<i>:</i></dt>
			    					<dd class="chose chose2">
			    						<label><input type="radio" name="cardboard" checked="checked" value="none"><span>无卡纸</span></label>
			    						<label><input type="radio" name="cardboard" value="xiaoka"><span>小号卡纸</span></label>
			    						<label><input type="radio" name="cardboard" value="zhongka"><span>中号卡纸</span></label>
			    					</dd>

			    					<dt class="chose2dt">作品数量<i>:</i></dt>
			    					<dd class="numD">
			    						<img class="icon" name="0" src="store/images/minus.png" alt="减">
			    						<input class="num" type="text" value="1">
			    						<img class="icon" name="1" src="store/images/plus.png" alt="加">
			    					</dd>
			    				</dl>
		    				</div>
		    				<div class="priD">
		    					<span class="price">¥1000</span>
		    					<a href="store_cart.php" class="an right">加入购物车</a>
		    				</div>
		    			</div>
	    			</div>
	    			<div class="pro2">
	    				<span class="share">
		    				123
	        				<div class="shareD">
								<a href="" class="qqweibo" alt="腾讯微博"></a>
								<a href="" class="sina" alt="微博"></a>
								<a href="" class="wechat" alt="微信"></a>
								<a href="" class="qq" alt="QQ"></a>
	        				</div>
		    			</span>
	    				<span class="favorite">321</span>
	    				<span class="right">
	    					<span>装裱费 : 300元</span>
	    					<span>运费 : 100元</span>
	    				</span>
	    			</div>
	    		</div>
	    		<!-- 作品信息 -->
				<div class="eduD intnrD pro_disD" style="margin-bottom: 0;">
					<div class="edu dis_left">
						<h3>作品信息</h3>
						<table class="tab1">
							<tr>
								<td><span class="s1">作品名称</span>： 蓝色波动</td>
								<td><span class="s1">作品类型</span>： 版画</td>
							</tr>
							<tr>
								<td><span class="s1">材质</span>： 黑白木刻版画</td>
								<td><span class="s1">风格</span>： 观念艺术</td>
							</tr>
							<tr>
								<td><span class="s1">作品尺寸</span>： 2017</td>
								<td><span class="s1">题材</span>： 其他</td>
							</tr>
						</table>
						<p>
							田学森：1975年出生，先后学习于山东、上海，游历欧洲，2000年，在北京人民大会堂被文化部和中国文联有关部门授予“世界华人艺术家”称号，2002年在上海刘海粟美术馆举办“田学森作品展”，2004年第十届全国美术展上海展，2005年应邀赴法国参加画展和创作。
						</p>
						<p> 
							2010年在科学会堂举办《行走中国—田学森旅行写生作品展》。2010年后告别城市生活，深入华山，多年来孤单于华山的深谷中，面山作画，写山中纪实文字与体悟，与大自然为友，与天地精神往来，求索艺术与人生的真谛，追寻生命的源头。2016年“华山长卷——田学森七年油画展”在上海展出，备受业界关注。
						</p>
						<p class="cent">
							<img src="store/images/img2.jpg" alt="" class="img100">
							细节概括
						</p>
						<p class="cent">
							<img src="store/images/img3.jpg" alt="" class="img100">
							细节概括
						</p>
						<p class="cent">
							<img src="store/images/img4.jpg" alt="" class="img100">
							细节概括
						</p>
						<p class="cent">
							<img src="store/images/img5.jpg" alt="" class="img100">
							细节概括
						</p>
					</div>
					<div class="barD dis_right">
						<div class="barnr artist_det">
							<p><img src="artist/images/person.jpg" alt="" class="imgPer"></p>
		    				<p><span class="name">朱德群</span></p>
		    				<p>
		    					<a class="view" href="">
			    					<span class="textgray">查看艺术家</span>全部16件<span class="textgray">作品</span>
			    				</a>
			    			</p>
		    				<p><a class="view" href="">查看艺术家百科</a></p>
						</div>
						<div class="barnr recommend">
							<h3>该艺术家精选作品</h3>
							<ul class="artlistD recommend-right">
			                    <?php for($i=1;$i<4;$i++){ ?>
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

    		<!-- 最新作品 -->
	    	<div class="artistD nr">
		    	<div class="recommend" style="padding:0;">
		    		<h3 class="h3_tit">最新作品</h3>
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

	    	<!-- 评论 -->
	    	<div class="nr commentD" style="margin-bottom: 180px;">
	    		<h3 class="h3_tit">
	    			评论
	    			<span class="no">123</span>
	    			<span class="right">文明上网理性发言，请遵守新闻评论服务协议</span>
	    		</h3>
	    		<div class="xs">
	    			<div class="userD">
	    				<img src="common/images/user.jpg" alt="user" class="user">
	    				<p>游客</p>
	    			</div>
	    			<div class="d2">
	    				<textarea name="" id="" rows="5"></textarea>
	    				<p>
	    					<span class="addEmoticon">添加表情</span>
	    					<a class="right login" href="admin/login.php">登录</a>
	    				</p>
	    			</div>
	    		</div>
	    		<h3 class="h3_tit">
		    		评论
		    		<div class="right">
			    		<span class="sort act">最新</span>
			    		<span class="sort">最热</span>
		    		</div>
		    	</h3>
	    		<ul class="commentList">
	    			<?php for($i=1;$i<4;$i++){ ?>
		    			<li class="xs">
		    				<div class="userD"><img src="common/images/user.jpg" alt="user" class="user"></div>
		    				<div class="d2">
		    					<p class="p1">
		    						<b class="name">阿拉法特-呼哈</b>
		    						<span class="right"><?php echo $i; ?>楼</span>
		    					</p>
		    					<p class="p2">
		    						以上内容完整详细，感谢楼主分享。
		    					</p>
		    					<p class="p3">
		    						<span class="time">2018-5-8</span>
		    						<span class="favorite right">123</span>
		    					</p>
		    				</div>
		    			</li>
	    			<?php } ?>
	    		</ul>
	    		<!-- 更多 -->
	    		<div class="moreD">
					<a href="" class="more">加载更多</a>
				</div>
	    	</div>
    	</div>
    </div>
	<?php include("common/bottom/bottom.html") ?>
	<script>
		$(function(){
			// 作品数量 加减
			$(".proD .numD .icon").click(function() {
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
			$(".proD .numD .num").blur(function() {
				if($(this).val()<1){$(this).val(1);}
			});

			//zoom
			$(".pro_left .imgD img").click(function() {
				var src = $(this).attr("src");
				var img = "<img src='"+src+"'/>";
				$(".zoomBig").append(img);
				$(".zoomBig").show().click(function(){
					$(this).html("").hide();
				});
			});

			//轮播
			$(".smallD img").click(function(){
				var _index = $(this).index();
				if(_index){
					$(".pro_left .imgD").addClass('imgD_No');
				}else{
					$(".pro_left").find(".imgD_No").removeClass('imgD_No');
				}
				var _src = $(this).attr("src");
				$(".pro_left .imgD img").attr("src",_src);
			})

			//画框选择
			$(".chose1 input").click(function(){
				var _name = $(this).val();
				$(".pro_left .imgD span").attr("class",_name);
			});
			$(".chose2 input").click(function(){
				var _name = $(this).val();
				if($(".pro_left .imgD").is(".imgD_No")){
					$(".pro_left .imgD").attr("class","imgD imgD_No "+_name);
				}else{
					$(".pro_left .imgD").attr("class","imgD "+_name);
				}
			});
		})
	</script>
</body>
</html>