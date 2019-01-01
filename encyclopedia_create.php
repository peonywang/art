<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>美术百科-创建词条</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
    <?php include("top.html") ?>
    <script>$(function () {$(".com-top .nav a[name='encyclopedia']").addClass('act');})</script>
    <div class="index_main">
    	<div class="w">
    		<div class="ency_creatD">
	    		<h1>词条名称</h1>
	    		<div class="inpD">
	    			<input type="text" class="inp1" placeholder="输入名词">
	    			<div class="err">
	    				<span class="red">美术</span> 已被创建，您可以点击一项名查看具体内容并完善。 
	    			</div>
	    		</div>
	    		<p class="dis">
	    			如果一个词条拥有两个或更多的称呼（如“北京大学”和“北大”），<br> 
	    			百度百科只收录一个标准名称的词条（北京大学），请不要创建一个内容相同的新词条（北大），<br> 
	    			而是报告同义词。
	    		</p>
	    		<div class="anD">
	    			<a href="javascript:;" class="an" id="ency_creatD1">创建</a>
	    		</div>
    		</div>
    		<div class="ency_creatD" style="display: none;">
    			<h1>选择词条分类</h1>
    			<div class="chose_ency">
    				<ul class="ul1">
    					<?php 
	    					$ul1 = ["美术理论", "美术活动", "美术创作", "美术分类", "美术报刊", "美术出版", "美术社团", "相关机构", "美术市场", "中国美术"];
	    					foreach ($ul1 as $v) { ?>
    						<li><?php echo $v; ?></li>
    					<?php } ?>
    				</ul> 
					<ul class="ul2" style="display: none;">
						<?php 
							$ul2 = ["中国画", "油画", "版画", "书法", "篆刻"]; 
							foreach ($ul2 as $v) { ?>
							<li><?php echo $v; ?></li>
    					<?php } ?>
    				</ul>
    				<ul class="ul3" style="display: none;">
    					<?php 
	    					$ul3 = ["团体", "印学史", "印谱", "篆刻工具书", "篆刻报刊", "书史", "博物馆", "社团", "著作", "名词术语"];
	    					 foreach ($ul3 as $v) { ?>
    					 	<li><?php echo $v; ?></li>
    					<?php } ?>
    				</ul>
    			</div>
	    		<div class="anD">
	    			<a href="encyclopedia_edit.php" class="an">确定</a>
	    			<a href="" class="right black">意见反馈</a>
	    		</div>
    		</div>
    	</div>
    </div>
    <?php include("common/bottom/bottom.html") ?>
    <script>
    	$(function(){
    		$("#ency_creatD1").click(function() {
    			$(this).parents(".ency_creatD").hide().siblings('.ency_creatD').show();
    		});
    	})
    	$(".chose_ency li").click(function() {
    		if($(this).not(".act")){
    			$(this).parents("ul").next("ul").show();
    			$(this).addClass('act').siblings('.act').removeClass('act');
    		}
    	});
    </script>
</body>
</html>