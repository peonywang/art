<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>素材下载-详情页</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
    <link rel="stylesheet" href="details.css">
</head>
<body>
<?php include("top.html") ?>
<script>$(function () {$(".com-top .nav a[name='download']").addClass('act');})</script>

	<div class="bannerD3">
		<div class="w">
			<a href="index.php">首页</a> - <a href="download.php">素材下载</a> - <a href="download_list.php">水彩画</a> - <span>详情页</span>
		</div>
    </div>
    <div class="index_main page_main">
    	<div class="w">
        	<div class="nr eduD artistD">
        		<div class="edu pad80">
        			<div class="artD">
	        			<h1>一花独秀<br>中国女性艺术家徐春丽个案研究展</h1>
	        			<div class="d1">
	        				<span class="come">来源：新浪</span>
	        				<span class="time">发布时间：2018.4.42</span>
	        				<div class="right">
	        					<span class="share">
	        						124
			        				<div class="shareD">
										<a href="" class="qqweibo" alt="腾讯微博"></a>
										<a href="" class="sina" alt="微博"></a>
										<a href="" class="wechat" alt="微信"></a>
										<a href="" class="qq" alt="QQ"></a>
			        				</div>
	        					</span>
                                <span class="see">2360</span>
                                <span class="favorite">1234</span>
	        				</div>
	        			</div>
	        			<div class="d3" style="padding-bottom: 20px;">
	        				<div class="zoomImgD">
	        					<img src="download/images/img4.jpg" alt="" class="small">
	        					<div class="zoomBig" style="display: none;"></div>
	        				</div>
	        				<script>
	        					// zoom
	        					$(function(){
	        						$(".zoomImgD .small").click(function() {
	        							var src = $(this).attr("src");
	        							var img = "<div class='imgD' style='background-image:url("+src+")'></div>";
	        							$(".zoomBig").append(img);
	        							$(".zoomBig").show().click(function(){
	        								$(this).html("").hide();
	        							});
	        						});
	        					})
	        				</script>
	        				<div class="func">
	        					<div class="f1">
		        					<a href="" class="an">购买复制品</a>
	        						<p>艺术微喷输出技术【Giclee+】,采用最新科技手段复制，精准而清晰的还原中外经典名作原貌</p>
	        					</div>
	        					<div class="f2">
	        						<a href="" class="an">免费下载</a>
	        						<p>
		        						<span><b>大小 : </b>3M</span>
		        						<span><b>格式 : </b>JPG</span>
		        					</p>
	        					</div>
	        					<div class="f2">
	        						<a href="javascript:;" class="an" id="chosepay">[<b class="yellow">2元</b>]下载原图</a>
	        						<a href="" class="an" style="display: none;">已支付点击下载</a>
	        						<p>
		        						<span><b>大小 :</b>50M</span>
		        						<span><b>格式 : </b>TIFF</span>
	        						</p>
	        					</div>
	        				</div>
	        			</div>
			    		<div class="d3 artist_det2">
			    			<h3 class="h3_tit">作品信息</h3>
			    			<p><img src="artist/images/person.jpg" alt="" class="img1"></p>
			    			<p>
			    				<span class="name">朱德群</span>
			    				<a class="view" href="">
			    					<span class="textgray">查看艺术家</span>全部16件<span class="textgray">可共下载得素材</span>
			    				</a>
			    				<a class="view" href="">查看艺术家百科</a>
			    			</p> 
		    				<div class="share act">
		    					<div class="bdsharebuttonbox shareD">
									<a href="#" class="wechat" data-cmd="weixin" title="分享到微信"></a>
									<a href="#" class="sina" data-cmd="tsina" title="分享到新浪微博"></a>
									<a href="#" class="qqweibo" data-cmd="tqq" title="分享到腾讯微博"></a>
									<a href="#" class="qq" data-cmd="sqq" title="分享到QQ好友"></a>
								</div>
							</div>
		    			</div>
			    		<div class="d3">
			    			<?php $synopsis =  [
			    				"作品名称" => "白日梦",
			    				"材质" => "布面油画",
			    				"尺寸" => "130x150cm",
			    				"作品类型" => "油画",
			    				"风格" => "超现实",
			    				"创作时间" => "2017",
				            ] ?>
			    			<p class="synopsis">
			    				<?php foreach ($synopsis as $k => $v) { ?>
				    				<span><b><?php echo $k; ?> : </b><?php echo $v; ?></span>
			    				<?php } ?>
			    			</p>
			    			<p>
				    			田学森：1975年出生，先后学习于山东、上海，游历欧洲，2000年，在北京人民大会堂被文化部和中国文联有关部门授予“世界华人艺术家”称号，2002年在上海刘海粟美术馆举办“田学森作品展”，2004年第十届全国美术展上海展，2005年应邀赴法国参加画展和创作。
				    		</p>
			    			<p> 
				    			2010年在科学会堂举办《行走中国—田学森旅行写生作品展》。2010年后告别城市生活，深入华山，多年来孤单于华山的深谷中，面山作画，写山中纪实文字与体悟，与大自然为友，与天地精神往来，求索艺术与人生的真谛，追寻生命的源头。2016年“华山长卷——田学森七年油画展”在上海展出，备受业界关注。
				    		</p>
			    		</div>
			    		<div class="d3">
			    			<h3 class="h3_tit" style="margin-bottom: 30px;">版权声明</h3>
			    			<p>美术百科是正版商业图库，所有原创作品（含预览图）均受著作权法保护，著作权及相关权利归上传用户所有，未经许可任何人不得擅自使用，否则将依法被要求承担高达人民币50万元的赔偿责任。</p>
			    		</div>
	        		</div>
	        	</div>
	        </div>

    		<!-- 推荐下载 -->
	    	<div class="artistD nr">
		    	<div class="recommend" style="padding:0;">
		    		<h3 class="h3_tit">推荐下载</h3>
		    		<ul class="artlistD recommend-right">
	                    <?php for($i=1;$i<9;$i++){ ?>
		    			<li>
		    				<a class="imgD" href="">
		                        <img class="pro" src="index/images/pro1.jpg" alt="达芬奇《蒙娜丽莎》">
		                        <div class="priD">
		                            <p class="p1">立即下载</p>
		                        </div>
		                    </a>
		                    <p class="p1">达芬奇《蒙娜丽莎》<?php echo $i; ?></p>
		                    <p class="dis">尺寸 : 7087×3543像素<span class="right">格式 : TIFI</span></p>
		                    <p class="dis">已下载 : 160</p>
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

    <!-- 支付 -->
    <div class="tan" style="display: none;" id="pay">
        <div class="tan_main">
            <div class="tan_tit">选择支付方式</div>
            <div class="tan_nr">
                <p>
                	<label for="pay_type1">
                		<input type="radio" name="pay_type" id="pay_type1">
	                	<img class="erwei" src="store/images/WechatPay_big.png" alt="微信支付">
                	</label>
                	<label for="pay_type2">
                		<input type="radio" name="pay_type" id="pay_type2">
	                	<img class="erwei" src="store/images/alipay_big.png" alt="支付宝支付" style="margin-right: 0;">
                	</label>
                </p>
                <p>素材下载支付费用<span class="textback">2元</span>，扫描二维码即可完成支付。</p>
            </div>
            <div class="tan_sub">
                <div class="anD">
                    <a href="javascript:;" class="an">确定</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 支付反馈 -->
    <div class="tan" style="display: none;" id="pay2">
        <div class="tan_main">
            <div class="tan_tit">请在新页面完成支付</div>
            <div class="tan_nr">
                <p>如果未能完成支付，请返回下载页面重新支付。</p>
            </div>
            <div class="tan_sub">
                <div class="anD">
                    <a href="" class="an">支付成功</a>
                </div>
                <p><a href="" class="a1">支付遇到问题</a></p>
            </div>
        </div>
    </div>
    <script>
    	$(function(){
    		$("#chosepay").click(function(){
    			$("#pay").show();
    		});
    		$("#pay .an").click(function(){
    			$("#pay").hide();
    			$("#pay2").show();
    		});

            // 点击弹窗其他地方关闭
            $(".tan").click(function(){
                $(this).hide();
            });
            $(".tan_main").click(function(event){
                event.stopPropagation();
            });
    	})
    	// 分享
	    window._bd_share_config = {
	        "common":{
	            "bdSnsKey":{},
	            "bdText":"美术百科",
	            "bdMini":"2",
	            "bdMiniList":[],
	            "bdPic":"",
	            "bdStyle":"0",
	            "bdSize":"32"
	            },
	        "share":{}
	    };
	    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
    </script>
</body>
</html>