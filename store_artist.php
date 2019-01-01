<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术商店-艺术家</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
<?php include("top.html") ?>
<script>$(function () {$(".com-top .nav a[name='download']").addClass('act');})</script>

	<div class="bannerD3">
		<div class="w">
			<a href="index.php">首页</a> - <a href="store.php">艺术商店</a> - <a href="store_list.php">朱德群</a> - <span>全部可下载作品</span>
		</div>
    </div>
    <div class="index_main page_main">
    	<div class="w">
    		<!-- 推荐下载 -->
	    	<div class="artistD nr">
	    		<div class="artist_det">
	    			<p><img src="artist/images/person.jpg" alt="" class="img1"></p>
	    			<p><span class="name">朱德群</span></p>
	    			<p> 
	    				朱德群（1920年5月22日—2014年3月26日），生于安徽萧县白土镇(时属江苏）一个具有文化修养的医生世家，<br> 
	    				1935年进入国立杭州艺术专科学校学习西画，1941年毕业于国立杭州艺专，即今天的中国美术学院。 <br>
	    				1945年任教南京中央大学建筑系。 </p>
	    			<p><a class="view" href="">查看艺术家百科</a></p>
	    		</div>
		    	<div class="recommend" style="padding:0;">
		    		<h1>艺术家所有可供下载素材</h1>
		    		<ul class="artlistD recommend-right">
	                    <?php for($i=1;$i<13;$i++){ ?>
		    			<li>
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
		    			</li>
	                    <?php } ?>
		    		</ul>
		    	</div>
	    		<!-- 更多 -->
	    		<div class="moreD">
					<a href="" class="more">加载更多</a>
				</div>
	    	</div>
    	</div>
    </div>
	<?php include("common/bottom/bottom.html") ?>
</body>
</html>