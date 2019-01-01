<!DOCTYPE html>
<head>
	<?php include("common/meta.html") ?>
    <title>收货地址</title>
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
				<h1>收货地址</h1>
				<div class="m_r_main">
					<h3 class="h3 h3_1">收货地址管理</h3>
					<div class="addressD">
						<div class="address ad1 act">
							<ul class="ul1">
								<li>
									<span class="s1">姓名 :</span>
									<span class="s2">王先生</span>
								</li>
								<li>
									<span class="s1">手机 :</span>
									<span class="s2">19686794660</span>
								</li>
								<li>
									<span class="s1">邮编 :</span>
									<span class="s2">000000</span>
								</li>
								<li>
									<span class="s1">地址 :</span>
									<span class="s2">北京市朝阳区团结湖小区10楼北京市朝阳区团结湖小区10楼北京市朝阳区团结湖小区10楼</span>
								</li>
							</ul>
							<div class="d1">
								<a href="" class="a1">使用默认地址</a>
								<div class="right">
									<a href="" class="a2">修改</a><a href="" class="a2">删除</a>
								</div>
							</div>
						</div>
						<div class="address ad1">
							<ul class="ul1">
								<li>
									<span class="s1">姓名 :</span>
									<span class="s2">王先生</span>
								</li>
								<li>
									<span class="s1">手机 :</span>
									<span class="s2">19686794660</span>
								</li>
								<li>
									<span class="s1">邮编 :</span>
									<span class="s2">000000</span>
								</li>
								<li>
									<span class="s1">地址 :</span>
									<span class="s2">北京市朝阳区团结湖小区10楼</span>
								</li>
							</ul>
							<div class="d1">
								<a href="" class="a1">设为默认地址</a>
								<div class="right">
									<a href="" class="a2">修改</a><a href="" class="a2">删除</a>
								</div>
							</div>
						</div>
						<div class="address edit">
							<ul class="ul1">
								<li>
									<span class="s1">* 姓名 :</span>
									<input class="inp1" type="text">
								</li>
								<li>
									<span class="s1">* 手机 :</span>
									<input class="inp1" type="text">
								</li>
								<li>
									<span class="s1">&nbsp;&nbsp;邮编 :</span>
									<input class="inp1" type="text">
								</li>
								<li>
									<span class="s1">* 地址 :</span>
									<textarea class="inp1" name="" id="" cols="30" rows="2"></textarea>
								</li>
							</ul>
							<div class="d1">
								<a href="" class="a2">保存地址</a><a href="" class="a2">删除</a>
							</div>
						</div>
						<div class="address ad2">
							<img src="member/images/edit.png" alt="新增收货地址">
							<p>新增收货地址</p>
						</div>
					</div>
					<p class="gray font13">
						美术百科遵守用户协议，不会向任何第三方透漏您的信息。
						<a class="black" href="">查看详情</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php include("common/bottom/bottom.html"); ?>
</body>
</html>