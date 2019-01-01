<!DOCTYPE html>
<head>
	<?php include("common/meta.html") ?>
    <title>代金券</title>
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
				<h1>代金券</h1>
				<div class="m_r_main">
					<h3 class="h3 h3_1">代金券</h3>

					<?php $cash = ["立即使用","已使用","已过期"] ?>
					<div class="cash">
						<?php foreach ($cash as $k => $v) { ?>
							<a href="" class="<?php if($k==0){echo 'a1';}else{echo 'a2';} ?>">
									<div class="d1">
										<p class="p1">
											¥<b>500</b>
										</p>
										<p class="p2">2018.04.01 - 2018.04.30</p>
									</div>
									<div class="d2">
										<h4>新人红包</h4>
										<p class="p2">使用范围：新用户注册</p>
										<p class="p2">限平台：全平台（每笔订单限用一张）</p>
										<p class="p2">券编号：33410403377</p>
									</div>
									<div class="d3"><?php echo $v; ?></div>
								</a>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("common/bottom/bottom.html"); ?>
</body>
</html>