<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>素材下载-列表</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
<?php include("top.html") ?>
<script>$(function () {$(".com-top .nav a[name='download']").addClass('act');})</script>

	<div class="bannerD3">
		<div class="w">
			<a href="index.php">首页</a> - <a href="download.php">素材下载</a> - <span>列表</span>
		</div>
    </div>
    <div class="index_main page_main">
    	<div class="w">
    		<!-- 选择分类 -->
			<?php $chose = [
				"分类" => ["全部", "书法", "国画", "油画", "版画", "水彩画", "雕塑", "漆画", "钢笔画", "烙画", "紫砂", "陶瓷", "动漫", "剪纸", "综合材料", "其它"],
				"地区" => ["全部","大陆","香港","台湾","欧洲","美国","日本","其它"],
				"时代" => ["全部","中国","先秦","汉代","魏晋南北朝","隋唐","宋代","元代","明代","清代","近现代" ,"当代","欧美","古代美术","中世纪","文艺复兴","17世纪","18世纪","19世纪","现代美术","当代"]
			] ?>
    		<ul class="choseD">
    			<?php foreach ($chose as $k => $v) { ?>
    			<li class="li1">
    				<span class="s1"><?php echo $k; ?>：</span>
    				<div class="d1">
    					<?php foreach ($v as $v1) { ?>
		    				<label><input type="radio" name="<?php echo $k; ?>"><span><?php echo $v1; ?></span></label>
    					<?php } ?>
    				</div>
    			</li>
    			<?php } ?>
    		</ul>
    		<script>
    			$(function(){
    				// 选择分类的默认选项(默认第一个-全部)
    				$(".choseD .d1 label:first-child").find("input").attr("checked","checked").prop('checked',true);
    			})
    		</script>
    		<a href="download_artist.php">艺术家可下载素材页(仅前端使用入口)</a>
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
		    				<a class="imgD" href="download_details.php">
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