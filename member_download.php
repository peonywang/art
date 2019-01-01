<!DOCTYPE html>
<head>
	<?php include("common/meta.html") ?>
    <title>我的下载</title>
    <link rel="stylesheet" type="text/css" href="member/css/member.css">
</head>
<body>
	<?php include("member_top.html"); ?>
	<!-- main -->
	<div class="mem_main">
		<div class="w">
			<!-- mem_left -->
			<?php include("member_left.php"); ?>
			<!-- mem_right -->
			<div class="mem_right nr">
				<h1>我的下载</h1>
				<div class="m_r_main">
					<h3 class="h3 h3_1">已下载素材</h3>
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
			                    <p class="dis">尺寸 : 7087×3543像素</p>
			                    <p class="dis">格式 : TIFI</p>
			    			</li>
		                    <?php } ?>
			    		</ul>
							
		    			<div class="moreD" style="margin-top: 60px;">
		    				<a href="" class="an">加载更多</a>
		    			</div>
			    	</div>

				</div>
			</div>
		</div>
	</div>
	<?php include("common/bottom/bottom.html"); ?>
</body>
</html>