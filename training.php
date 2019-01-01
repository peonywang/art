<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>教育培训</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
	<?php include("top.html") ?>
	<script>$(function () {$(".com-top .nav a[name='training']").addClass('act');})</script>

	<div class="bannerD bannerD2 bannerD6">
        <!-- banner -->
        <div class="swiper-container banner2" id="swiper-banner">
            <div class="swiper-wrapper">
                <?php for($i=1;$i<2;$i++){ ?>
                    <a class="swiper-slide" href="">
                        <img class="banimg" src="training/images/ban1.jpg" alt="ban1">
                        <div class="d1">
                            <div class="tit">荣宝斋画院<br>中国画名家工作室招生</div>
                            <p class="p1">
                                宝斋画院立足于对中华民族传统文化的继承与发扬，以及对中国书画进行全面深入的研究与探讨， <br>
                                同时依托百年荣宝斋在书画界的学术与艺术品市场等方面的广泛影响，<br> 力争扩大荣宝斋在艺术教育和当今中国书画的发展方面做出努力，
                            </p>
                            <p class="p1">查看详情 &gt;&gt;</p>
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
    	<!-- select框 -->

            <!-- select框 -->
            <?php $leibei = ["全部", "书法", "国画", "油画", "版画", "水彩画", "雕塑", "漆画", "钢笔画", "烙画", "紫砂", "陶瓷", "动漫", "剪纸", "综合材料", "其它"] ?> 
            
        <div class="selectD">
            <ul class="w">
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
            </ul>
        </div>

    	<div class="selectD" style="display: none;">
    		<div class="w">
    			<label for="">
    				类别：
    				<select name="" id="">
    					<option value="">全部</option>
    				</select>
    			</label>
    			<label for="">
    				区域：
    				<select name="" id="">
    					<option value="">全部</option>
    				</select>
    			</label>
    			<label for="">
    				对象：
    				<select name="" id="">
    					<option value="">全部</option>
    				</select>
    			</label>
    			<label for="">
    				品牌：
    				<select name="" id="">
    					<option value="">全部</option>
    				</select>
    			</label>
    			<label for="">
    				价格：
    				<select name="" id="">
    					<option value="">全部</option>
    				</select>
    			</label>
    		</div>
    	</div>
        <div class="w">
        	<!-- 教育培训 -->
        	<div class="nr eduD">
        		<div class="edu">
        			<h2>
        				<p class="p1">教育培训</p>
        				<img src="training/images/education.png" alt="education and training">
        			</h2>
        			<ul class="eduUl">
        				<?php for($i=0;$i<8;$i++){ ?>
        				<li>
        					<img class="img1" src="training/images/img1.jpg" alt="img1">
        					<div>
        						<h3>宋宝斋画院2018年春季中国画名家工作室招生</h3>
        						<p class="p1">
        							机构简介：荣宝斋画院立足于对中华民族传统文化的继承与发扬，以及对中国书画进行全面深入的研究与探讨，同时依托百年荣宝斋在书画界的学术与艺术品市场等方面的广泛影响，力争扩大荣宝斋在艺术教育和当今中国书画的发展方面做出努力，为提高广大人民群众的艺术素养和社会主义精神文
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
        					<p class="p1">名家工作室研修班<br>排行</p>
        					<img src="training/images/studio.png" alt="studio">
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
        			<div class="barnr">
        				<h2>
        					<p class="p1">国展创作班排行</p>
        					<img src="training/images/national.png" alt="national">
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
        			<div class="barnr">
        				<h2>
        					<p class="p1">高考培训班排行</p>
        					<img src="training/images/ncee.png" alt="ncee">
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