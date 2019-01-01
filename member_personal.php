<!DOCTYPE html>
<head>
	<?php include("common/meta.html") ?>
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="member/css/member.css">
    <link rel="stylesheet" href="encyclopedia_edit.css">
    <link rel="stylesheet" href="member_personal.css">
    <link rel="stylesheet" href="common/Jcrop/jquery.Jcrop.min.css">
    <script src="common/Jcrop/jquery.Jcrop.min.js"></script>
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
				<h1>个人中心</h1>
				<div class="m_r_main">
					<h3 class="h3 h3_1">完善基本信息</h3>
					<div class="fillD">
						<ul class="ul1">
							<li class="li1">
								<span class="s1 s2">头像 :</span>
								<div class="userImgD">
									<img src="member/images/default.png" id="personImg" alt="头像" class="i1">
									<div class="cq">
										<div id="gsImg"></div>
										<div class="butD">
											<a href="javascript:;" id="abolish" class="an">取消裁切</a>
											<a href="javascript:;" id="caiqie" class="an">确认裁切并保存</a>
										</div>
									</div>
									<div class="labD">
										<label class="lab1" for="">
											<input type="file" id="gaishuImgFile">
											<span class="an">上传</span>
										</label>
										<p class="dis">上传文件大小不超过 2M</p>
									</div>
								</div>
								<canvas id="canvas" style="display: none;"></canvas>
							</li>
							<li class="li1">
								<span class="s1">昵称 :</span>
								<input type="text" class="inp1">
							</li>
							<li class="li1">
								<span class="s1">真实姓名 :</span>
								<input type="text" class="inp1">
							</li>
							<li class="li1">
								<span class="s1">手机 :</span>
								<input type="text" class="inp1">
							</li>
							<li class="li1">
								<span class="s1">邮箱 :</span>
								<input type="text" class="inp1">
							</li>
							<li class="li1">
								<span class="s1">职业 :</span>
								<input type="text" class="inp1">
							</li>
							<li class="li1">
								<span class="s1">性别 :</span>
								<label class="check"><input type="radio" name="sex" checked="checked"><span>男</span></label>
								<label class="check"><input type="radio" name="sex"><span>女</span></label>
							</li>
							<li class="li1">
								<span class="s1">出生日期 :</span>
								<div class="selectD">
									<select name="" id="">
										<option value="2018">2018</option>
									</select>
									<span class="gray">年</span>
									<select name="" id="">
										<option value="1">1</option>
									</select>
									<span class="gray">月</span>
									<select name="	" id="">
										<option value="1">1</option>
									</select>
									<span class="gray">日</span>
								</div>
							</li>
						</ul>
						<div class="anD">
							<a href="" class="an">完成</a>
						</div>
					</div>
					<h3 class="h3">修改密码</h3>
					<div class="fillD">
						<ul class="ul1">
							<li class="li1">
								<span class="s1">旧密码 :</span>
								<input type="password" class="inp1">
								<span class="err">旧密码输入错误</span>
							</li>
							<li class="li1">
								<span class="s1">新密码 :</span>
								<input type="password" class="inp1">
							</li>
							<li class="li1">
								<span class="s1">新密码确认 :</span>
								<input type="password" class="inp1">
								<span class="err">两次密码输入不相同</span>
								<span class="err">不能使用之前的旧密码</span>
							</li>
						</ul>
						<div class="anD">
							<a href="" class="an">确定</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include("common/bottom/bottom.html"); ?>
	<script>
		//图片裁切
		var reader = new FileReader();
		$("#gaishuImgFile").change(function(){
			var file = document.getElementById("gaishuImgFile").files[0];
			//将文件以Data URL形式读入页面 
			reader.readAsDataURL(file);
			reader.onload=function(e){
				var _src = this.result;
				var gsImg = document.getElementById("gsImg");
				gsImg.innerHTML='<img id="cropImg" style="height100%;width:auto;" src="' + _src +'" />';
				$("#personImg").prop("src",_src);

				var jcropApi;
				$("#cropImg").Jcrop({
					aspectRatio:1,
					baseClass: 'jcrop',
					handleSize:9,
					// 选框选定时的事件
					onSelect:function(c){
						var img=document.getElementById("cropImg"); //图片id
						var multiple = img.height/300;
						var canvas = document.getElementById("canvas"); // 画布对象
						canvas.width = c.w;
						canvas.height = c.h;
						var ctx = canvas.getContext("2d");
						ctx.drawImage(img,(c.x*multiple),(c.y*multiple),(c.w*multiple),(c.h*multiple),0,0,c.w,c.h);   
						//c为crop返回的相关参数。drawImage的参数如何使用可以查看3cschool。
						
						//我们得到一个返回一个包含图片展示的 data URI （base64描述的二进制流）；
						var dataURL = canvas.toDataURL("image/png"); 
						document.getElementById("personImg").src = dataURL;
					},
					//取消选框事件
					onRelease:function(c){$("#personImg").prop("src",_src);},
				}, function() {
					jcropApi = this;
					$("#abolish").click(function(e){
						jcropApi.release();
						$("#gsImg .jcrop-holder").show();
					});
				});
			}
		});
		$("#caiqie").click(function(){
			$("#gsImg .jcrop-holder").hide();
		})
	</script>
</body>
</html>