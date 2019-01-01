<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术商店-列表</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
	<?php include("top.html") ?>
    <script>$(function () {$(".com-top .nav a[name='store']").addClass('act');})</script>
	
    <div class="bannerD3">
        <div class="w">
            <a href="index.php">首页</a> - <a href="store.php">艺术商店</a> - <span>列表</span>
        </div>
    </div>

    <div class="index_main page_main">
        <div class="w">
            <!-- 选择分类 -->
            <?php 
                $chose = [
                    "类别" => [
                        "全部",
                        "书法类" => ["甲骨文","篆书","隶书","行书","草书","楷书","其他"],
                        "国画类" => ["人物","道释","山水","禽鸟","畜兽","虫鱼","果蔬","其他"],
                        "油画类" => ["人物","风景","静物","其他"],
                        "其他类" => ["别版画","水彩画","漆画","钢笔画","烙画","创意产品"]
                    ]
                ];
                $chose2 = [
                    "作品风格" => ["全部","工笔","写意","兼工带写","水墨","重彩","写实","抽象","创意","其他"],
                    "参考分类" => ["全部","中国美术家协会会员","中国书法家协会会员","中国油画学会会员","省级美术家协会会员","省级书法家协会会员","其他"],
                    "价格区间" => ["全部","0-999","1000-4999","5000-9999","10000-19999","20000-29999","30000以上"],
                    "作品尺寸" => ["全部","0-49cm","50-99cm","100-149cm","150-199cm","200cm以上"],
                    "作品形状" => ["全部","正方形","竖幅","横幅","长卷","扇形","圆形","多边形"]
                ]
            ?>
            <ul class="choseD">
                <?php foreach ($chose as $k => $v) { ?>
                <li class="li1">
                    <span class="s1"><?php echo $k; ?>：</span>
                    <div class="d1">
                        <?php foreach ($v as $k1 => $v1) { 
                            if($k1 === 0){ ?>
                                <label><input type="radio" name="<?php echo $k; ?>"><span><?php echo $v1; ?></span></label>
                            <?php }else{ ?>
                                <span class="gray"><?php echo $k1; ?></span>
                                <?php foreach ($v1 as $k2 => $v2) { ?>
                                    <label><input type="radio" name="<?php echo $k; ?>"><span><?php echo $v2; ?></span></label>
                                <?php } ?>
                            <?php }
                        } ?>
                    </div>
                </li>
                <?php } ?>
                <?php foreach ($chose2 as $k => $v) { ?>
                <li class="li1 li2">
                    <span class="s1"><?php echo $k; ?>：</span>
                    <div class="d1">
                        <?php foreach ($v as $k1 => $v1) { ?>
                            <label><input type="radio" name="<?php echo $k; ?>"><span><?php echo $v1; ?></span></label>
                        <?php } ?>
                    </div>
                </li>
                <?php } ?>
                <li class="li3"><span class="more"></span></li>
            </ul>
            <script>
                $(function(){
                    // 选择分类的默认选项(默认第一个-全部)
                    $(".choseD .d1 label:first-child").find("input").attr("checked","checked").prop('checked',true);
                    // 展开
                    $(".choseD .li3 .more").click(function(){
                        if($(this).is(".act")){
                            $(".choseD .li2,.choseD .li3 .more").removeClass('act');
                        }else{
                            $(".choseD .li2,.choseD .li3 .more").addClass('act');
                        }
                    });
                })
            </script>
            <a href="store_artist.php">艺术家可下载素材页(仅前端使用入口)</a>
	    	<!-- 全部 -->
	    	<div class="artistD nr recommend">
	    		<h1>全部</h1>
                <ul class="artlistD recommend-right">
                    <?php for($i=1;$i<13;$i++){ ?>
                        <li>
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
		
	</script>
</body>
</html>