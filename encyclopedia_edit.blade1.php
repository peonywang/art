<!DOCTYPE html>
<head>
	<!-- @include("home/common/meta") -->
	<title>词条编辑</title>
	<?php include("common/meta.html") ?>
    <!-- <title>词条编辑</title> -->
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="member/css/member.css">
	<!-- <link rel="stylesheet" href="/index/common/swiper/swiper.min.css">
	<script type="text/javascript" src="/index/common/swiper/swiper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/index/member/css/member.css"> -->
	<link rel="stylesheet" href="/Editor/themes/default/default.css" />
	<script charset="utf-8" src="/Editor/kindeditor-all-min.js"></script>
	<script charset="utf-8" src="/Editor/lang/zh-CN.js"></script>
	<script src="/index/layer/layer.js"></script>
	<script>
		KindEditor.ready(function(K) {
			window.editor = K.create('textarea[name="content"]', {
				afterBlur: function () { editor.sync(); },
				langType : 'zh-CN',
				items : [
					'justifyleft', 'justifycenter', 'justifyright','justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent',  'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
					'italic', 'underline', 'link']
			});

		});
	</script>

	<script>
        KindEditor.ready(function(K) {
            var editor1 = K.editor({
                allowFileManager : true,
            });
            //单个图片上传
            K('.deac_img').click(function() {
                editor1.loadPlugin('image', function() {
                    editor1.plugin.imageDialog({
                        showRemote : false,
                        imageUrl   : K('#deac_img').val(),
                        clickFn : function(url, title, width, height, border, align) {
                            //$("#bannerImage").attr("url",url);
                            $(".preview").attr("src",url);
                            $(".gs1 .img1").attr("src",url);
                            $("input[name='deac_img']").val(url);
                            K('#deac_img').val(url);
                            editor1.hideDialog();
                        }
                    });
                });
            });
            //批量图片上传
            K("#btn").click(function() {
                var that=$(this)
                editor.loadPlugin('multiimage', function() {
                    editor.plugin.multiImageDialog({
                        clickFn : function(urlList) {
                            //var div = that.parents().parents().find('#piclist'+that.attr('alid'));
                            var div = K('.all');
                            div.html('');
                            K.each(urlList, function(i, data) {
                               // div.append('<li><div class="imgD"><img src="' + data.url + '" class="img1" ><textarea class="inp1" name="" id="" cols="30" placeholder="概括性文字"></textarea></div></li>');
				            	console.log(22); console.log(div);
								div.append('<li><img src="' + data.url + '" class="img1" alt=""><span class="del"></span></li>');
                            });
								div.append('<li><img src="artist/images/person.jpg" class="img1" alt=""><span class="del"></span></li>');
                            
			            	console.log(33); console.log(div); console.log(urlList);
                            editor.hideDialog();
                        }
                    });
                });
            });
        });


	</script>



</head>
<body>

<!-- @include("home/common/member_top") -->
<div id="box">
	<div id="test">
	</div>
</div>
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
	<form id="baikeform">
		<input type="hidden" name="id" value="{{$data['id']}}">
		<input type="hidden" name="class" value="1">
		<!-- <input type="hidden" name="img_des" value="{{@$info['ab_img_des']}}"> -->
		<!-- <input type="hidden" name="typeid" value="{{$data['typeid']}}"> -->
	<div class="edit_right">
		<div class="e_r_nr" style="margin-left:15%">
			<div class="tit">{{$data['title']}} </div>
			<!-- 概述 -->
			<div class="e_r_d" id="edit1">
				<h2>概述<span class="del"></span></h2>
				<!-- <div class="gs">
					<div class="gs1">
						@if(@$info->ab_deac_img)
						 <img class="img1 citiao" img_des="" src="{{stripslashes(@$info->ab_deac_img)}}" alt="">
						@else
						 <img class="img1 citiao" img_des="" src="/index/member/images/default.png" alt="">
					    @endif
						<a href="javascript:;" class="an" value="">上传</a>
						<input type="hidden" name="deac_img" value="{{@$info['ab_deac_img']}}">
					</div>
					<div class="gs2">
						<textarea class="inp1" name="desc" id="gaisu" cols="" rows="15" placeholder="简单概括描述词条的主要内容和相关信息。">{{@$info->ab_desc}}</textarea>
					</div>
				</div> -->
				<div class="gs">
						<div class="gs1">
							<img class="img1" src="member/images/default.png" alt="">
							<a href="javascript:;" class="an">上传</a>
							<input type="hidden" name="deac_img" value="{{@$info['ab_deac_img']}}">
						</div>
						<div class="gs2">
							<textarea class="inp1" name="" id="" cols="" rows="15" placeholder="简单概括描述词条的主要内容和相关信息。"></textarea>
						</div>
					</div>
			</div>
			<!-- 基本信息栏 -->
			<div class="e_r_d" id="edit2">
				<h2>基本信息栏<span class="refresh">更换模板</span></h2>
				<!-- {{--人物模板--}} -->

				<!-- <div class="basic act" classid="1">

					<ul class="ul1">
						<li class="li1">
							<span class="s1">中文名</span>
								<span class="s2">
									<input type="text" name="zh_name" class="inp1" value="{{@$info->ab_zh_name}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">类型</span>
								<span class="s2">
                            {{@$fenlie_html}}
								</span>
						</li>
						<li class="li1">
							<span class="s1">出生日期</span>
								<span class="s2">
									<input type="text" name="birthdate" class="inp1" value="{{@$info->ab_birthdate}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">外文名</span>
								<span class="s2">
									<input type="text" name="en_name" class="inp1" value="{{@$info->ab_en_name}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">逝世日期</span>
								<span class="s2">
									<input type="text" name="diedate" class="inp1" value="{{@$info->ab_diedate}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">别名</span>
								<span class="s2">
									<input type="text" name="bieming" class="inp1" value="{{@$info->ab_bieming}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">职业</span>
								<span class="s2">
									<input type="text" name="zhiye" class="inp1" value="{{@$info->ab_zhiye}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">国籍</span>
								<span class="s2">
									<input type="text" name="guoji" class="inp1" value="{{@$info->ab_guoji}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">毕业学校</span>
								<span class="s2">
									<input type="text" name="school" class="inp1" value="{{@$info->ab_school}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">民族</span>
								<span class="s2">
									<input type="text" name="mingzu" class="inp1" value="{{@$info->ab_mingzu}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">主要成就</span>
								<span class="s2">
									<input type="text"  name="chengjiu" class="inp1" value="{{@$info->ab_chengjiu}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">出生地</span>
								<span class="s2">
									<input type="text" name="birthadress" class="inp1" value="{{@$info->ab_birthadress}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">信仰</span>
								<span class="s2">
									<input type="text" name="xinyang" class="inp1" value="{{@$info->ab_xinyang}}">
								</span>
						</li>
						@if(isset($attr) && !empty(@$attr))
							@foreach(@$attr as $Key=>$v)
								@if(@$v->at_type == 1)
						<li class="li1">
							<span class="s1"><input type="text" name="attr1[]" value="{{$v->at_keyname}}" class="inp1 attr"></span>
								<span class="s2">
									<input type="text" class="inp1 zhi" name="attrval1[]" value="{{$v->at_keyvalue}}">
								</span>
						</li>
								@endif
							@endforeach
							@else
							<li class="li1">
								<span class="s1"><input type="text" name="attr1[]" class="inp1 attr"></span>
								<span class="s2">
									<input type="text" class="inp1 zhi" name="attrval1[]">
								</span>
							</li>
							@endif

					</ul>
					<div class="last"><span class="add">添加自定义项</span></div>
					<div class="dis">
						请参照项目说明填写。若某项不适合当前词条，可留空
					</div>
				</div> -->

				<!-- {{--事物模板--}} -->
				<!-- <div class="basic" style="display: none;" classid="2" id="thing">
					<ul class="ul1">
						<li class="li1">
							<span class="s1">中文名</span>
								<span class="s2">
									<input type="text" name="zh_name2" class="inp1" value="{{@$info->ab_zh_name}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">类型</span>

									{{@$fenlie_html2}}

						</li>
						<li class="li1">
							<span class="s1">外文名</span>
								<span class="s2">
									<input type="text" name="en_name2" class="inp1" value="{{@$info->ab_en_name}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">发展</span>
								<span class="s2">
									<input type="text" name="fazhan2" class="inp1" value="{{@$info->ab_fazhan}}">
								</span>
						</li>
						<li class="li1">
							<span class="s1">代表画家</span>
								<span class="s2">
									<input type="text" name="artist2" class="inp1" value="{{@$info->ab_artist}}">
								</span>
						</li>
						@if(isset($attr) && !empty(@$attr))
							@foreach($attr as $key=>$v)
								@if($v->at_type == 1)
						<li class="li1">
							<span class="s1"><input type="text" name="attr2[]" value="{{$v->at_keyname}}" class="inp1 attr"></span>
								<span class="s2">
									<input type="text" class="inp1 zhi" name="attrval2[]" val="val" value="{{$v->at_keyvalue}}">
								</span>
						</li>
								@endif
							@endforeach
							@else
							<li class="li1">
								<span class="s1"><input type="text" name="attr2[]" class="inp1 attr"></span>
								<span class="s2">
									<input type="text" class="inp1 zhi" name="attrval2[]" val="val">
								</span>
							</li>
							@endif
					</ul>
					<div class="last"><span class="add">添加自定义项</span></div>
					<div class="dis">
						请参照项目说明填写。若某项不适合当前词条，可留空
					</div>
				</div> -->

			</div>
			<!-- 正文 -->
			<div class="e_r_d" id="edit3">
				<h2>正文</h2>
				<div class="zw">
					<textarea class="inp1" name="content" id="content" style="width:750px;height:300px;visibility:hidden;" >{{@$info->ab_content}}</textarea>
				</div>
			</div>
			<!-- 相册 -->
			<div class="e_r_d" id="edit4">
				<div class="xc">
					<!-- @if(count($data['album'])>0) -->
						<!-- @foreach($data['album'] as $key=>$v) -->
					<div class="xcD" id="album{{$v->al_id}}">
						<h2><span class="title">{{$v->al_name}}</span><span class="del album" id="{{$v->al_id}}"></span></h2>
						<ul class="ul1 picture" id="piclist{{$v->al_id}}">

						</ul>
						<div class="anD">
							<a   class="an addimg" alid="{{$v->al_id}}" >上传图片</a>
						</div>
					</div>
						<!-- @endforeach -->
					<!-- @endif -->
					<div class="anD">
						<a href="javascript:;" class="an addxc">添加相册分类</a>
					</div>
				</div>
			</div>
			<!-- 参考资料 -->
			<div class="e_r_d" id="edit5">
				<h2>参考资料</h2>
				<div class="ck">
					<!-- <ul class="ul1">
						@if(isset($attr) && !empty(@$attr))
							@foreach($attr  as $key=>$v)
								@if($v->at_type == 2)
						<li>
								<span class="s1">
									<input type="text" class="inp1 attr" value="{{$v->at_keyname}}" name="ziliao[]">
								</span>
							<span class="s2"> 备注或链接 </span>
								<span class="s3">
									<input type="text" class="inp1 val" value="{{$v->at_keyvalue}}" name="ziliaoval[]">
								</span>
							<span class="del attr2" id="{{$v->at_id}}">删除</span>
						</li>
									@endif
							@endforeach
							@else
							<li>
								<span class="s1">
									<input type="text" class="inp1 attr" value="" name="ziliao[]">
								</span>
								<span class="s2"> 备注或链接 </span>
								<span class="s3">
									<input type="text" class="inp1 val" value="" name="ziliaoval[]">
								</span>
								<span class="del attr2" id="">删除</span>
							</li>
							@endif
					</ul> -->
					<div class="anD">
						<span class="an add">添加</span>
					</div>
				</div>
			</div>
			<a href="javascript:;" class="an an_create">创建</a>
			<a href="javascript:;" class="an an_preview" onClick="window.location.href='/encyclopedia/introduction_show/{{@$data['id']}}';">预览</a>
		</div>
	</div>
		</form>
</div>
<!-- @include("home/common/bottom") -->
<!-- 概述 图片上传弹框-->
<div class="tan" id="gaishu" style="display: none;" >
	<div class="tan_main">
		<div class="tan_tit">图片上传</div>
		<div class="tan_nr">
			<label class="imgD">
				<img src="member/images/default.png" class="img1 preview" alt="">
				<div class="del deac_img"><span>重新选择</span></div>

			</label>
			<input type="text" class="inp1" name="img_dess" value=""  placeholder="图片说明">
		</div>
		<div class="anD">
			<a href="javascript:;" class="an img_des">确定</a>
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
			<input type="text" name="album" class="inp1 w400" placeholder="输入相册名称">
		</div>
		<div class="anD">
			<a href="javacript:;" class="an addalbum">确定</a>
		</div>
	</div>
</div>
<!-- 相册批量上传 -->
<div class="tan" id="piliangxiangce">
	<div class="tan_main">
		<div class="tan_tit">相册批量上传</div>
		<div class="tan_nr piliang">
			<label class="d1" id="btn">
				<span class="inp1 btn" >浏览本地图片</span>
				<span class="an">浏览</span>
			</label>
			<ul class="imgD all" id="piclistdel">
			</ul>
		</div>
		<div class="anD">
			<a href="javascript:;" class="an duotu">确定</a>
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
		<div class="anD">
			<a href="javascript:;" class="an" onclick="$(this).parent().parent().parent('#success').hide();">确定</a>
		</div>
	</div>
</div>
<!-- {{--创建失败--}} -->
<div class="tan" id="loose" style="display: none;">
	<div class="tan_main">
		<div class="tan_tit"><span class="red font30">很遗憾</span></div>
		<div class="tan_nr">
			您的词条信息未填写完整，请返回继续完善相关信息。
		</div>
		<div class="anD">
			<a href="javascript:;" class="an" onclick="$(this).parent().parent().parent('#loose').hide();">确定</a>
		</div>
	</div>
</div>

<script>
	$(function(){
       $('#piliangxiangce').css('display','none');
        $('.tan').hide();

		// if('{{$info['ab_class']}}'){
		// 	$('input[name="class"]').val('{{$info['ab_class']}}');
		// }
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
       //概述图片介绍
		$(".anD .img_des").click(function(){
			var img_des =  $("input[name='img_dess']").val();
			if($.trim(img_des) == "") {
                layer.alert('图片说明为空',{icon:5,offset:200});
                return false;
			}
			$("input[name='img_des']").val(img_des);
			$("#gaishu").hide();
		})


		//自定义事物基本信息
		$(".basic .last .add").click(function(){
			var id = $(".e_r_d .act").attr("classid");
            $("input[name='class']").attr('value',id);
			var obj_ul = $(this).parents(".basic").find('.ul1');
			if(id == 1){
				var li_html = '<li class="li1">';
				li_html += '<span class="s1"><input type="text" name="attr1[]"   class="inp1 attr"></span>';
				li_html += '<span class="s2"><input type="text" name="attrval1[]" class="inp1 zhi"></span>';
				li_html += '</li>';
			}else if(id == 2){
				var li_html = '<li class="li1">';
				li_html += '<span class="s1"><input type="text" name="attr2[]"   class="inp1 attr"></span>';
				li_html += '<span class="s2"><input type="text" name="attrval2[]" class="inp1 zhi"></span>';
				li_html += '</li>';
			}
			obj_ul.append(li_html);
		})
		$(".refresh").click(function() {
			$(".basic.act").css('display','none').removeClass('act').siblings('.basic').addClass('act').css('display','block');
			$("input[name='class']").val($(".basic.act").attr("classid"));
		});
		// if('{{@$info->ab_leixing == 2}}'){
		// 	$(".basic.act").css('display','none').removeClass('act').siblings('.basic').addClass('act').css('display','block');
		// }

		//添加相册
		$(".addxc").click(function(){
			$("#addxiangce").show();
		})

		//添加相册程序
		$(".addalbum").click(function(){
			var a_name = $("input[name='album']").val().trim();
			$.post('/encyclopedia/edit/album',{id:"{{$data['id']}}",album:a_name},function(data){
				if(data.code == 200){
                     $(".e_r_d .xc").prepend(data.html);
					$("#addxiangce").hide();
					return false;
				}else if(data.code==404){
                   layer.alert('相册名已存在',{icon:5,offset:200});
					return false;
				}
			},'json');
		})

		//删除相册
		$("body").on('click','#edit4 .album',function(){
			var name = $(this).prev("span").html();
			var res = confirm("确认删除<<"+name+">>相册分类");
			if(!res) return false;
			var that = $(this);
			if($(this).attr("id") == "") {
				$(this).parent().parent('div').remove();
			}else{
				$.post('/encyclopedia/del/album',{id:$(this).attr("id")},function(data){
					console.log(data)
					if(data.code == 200){
						layer.alert("删除成功",{icon:6,offset:200});
						that.parent().parent('div').remove();
					}
				},'json');
			}
		})

		//批量上传图片
		var dataalid=0;
        $('body').on('click','.addimg',function(){
            $('#piliangxiangce').show();
            $('#piclistdel').html('');
            dataalid = $(this).attr('alid');
            console.log('kk:'+dataalid);
        })
        //批量上传图片 ---弹出层 删除
        $('#piclistdel').delegate('.del','click',function(){
            $(this).parents('li').remove()
        })

        ////批量上传图片 ---弹出层 隐藏
		$(".duotu").click(function(){
		    console.log(3333);
			// $("#piliangxiangce").hide();


			// var liNo = $('#piclistdel li').length;
			// var imgSrc;
			// var addpiclist;
			// for(var i = 0; i < liNo; i++;){
			// 	imgSrc = $('#piclistdel li').eq(i).find('img').attr("src");
			// 	addpiclist += '<li>';
			// 	addpiclist += '<div class="imgD">';
			// 	addpiclist += '<img src="'+imgSrc[i]+'" class="img1" alt="">';
			// 	addpiclist += '<textarea class="inp1" name="" id="" cols="30" placeholder="概括性文字"></textarea>';
			// 	addpiclist += '</div>';
			// 	addpiclist += '</li>';
			// }
			// $("#piclist"+dataalid).append(addpiclist);
		})
        //删除图片


		//参考资料
		$(".ck .add").click(function() {
			var obj_ul = $(this).parents(".ck").find('.ul1');
			var li_html = '<li>';
			li_html += '<span class="s1"><input type="text" name="ziliao[]" value="" class="inp1 attr"></span>';
			li_html += '<span class="s2"> 备注或链接 </span>';
			li_html += '<span class="s3"><input type="text" name="ziliaoval[]" value="" class="inp1 val"></span>';
			li_html += '<span class="del attr2" id="">删除</span>';
			li_html += '</li>';
			obj_ul.append(li_html);
		});



		//提交词条
		$(".an_create").click(function() {

			var option = {
				url: '/encyclopedia/edit/store',
				method: 'POST',
				dataType: 'JSON',
				success: function (data) {
					console.log(data);
					if (data.code == 400) {
						$('#loose').show();

					} else if (data.code == 200) {
						$('#success').show();
					}
				}
			}
			$("#baikeform").ajaxSubmit(option);
			return false;
		})

		//参考资料删除
    $('body').on('click','#edit5 .attr2',function(){
		var that = $(this);
		if($(this).attr("id") == ""){
			$(this).parent('li').remove();
		}else{
			$.post('/encyclopedia/del/ziliao',{id:$(this).attr("id")},function(data){
                console.log(data)
				if(data.code == 200){
					layer.alert("删除成功",{icon:6,offset:200});
					that.parent('li').remove();
				}
			},'json');
		}
	})




	})


</script>
</body>
</html>