<!DOCTYPE html>
<head>
	<?php include("common/meta.html") ?>
    <title>词条编辑</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="member/css/member.css">
    <link rel="stylesheet" href="encyclopedia_edit.css">
    <link rel="stylesheet" href="common/Jcrop/jquery.Jcrop.min.css">
    <script src="common/Jcrop/jquery.Jcrop.min.js"></script>
</head>
<body>
	<?php include("member_top.html"); ?>
	<!-- main -->
	<div class="edit_main">
		<div class="edit_left">
			<h1>词条目录</h1>
			<ul class="ul1">
				<li><a href="#edit1">概述</a></li>
				<li><a href="#edit2">基本信息栏</a></li>
				<li>
					<a href="#edit3">正文</a>
					<ul class="ul2">
						<li><a href="">人物画</a></li>
						<li><a href="">山水画</a></li>
						<li><a href="">花鸟画</a></li>
						<li><a href="">文人画</a></li>
					</ul>
				</li>
				<li><a href="#edit4">相册</a></li>
				<li><a href="#edit5">参考资料</a></li>
			</ul>
		</div>
		<div class="edit_right">
			<div class="e_r_nr">
				<div class="tit">所创建的词条名称 </div>
				<!-- 概述 -->
				<div class="e_r_d" id="edit1">
					<h2>概述<span class="del"></span></h2>
					<div class="gs">
						<div class="gs1">
							<img class="img1" id="personImg" src="member/images/default.png" alt="">
							<a href="javascript:;" class="an">上传</a>
						</div>
						<div class="gs2">
							<div id="gsImg"></div>
							<div class="butD">
								<a href="javascript:;" id="abolish" class="an">取消裁切</a>
								<a href="javascript:;" id="caiqie" class="an">确认裁切并保存</a>
							</div>
						</div>
						<div class="gs3">
							<textarea class="inp1" name="" id="" cols="" rows="4" placeholder="简单概括描述词条的主要内容和相关信息。"></textarea>
						</div>
					</div>
				</div>
				<!-- 基本信息栏 -->
				<div class="e_r_d" id="edit2">
					<h2>基本信息栏<span class="refresh">更换模板</span></h2>
					<div class="basic act">
						<ul class="ul1">
							<?php for($i=1;$i<8;$i++){ ?>
							<li class="li1">
								<span class="s1">中文名</span>
								<span class="s2">
									<input type="text" class="inp1">
								</span>
							</li>
							<?php } ?>
							<li class="li1">
								<span class="s1"><input type="text" class="inp1"></span>
								<span class="s2">
									<input type="text" class="inp1">
								</span>
							</li>
						</ul>
						<div class="last"><span class="add">添加自定义项</span></div>
						<div class="dis">
							请参照项目说明填写。若某项不适合当前词条，可留空
						</div>
					</div>
					<div class="basic" style="display: none;">
						<ul class="ul1">
							<?php for($i=1;$i<5;$i++){ ?>
							<li class="li1">
								<span class="s1">中文名2</span>
								<span class="s2">
									<input type="text" class="inp1">
								</span>
							</li>
							<?php } ?>
							<li class="li1">
								<span class="s1"><input type="text" class="inp1"></span>
								<span class="s2">
									<input type="text" class="inp1">
								</span>
							</li>
						</ul>
						<div class="last"><span class="add">添加自定义项</span></div>
						<div class="dis">
							请参照项目说明填写。若某项不适合当前词条，可留空
						</div>
					</div>
				</div>
				<!-- 正文 -->
				<div class="e_r_d" id="edit3">
					<h2>正文</h2>
					<div class="zw">
						<textarea class="inp1" name="" id="" cols="30" rows="10" placeholder="简单概括描述词条的主要内容和相关信息。 "></textarea>
					</div>
				</div>
				<!-- 相册 -->
				<div class="e_r_d" id="edit4">
					<div class="xc">
						<div class="xcD">
							<h2><span class="title">油画作品</span><span class="del"></span></h2>
							<ul class="ul1">
								<?php for($i=1;$i<5;$i++){ ?>
								<li>
									<div class="imgD">
										<img src="artist/images/person.jpg" class="img1" alt="">
										<textarea class="inp1" name="" id="" cols="30" placeholder="概括性文字"></textarea>
										<span class="del"></span>
									</div>
								</li>
								<?php } ?>
							</ul>
							<div class="anD">
								<a href="javascript:;" class="an addimg">上传图片</a>
							</div>
						</div>
						<div class="anD">
							<a href="javascript:;" class="an addxc">添加相册分类</a>
						</div>
					</div>
				</div>
				<!-- 参考资料 -->
				<div class="e_r_d" id="edit5">
					<h2>参考资料</h2>
					<div class="ck">
						<ul class="ul1">
							<li>
								<span class="s1">
									<input type="text" class="inp1">
								</span>
								<span class="s2"> 备注或链接 </span>
								<span class="s3">
									<input type="text" class="inp1">
								</span>
								<span class="del">删除</span>
							</li>
						</ul>
						<div class="anD">
							<span class="an add">添加</span>
						</div>
					</div>
				</div>
				<a href="javascript:;" class="an an_create">创建</a>
				<a href="" class="an an_preview">预览</a>
			</div>
		</div>
	</div>
    <?php include("common/bottom/bottom.html") ?>
    <!-- 概述 -->
    <div class="tan" id="gaishu" style="display: none;" >
    	<div class="tan_main">
    		<div class="tan_tit">图片上传</div>
    		<div class="tan_nr">
    			<label class="imgD">
    				<img src="member/images/default.png" class="img1" id="gaishuImg" alt="">
    				<div class="del"><span>点击选择图片</span></div>
    				<input type="file" id="gaishuImgFile">
    			</label>
    			<input type="text" class="inp1" placeholder="图片说明">
    		</div>
    		<div class="anD">
    			<a href="javascript:;" id="subgaishuImg" class="an">确定</a>
    		</div>
    		<p class="dis">
    			请上传短边大于400像素的图片, 仅支持jpg,png格式文件，<br>尺寸需大于3KB小于10M
    		</p>
    	</div>
    </div>
    <!-- 相册 -->
    <div class="tan" id="addxiangce" style="display: none;">
    	<div class="tan_main">
    		<div class="tan_tit">相册名称</div>
    		<div class="tan_nr">
    			<input type="text" class="inp1 w400" placeholder="输入相册名称">
    		</div>
    		<div class="anD">
    			<a href="" class="an">确定</a>
    		</div>
    	</div>
    </div>
    <!-- 相册批量上传 -->
    <div class="tan" id="piliangxiangce" style="display: none;">
    	<div class="tan_main">
    		<div class="tan_tit">相册批量上传</div>
    		<div class="tan_nr piliang">
    			<label class="d1">
    				<input type="file" class="file1">
    				<span class="inp1">浏览本地图片</span>
    				<span class="an">浏览</span>
    			</label>
    			<ul class="imgD">
    				<?php for($i=1;$i<16;$i++){ ?>
    				<li>
	    				<img src="artist/images/person.jpg" class="img1" alt="">
    					<span class="del"></span>
    				</li>
    			<?php } ?>
    			</ul>
    		</div>
    		<div class="anD">
    			<a href="" class="an">确定</a>
    		</div>
    		<div class="dis">
    			请上传短边大于400像素的图片, 仅支持jpg,png格式文件，<br>尺寸需大于3KB小于10M，最多上传20张。
    		</div>
    	</div>
    </div>
    <!-- 创建成功 -->
    <div class="tan" id="success" style="display: none;">
    	<div class="tan_main">
    		<div class="tan_tit"><span class="red font30">恭喜您</span></div>
    		<div class="tan_nr">
    			您要创建的词条信息提交成功，我们的工作人员将尽快完成审核。
    		</div>
    		<div class="tan_tit"><span class="red font30">很遗憾</span></div>
    		<div class="tan_nr">
    			您的词条信息未填写完整，请返回继续完善相关信息。
    		</div>
    		<div class="anD">
    			<a href="" class="an">确定</a>
    		</div>
    	</div>
    </div>

    <label>请选择一个文件：</label> 
        <input type="file" id="file" style="width: 70px;height: 30px;opacity: 1;position:relative;" /> 
        <input type="button" value="读取图像" onclick="readAsDataURL()" style="left: 90px;" /> 
        <input type="button" value="裁切" onclick="cutoff()" style="left: 90px;" /> 
    </p> 
    <canvas id="canvas" style="display: none;"></canvas>

    <script>
    	//图片裁切
		var reader = new FileReader();
		$("#gaishuImgFile").change(function(){
			var _tan = $(this).parents(".tan");
			var file = document.getElementById("gaishuImgFile").files[0];
			//将文件以Data URL形式读入页面 
			reader.readAsDataURL(file);
			reader.onload=function(e){
				var result=document.getElementById("gaishuImg");
				var _src = this.result
				result.src = _src;
				$("#subgaishuImg").click(function(){
					var gsImg = document.getElementById("gsImg");
					gsImg.innerHTML='<img id="cropImg" style="height100%;width:auto;" src="' + _src +'" />';
					$("#personImg").prop("src",_src);
					_tan.hide();

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
				});
			}
		});
		$("#caiqie").click(function(){
			$("#gsImg .jcrop-holder").hide();
		})

        $(function(){
            // 点击弹窗其他地方关闭
            $(".tan").click(function(){
                $(this).hide();
            });
            $(".tan_main").click(function(event){
                event.stopPropagation();
            });

            //概述 图片上传
            $(".gs1 .an").click(function(){
            	$("#gaishu").show();
            });

			
            //基本信息
            $(".basic .last .add").click(function(){
            	var obj_ul = $(this).parents(".basic").find('.ul1');
            	var li_html = '<li class="li1">';
					li_html += '<span class="s1"><input type="text" class="inp1"></span>';
					li_html += '<span class="s2"><input type="text" class="inp1"></span>';
					li_html += '</li>';
				obj_ul.append(li_html);
            })
            $(".refresh").click(function() {
            	$(".basic.act").hide().removeClass('act').siblings('.basic').addClass('act').show();
            });

            //添加相册
            $(".addxc").click(function(){
            	$("#addxiangce").show();
            })
            //删除相册里的图片
            $(".xcD").delegate(".del","click",function(){
            	$(this).parents("li").remove();
            });
            // 批量上传
            $(".addimg").click(function(){
            	$("#piliangxiangce").show();
            })
            $("#piliangxiangce").delegate(".del","click",function(){
            	$(this).parents("li").remove();
            });

            //参考资料
            $(".ck .add").click(function() {
            	var obj_ul = $(this).parents(".ck").find('.ul1');
            	var li_html = '<li>';
					li_html += '<span class="s1"><input type="text" class="inp1"></span>';
					li_html += '<span class="s2"> 备注或链接 </span>';
					li_html += '<span class="s3"><input type="text" class="inp1"></span>';
					li_html += '<span class="del">删除</span>';
					li_html += '</li>';
				obj_ul.append(li_html);
            });
            $(".ck").delegate(".del","click",function(){
            	var lino = $(this).parents(".ck").find("li").length;
            	if(lino>1){
            		$(this).parents("li").remove();
            	}else{
            		$(this).parents("li").find("input").val("");
            	}
            });

            //创建成功
            $(".an_create").click(function(){
            	$("#success").show();
            })
        })
    </script>
</body>
</html>