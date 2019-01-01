<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术家</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
	<?php include("top.html") ?>
	<script>$(function () {$(".com-top .nav a[name='artist']").addClass('act');})</script>
	
	<div class="bannerD bannerD2 bannerD5">
        <!-- banner -->
        <div class="swiper-container banner2" id="swiper-banner">
            <div class="swiper-wrapper">
                <?php for($i=1;$i<3;$i++){ ?>
                    <a class="swiper-slide" href="">
                        <img class="banimg" src="artist/images/ban1.jpg" alt="ban1">
                        <div class="d1">
                            <div class="tit">东方之笔--张大千</div>
                            <p class="p1">20 世纪50年代，张大千游历世界，获得巨大的国际声誉，被西方艺坛赞为“东方之笔”。<br>他曾与齐白石、徐悲鸿、黄君璧、黄宾虹、溥儒、郎静山等及西班牙抽象派画家毕加索交游切磋。</p>
                            <p class="p1 yellow">查看详情 &gt;&gt;</p>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="ban-pagination" id="ban-pagination"></div>
        <div class="prev" id="ban-prev"></div>
        <div class="next" id="ban-next"></div>
    </div>

    <div class="index_main">
        <div class="w">
        	<!-- select框 -->
            <?php $leibei = ["全部", "书法", "国画", "油画", "版画", "水彩画", "雕塑", "漆画", "钢笔画", "烙画", "紫砂", "陶瓷", "动漫", "剪纸", "综合材料", "其它"] ?> 
            <ul class="selectD selectD2">
                <?php for($i=1;$i<6;$i++){ ?>
                <li class="li1">
                    <div class="d1">
                        <span class="s1">类别：</span>
                        <span class="s2">全部</span>
                    </div>
                    <div class="optionD">
                        <ul>
                            <?php foreach ($leibei as $k => $v) { ?>
                                <li <?php if($k == 0){echo 'class="act"';}  ?> ><?php echo $v; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                <?php } ?>
                <li class="li1">
                    <div class="d1">
                        <span class="s1">社团协会：</span>
                        <span class="s2">全部</span>
                    </div>
                    <div class="optionD optionD2">
                        <ul>
                            <?php foreach ($leibei as $k => $v) { ?>
                                <li <?php if($k == 0){echo 'class="act"';}  ?> ><?php echo $v; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
            </ul>
	    	<!-- 全部艺术家 -->
	    	<div class="artistD nr">
	    		<h1>全部艺术家</h1>
	    		<ul class="artlistD">
                    <?php for($i=1;$i<13;$i++){ ?>
	    			<li>
	    				<a href="artist_introduction.php">
	    					<img class="pro" src="encyclopedia/images/img3.jpg" alt="巴勃罗·毕加索">
	    				</a>
                        <p class="p1">
                            巴勃罗·毕加索
                            <span class="right">
                                <span class="see">0</span>
                                <span class="favorite">0</span>
                            </span>
                        </p>
                        <!-- <p class="p2">西班牙画家、雕塑家</p> -->
                        <!-- <p class="dis">
                            <span class="see">2360</span>
                            <span class="favorite">1234</span>
                        </p> -->
	    			</li>
                    <?php } ?>
	    		</ul>
    			<div class="moreD">
    				<a href="" class="more">加载更多</a>
    			</div>
	    	</div>
            <!-- 友情链接 -->
            <?php include 'friend-link.php'; ?>
        </div>
    </div>

	<?php include("common/bottom/bottom.html") ?>
	<script>
        var banner = new Swiper('#swiper-banner',{
            loop:true,
            autoplay: true,
            pagination: {
                el: '#ban-pagination',
            },
            navigation: {
                nextEl: '#ban-next',
                prevEl: '#ban-prev',
            },
        });
        $(function(){
            //选择
            $(".selectD .d1").click(function(){
                $(".optionD").hide();
                $(".selectD .d1").css("z-index",0);
                var _this = $(this);
                var _option = $(this).next(".optionD");
                _this.css("z-index",3);
                _option.show();
                $("li",_option).click(function(){
                    if($(this).not(".act")){
                        $(this).addClass('act').siblings('.act').removeClass('act');
                        $(".s2",_this).text($(this).text());
                    }
                    _option.hide();
                    _this.css("z-index",0);
                })
                $(".selectD").mouseleave(function (){
                    _option.hide();
                    _this.css("z-index",0);
                })
            });
        })
		
	</script>
</body>
</html>