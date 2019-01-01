<!DOCTYPE html>
<head>
	<?php include("../common/meta.html") ?>
    <title>免费注册</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div class="adminD adminD2">
		<div class="logo"><img src="/common/images/logo.png"></div>
		<div class="main">
			<h1>免费注册</h1>
			<ul>
				<li class="li1">
					<input class="inp inp1" type="text" placeholder="昵称">
				</li>
				<li class="li1">
					<input class="inp inp1" type="password" placeholder="设置密码">
				</li>
				<li class="li1">
					<input class="inp inp1" type="text" placeholder="手机号">
				</li>
				<li class="yzmD">
					<input class="inp inp3" type="text" placeholder="输入手机验证码">
					<a class="a1" href="">获取验证码</a>
				</li>
				<li class="agree">
					<input type="checkbox" id="agree"><label for="agree">我已阅读并同意<a href="">《美术百科用户协议》</a></label>
				</li>
				<li>
					<!-- <button class="sub_btn">确 定</button> -->
					<a href="../index.php" class="an sub_btn">登 录</a>
				</li>
				<li class="other">
					<a href="login.php">已有账号，马上登录</a>
				</li>
			</ul>
		</div>
	</div>
	<?php include("../common/bottom/bottom.html") ?>
</body>
</html>