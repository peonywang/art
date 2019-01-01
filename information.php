<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术资讯</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
	<?php include("top.html") ?>
	<script>$(function () {$(".com-top .nav a[name='information']").addClass('act');})</script>

	<div class="bannerD bannerD2">
        <!-- banner -->
        <div class="swiper-container banner2" id="swiper-banner">
            <div class="swiper-wrapper">
                <?php for($i=1;$i<4;$i++){ ?>
                    <a class="swiper-slide" href="">
                        <img class="banimg" src="encyclopedia/images/ban1.jpg" alt="ban1">
                        <div class="d1">
                            <div class="tit">毕加索-超现实主义风格</div>
                            <p class="p1">巴勃罗·毕加索（1881年10月25日-1973年4月8日），<br> 西班牙画家、雕塑家，法国共产党党员。是现代艺术的创始人，西方现代派绘画的主要代表。<br> 毕加索是当代西方最有创造性和影响最深远的艺术家，<br> 
                            是20世纪最伟大的艺术天才。</p>
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
    	<!-- 展览资讯 -->
    	<div class="recommend exhibition">
    		<div class="w nr">
    			<h2>
    				<p class="p1">展览资讯</p>
    				<img src="information/images/exhibition.png" alt="exhibition information">
    			</h2>
    			<div id="exhibition-pagination"></div>

                <div class="swiper-container recommend-right" id="swiper-exhibition">
                    <div class="swiper-wrapper">
                        <?php for($i=1;$i<13;$i++){ ?>
                            <div class="swiper-slide">
                                <a class="imgD" href="information_exhibition.php">
                                    <img src="information/images/img1.jpg" alt="一花独秀">
                                </a>
                                <p class="p1">一花独秀艺术家徐春丽个展</p>
                                <p class="p2">2018.04.10 ~ 05.10</p>
                                <p class="dis p3">西安曲江新区大唐不夜城贞观文化广场一区-西安美术馆</p>
                                <p class="dis">
                                    <span class="see">2360</span>
                                    <span class="favorite">1234</span>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
    		</div>
    	</div>
        <div class="w">
        	<!-- 最新资讯 -->
        	<div class="nr eduD">
        		<div class="edu">
        			<h2>
        				<p class="p1">最新资讯</p>
        				<img src="information/images/latest.png" alt="Latest information">
        			</h2>
        			<ul class="eduUl latestUl">
        				<?php for($i=0;$i<8;$i++){ ?>
        				<li>
                            <a href="information_latest.php">
            					<img class="img1" src="training/images/img1.jpg" alt="img1">
                            </a>
            					<div>
            						<h3>宋宝斋画院2018年春季中国画名家工作室招生</h3>
            						<p class="p1">
            							机构简介：荣宝斋画院立足于对中华民族传统文化的继承与发扬，以及对中国书画进行全面深入的研究与探讨，同时依托百年荣宝斋在书画界的学术与艺术品市场等方面的广泛影响，力争扩大荣宝斋在艺术教育和当今中国书画的发展方面做出努力，为提高广大人民群众的艺术素养和社会主义精神文
            						</p>
            						<div class="d1">
            							<span class="time">2018.04.10</span>
                                        <span class="see">2360</span>
                                        <span class="favorite">1234</span>
            						</div>
            					</div>
        				</li>
    					<?php } ?>
        				<li>
        					<div>
        						<h3>宋宝斋画院2018年春季中国画名家工作室招生</h3>
        						<p class="p1">
        							机构简介：荣宝斋画院立足于对中华民族传统文化的继承与发扬，以及对中国书画进行全面深入的研究与探讨，同时依托百年荣宝斋在书画界的学术与艺术品市场等方面的广泛影响，力争扩大荣宝斋在艺术教育和当今中国书画的发展方面做出努力，为提高广大人民群众的艺术素养和社会主义精神文
        						</p>
        						<div class="d1">
        							<span class="time">2018.04.10</span>
                                    <span class="see">2360</span>
                                    <span class="favorite">1234</span>
        						</div>
        					</div>
        				</li>
        			</ul>
        			<div class="moreD">
        				<a href="information_latest.php" class="more">加载更多</a>
        			</div>
        		</div>
        		<div class="barD">
        			<div class="barnr">
        				<h2>
        					<p class="p1">热搜排行</p>
        					<img src="index/images/hot.png" alt="Hot search bar ">
        				</h2>
        				<ol class="barol barol2">
	                        <?php for($i=1;$i<6;$i++){ ?>
	                            <li>
	                                <span class="no"><?php echo $i; ?></span>
	                                <span class="name">马王堆帛书</span>
	                                <span class="bar"><?php echo 12345-4*$i; ?></span>
	                            </li>
	                        <?php } ?>
        				</ol>
        			</div>
        			<div class="barnr pictureD">
        				<div class="hotD">
		                    <h2>
		                        <p class="p1">热点素材</p>
		                        <img src="encyclopedia/images/picture.png" alt="hot picture">
		                    </h2>
		                    <div id="picture-pagination"></div>
		                    <div class="swiper-container swiper-picture" id="swiper-picture">
		                        <div class="swiper-wrapper">
		                            <?php for($i=1;$i<5;$i++){ ?>
		                                <div class="swiper-slide">
		                                    <a href="">
		                                        <img src="encyclopedia/images/img2.jpg" alt="img2">
		                                        <span>马踏飞燕<br>又名马超龙雀</span>
		                                    </a>
		                                </div>
		                            <?php } ?>
		                        </div>
		                    </div>
        				</div>
	                </div>
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
        // 展览资讯
        var figures = new Swiper('#swiper-exhibition', {
            loop: true,
            // autoplay:true,
            autoHeight: true,
            pagination:{
                el:'#exhibition-pagination',
                clickable :true,
            },
            //网格分布
            slidesPerView:5,
            slidesPerGroup : 5,
			spaceBetween : 40,
        });

        // 热点素材
        var picture = new Swiper('#swiper-picture',{
            pagination:{
                el:'#picture-pagination ',
                clickable :true,
            },
            direction : 'vertical',
        })
    </script>
</body>
</html>