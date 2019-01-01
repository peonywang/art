<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术资讯-展览资讯</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
	<?php include("top.html") ?>
	<script>$(function () {$(".com-top .nav a[name='information']").addClass('act');})</script>

	<div class="bannerD3">
		<div class="w">
			<a href="index.php">首页</a> - <a href="information.php">艺术资讯</a> - <span>展览资讯</span>
		</div>
    </div>

    <div class="index_main page_main">
        <div class="w">
        	<!-- 展览资讯 -->
        	<div class="nr eduD">
        		<div class="edu">
        			<h2>
        				<p class="p1">展览资讯</p>
        				<img src="information/images/exhibition.png" alt="Exhibition information">
        			</h2>
        			<ul class="eduUl exhibitionUl">
        				<?php for($i=0;$i<8;$i++){ ?>
        				<li>
        					<a href="information_article.php">
                                <img class="img1" src="information/images/img1.jpg" alt="img1">
                            </a>
        					<div class="xq">
        						<h3>宋宝斋画院2018年春季中国画名家工作室招生</h3>
        						<p class="p1">
        							冯良鸿此刻的从心所欲、自由独立，也是一种成熟。黑与白在画面上冲突、对峙与妥协，流淌、晕化、刮擦、涂刷，笔触清晰，长短纵横，张扬而不失节制，黑白灰画面的隐现的彩色，饱和稳定，纠缠中既是是曾经的绘画经验与当下心性的博弈，更是是一种走过层峦叠嶂后的淡然与笃定。
        						</p>
        						<p class="p1">
        							主办：英国大英博物馆<br> 
        							时间：2018.04.10 ~ 05.10     每天 10:00 - 21:30<br> 
        							地点：北京朝阳大悦城 朝阳区朝阳北路101号
        						</p>
        						<div class="d1">
                                    <span class="see">2360</span>
                                    <span class="favorite">1234</span>
        						</div>
        					</div>
        				</li>
    					<?php } ?>
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