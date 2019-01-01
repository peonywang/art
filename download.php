<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>素材下载</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
<?php include("top.html") ?>
<script>$(function () {$(".com-top .nav a[name='download']").addClass('act');})</script>

	<div class="bannerD bannerD4">
        <!-- banner -->
        <div class="swiper-container banner4" id="swiper-banner">
            <div class="swiper-wrapper">
                <?php for($i=1;$i<4;$i++){ ?>
                    <a class="swiper-slide" href="download_list.php">
                        <img class="banimg" src="download/images/ban1.jpg" alt="ban1">
                        <div class="d1">
                            <div class="tit">毕加索-超现实主义风格</div>
                            <p class="p1">巴勃罗·毕加索（1881年10月25日-1973年4月8日），<br> 西班牙画家、雕塑家，法国共产党党员。是现代艺术的创始人，西方现代派绘画的主要代表。<br> 毕加索是当代西方最有创造性和影响最深远的艺术家，<br> 
                            是20世纪最伟大的艺术天才。</p>
                            <p class="p1 white">查看详情 &gt;&gt;</p>
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
    		<!-- 选择分类 -->
    		<ul class="choseUl">
    			<?php $fenli = ["书法","国画","油画篆刻","陶瓷","全部分类"] ?>
    			<?php foreach ($fenli as $k => $v) { ?>
    				<li <?php if($k==0){echo "class='act'";}; ?> >
                        <a href="download_list.php"><?php echo $v; ?></a>
                    </li>
    			<?php } ?>
    		</ul>
            <script>
                // 选择分类
                $(function(){
                    $(".choseUl li").click(function() {
                        if($(this).not(".act")){
                            $(this).addClass('act').siblings('.act').removeClass('act');
                        }
                    });
                })
            </script>
    		<!-- 推荐下载 -->
	    	<div class="artistD nr">
	    		<h1>
		    		推荐下载
		    		<img src="download/images/recommended.png" alt="recommended download">
		    	</h1>
		    	<div class="recommend" style="padding:0;">
		    		<ul class="artlistD recommend-right">
	                    <?php for($i=1;$i<13;$i++){ ?>
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
    		<!-- 更多 -->
    		<div class="moreImg" style="margin-bottom: 135px;">
    			<?php for($i=0;$i<2;$i++){ ?>
	    			<a class="a1">
	    				<img src="download/images/img2.jpg" alt="">
	    				<div class="d1">
		    				<h3>罗马神话</h3>
		    				<p>女神与天使主题素材集合</p>
		    				<span class="icon"></span>
	    				</div>
	    			</a>
    			<?php } ?>
    		</div>
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
	</script>
</body>
</html>