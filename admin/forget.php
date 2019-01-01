<!DOCTYPE html>
<head>
	<?php include("../common/meta.html") ?>
    <title>忘记密码</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<div class="adminD adminD3">
		<div class="logo"><img src="/common/images/logo.png"></div>
		<div class="main" id="forget1">
			<h1>找回密码</h1>
			<ul>
				<li class="li1">
					<input class="inp inp1" type="text" placeholder="请输入已注册的手机">
				</li>
				<li class="yzmD">
					<input class="inp inp3" type="text" placeholder="输入手机验证码">
					<a class="a1" href="">获取验证码</a>
				</li>
				<li>
					<button class="sub_btn" id="subforget1">下一步</button>
				</li>
			</ul>
		</div>
		<div class="main" id="forget2" style="display:none;">
			<h1>找回密码</h1>
			<ul>
				<li class="li1">
					<input class="inp inp1" type="password" placeholder="请输入新密码">
				</li>
				<li class="li1" style="margin-bottom:0;">
					<input class="inp inp1" type="password" placeholder="密码确认">
				</li>
				<li>
					<button class="sub_btn" id="subforget2">确 定</button>
				</li>
			</ul>
		</div>
		<div class="main" id="forget3" style="display:none;">
			<h1><span class="red font30">恭喜您</span></h1>
			<ul class="cent">
				<li class="agree">密码重置成功，请妥善保管。返回页面登陆。</li>
				<li style="margin-top: 40px;">
					<a href="login.php" class="an">确 定</a>
				</li>
			</ul>
		</div>
	</div>
	<?php include("../common/bottom/bottom.html") ?>
	<script>
	$(function(){
		$("#subforget1").click(function(){
			$("#forget1").hide();
			$("#forget2").show();
		});
		
		$("#subforget2").click(function(){
			$("#forget2").hide();
			$("#forget3").show();
		});

	})
	</script>
</body>
</html>