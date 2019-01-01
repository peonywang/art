<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术商店</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
	<?php include("top.html") ?>
	<script>$(function () {$(".com-top .nav a[name='store']").addClass('act');})</script>

	<div class="bannerD bannerD2 bannerD7" style="margin-bottom: 50px;">
        <!-- banner -->
        <div class="swiper-container banner2" id="swiper-banner">
            <div class="swiper-wrapper">
                <?php for($i=1;$i<2;$i++){ ?>
                    <a class="swiper-slide" href=""><img class="banimg" src="http://www.artpc.cn/images/image/20180831/20180831120346_13482.jpg" alt="ban1"></a>
                <?php } ?>
            </div>
        </div>
        <div class="ban-pagination" id="ban-pagination"></div>
        <div class="prev" id="ban-prev"></div>
        <div class="next" id="ban-next"></div>
    </div>
    <div class="index_main">
    	<div class="w">
			<!-- 更多 -->
			<div class="moreImg">
				<?php for($i=0;$i<3;$i++){ ?>
					<a class="a1 a2" href="store_details1.php">
						<img src="store/images/img1.jpg" alt="">
						<div class="d1">
		    				<h3>汪钰元</h3>
		    				<p>彩墨中国画艺术作品专题</p>
		    				<span class="icon"></span>
						</div>
					</a>
				<?php } ?>
			</div>
    		<!-- 精选推荐 -->
	    	<div class="artistD nr recommend exhibition" style="padding: 50px;">
	    		<h1 style="margin: 0;">
		    		精选推荐
		    		<img src="store/images/selection.png" alt="Selection recommendation">
		    	</h1>

    			<div id="exhibition-pagination"></div>

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
                                <p class="dis">卡纸，墨水，马克笔，喷漆 21×29cm</p>
                                <p class="dis">
                                    <span class="see">2360</span>
                                    <span class="favorite">1234</span>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>	
                <div class="moreD">
    				<a href="store_list.php" class="more" style="margin: 50px auto 0;">查看全部</a>
    			</div>
		    </div>
		</div>
	    <!-- 艺术家 -->
	    <div class="artistD nr artuserD">
	    	<div class="w">
		    	<h1>
		    		艺术家
		    		<img src="store/images/emerging.png" alt="emerging artists">
		    	</h1>
		    	<ul class="artuserList">
		    		<?php for($i=1;$i<5;$i++){ ?>
			    		<li>
			    			<a href="" class="imgD">
				    			<img src="encyclopedia/images/img3.jpg" alt="user">
			    			</a>
		    				<p class="p1">巴勃罗·毕加索</p>
		    				<p class="dis">西班牙画家、雕塑家</p>
			    		</li>
		    		<?php } ?>
		    	</ul>
	    	</div>
	    </div>
		<div class="w">
    		<!-- 最新作品 -->
	    	<div class="artistD nr recommend exhibition" style="padding: 50px;">
	    		<h1 style="margin: 0;">
		    		最新作品
		    		<img src="store/images/latest.png" alt="Latest work">
		    	</h1>

    			<div id="exhibition-pagination2"></div>

                <div class="swiper-container recommend-right" id="swiper-exhibition2">
                    <div class="swiper-wrapper">
                        <?php for($i=1;$i<13;$i++){ ?>
                            <div class="swiper-slide">
                                <a class="imgD" href="">
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
                            </div>
                        <?php } ?>
                    </div>
                </div>	
                <div class="moreD">
    				<a href="" class="more" style="margin: 50px auto 0;">查看全部</a>
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
         // 最新作品
        var figures = new Swiper('#swiper-exhibition2', {
            loop: true,
            autoplay:true,
            autoHeight: true,
            pagination:{
                el:'#exhibition-pagination2',
                clickable :true,
            },
            //网格分布
            slidesPerView:4,
            slidesPerGroup : 4,
			spaceBetween : 50,
        });
    </script>
</body>
</html>