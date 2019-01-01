<!DOCTYPE html>
<head>
	<?php include("common/meta.html") ?>
    <title>百科中心</title>
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
				<h1>百科中心</h1>
				<div class="m_r_main">
					<div class="tag">
						<span class="act">我的词条</span>
						<span>审核通过</span>
						<span>待审核	</span>
						<span>未通过审核</span>
					</div>

					<?php for($y=1;$y<5;$y++){ ?>
						<div class="my_word" 
							id="word<?php echo $y; ?>" 
							<?php if($y>1){ echo "style='display:none;'"; } ?> 
						>
							<table class="tab1">
								<tr>
									<th style="min-width: 300px;">词条名称</th>
									<th>浏览次数</th>
									<th>创建日期</th>
									<th>当前状态</th>
									<th width="160">操作</th>
								</tr>
								<tr class="tr1">
									<td class="td1">毕加索</td>
									<td>12354</td>
									<td>2018.5.22</td>
									<td><span class="green">已通过</span></td>
									<td><a href="" class="a1">修改</a></td>
								</tr>
								<tr class="tr1">
									<td class="td1">毕加索</td>
									<td>12354</td>
									<td>2018.5.22</td>
									<td><span class="gray">待审核</span></td>
									<td><a href="" class="a1">删除</a><a href="" class="a1">修改</a></td>
								</tr>
								<tr class="tr1">
									<td class="td1">毕加索</td>
									<td>12354</td>
									<td>2018.5.22</td>
									<td><span class="red">未通过</span></td>
									<td><a href="" class="a1">删除</a><a href="" class="a1">修改</a></td>
								</tr>
								<tr class="tr2">
									<td class="td1 dis" colspan="5">关键词不符合规定,建议您按照示例规范填写内容，以便提高通过审核的几率。</td>
								</tr>
								<tr class="tr1">
									<td class="td1">毕加索</td>
									<td>12354</td>
									<td>2018.5.22</td>
									<td><span class="gray">待审核</span></td>
									<td><a href="" class="a1">删除</a><a href="" class="a1">修改</a></td>
								</tr>
							</table>
							
			    			<div class="moreD" style="margin-top: 60px;">
			    				<a href="" class="an">加载更多</a>
			    			</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<?php include("common/bottom/bottom.html"); ?>
	<script>
		$(function () {
			// 切换
			$(".tag span").click(function(){
				if($(this).not(".act")){
					$(this).addClass('act').siblings('.act').removeClass('act');
					var _index = $(this).index();
					var objId = "#word"+(_index+1);
					$(objId).show().siblings('.my_word').hide();
				}
			})
		})
	</script>
</body>
</html>