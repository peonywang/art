
			<div class="mem_left nr">
				<div class="userD">
					<img src="member/images/user.jpg" alt="用户" class="userImg">
					<p class="userName">小毕加索</p>
					<p class="dis">下午好，欢迎登陆美术百科！</p>
					<p><a href="" class="an">退出</a></p>
				</div>
				<!-- menu -->
				<?php $menu = [
					"会员中心" => [
						"href" => "member.php",
						"src" => "member/images/user.png",
						"subordinate" => [
							"消息" => "member_news.php",
							"个人中心" => "member_personal.php",
							"收货地址" => "member_address.php"
						]
					],
					"订单中心" => [
						"href" => "member_order.php",
						"src" => "member/images/order.png",
						"subordinate" => [
							"我的订单" => "member_order.php",
							"购物车" => "member_cart.php",
							"代金券" => "member_cash.php"
						]
					],
					"百科中心" => [
						"href" => "member_encyclopedia.php",
						"src" => "member/images/encyclopedia.png",
						"subordinate" => [
							"我的词条" => "member_encyclopedia.php",
							"审核通过" => "",
							"待审核" => "",
							"未通过审核" => ""
						]
					],
					"素材下载" => [
						"href" => "member_download.php",
						"src" => "member/images/service.png",
						"subordinate" => [
							"我的下载" => "member_download.php"
						]
					],
					"客户服务" => [
						"href" => "member_service.php",
						"src" => "member/images/service.png",
						"subordinate" => [
							"常见问题" => "member_service.php",
							"如何购买" => "member_service.php",
							"联系我们" => "member_service.php"
						]
					]
				] ?>
				<ul class="menuD">
					<?php foreach ($menu as $k => $v) { ?>
						<li>
							<h2>
								<a href="<?php echo $v['href']; ?>">
									<img src="<?php echo $v['src']; ?>" alt="<?php echo $k; ?>"><?php echo $k; ?>
								</a>
							</h2>
							<div class="d1">
								<?php foreach ($v["subordinate"] as $k1 => $v1) { ?>
									<a href="<?php echo $v1; ?>"><?php echo $k1; ?></a>
								<?php } ?>
							</div>
						</li>
					<?php } ?>
				</ul>
			</div>