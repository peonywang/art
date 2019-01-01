<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术资讯-最新资讯</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
	<?php include("top.html") ?>
	<script>$(function () {$(".com-top .nav a[name='information']").addClass('act');})</script>

    <div class="bannerD3">
        <div class="w">
            <a href="index.php">首页</a> - <a href="information.php">艺术资讯</a> - <span>最新资讯</span>
        </div>
    </div>

    <div class="index_main page_main">
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
                            <a href="information_article.php">
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
        				<a href="" class="more">加载更多</a>
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
        </div>
    </div>

	<?php include("common/bottom/bottom.html") ?>
	
	<script>
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