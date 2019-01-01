<!DOCTYPE html>
<head>
	<?php include("../common/meta.html") ?>
    <title>会员登录</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div class="adminD adminD1">
		<div class="logo"><img src="/common/images/logo.png"></div>
		<div class="main">
			<h1>会员登录</h1>
			<ul>
				<li class="li1">
					<input class="inp inp1 err" type="text" placeholder="账号">
				</li>
				<li class="li1">
					<input class="inp inp1" type="password" placeholder="密码">
				</li>
				<li class="yzmD">
					<input class="inp inp2" type="text" placeholder="验证码">
					<img src="images/yzm.jpg">
					<a href="">换一个</a>
				</li>
				<li>
					<!-- <button class="sub_btn">登 录</button> -->
					<a href="../index.php" class="an sub_btn">登 录</a>
				</li>
				<li class="other">
					<a href="forget.php">忘记密码</a>
					<a href="register.php">免费注册</a>
				</li>
			</ul>
			<div class="third_party">
				<div class="tit">第三方平台登录</div>
				<div class="shareD">
					<a href="" alt="微博"><i class="share s-sina"></i></a>
					<a href="" alt="微信"><i class="share s-wechat"></i></a>
					<a href="" alt="QQ"><i class="share s-qq"></i></a>
				</div>
			</div>
		</div>
	</div>
	<?php include("../common/bottom/bottom.html") ?>
</body>
</html>