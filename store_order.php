<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术商店-提交订单</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
	<?php include("top.html") ?>
	<script>$(function () {$(".com-top .nav a[name='store']").addClass('act');})</script>
	<div class="bannerD3">
		<div class="w">
			<a href="index.php">首页</a> - <a href="store.php">艺术商店</a> - <span>提交订单</span>
		</div>
    </div>
    <div class="index_main page_main">
    	<div class="w">
            <!-- 提交订单 -->
            <div class="cartD orderD nr">
                <h1>提交订单</h1>
                <div class="manner">
                    <h2>收货信息</h2>
                    <!-- 收货信息 -->
                    <div class="receipt">
                        <div class="adddress"><a href="javascript:;" class="an">添加地址</a></div>
                        <div class="rD">
                            <div class="d1">
                                <p>收货人：陈先生</p>
                                <p>收货地址：北京市通州区70号百合湾25号楼</p>
                                <p>联系电话：15558888855</p>
                            </div>
                            <div class="d2">
                                <a href="javascript:;" class="an">修改地址</a>
                            </div>
                        </div>
                    </div>
                    <!-- 修改地址 -->
                    <table class="modify" style="display: none;">
                        <tr>
                            <td class="td1" width="110">* 收货人：</td>
                            <td><input type="text" class="inp1" name=""></td>
                        </tr>
                        <tr>
                            <td class="td1">公司名称：</td>
                            <td><input type="text" class="inp2" name=""></td>
                        </tr>
                        <tr>
                            <td class="td1">* 收货地址：</td>
                            <td><input type="text" class="inp2" name=""></td>
                        </tr>
                        <tr>
                            <td class="td1">邮编：</td>
                            <td><input type="text" class="inp1" name=""></td>
                        </tr>
                        <tr>
                            <td class="td1">* 手机号码：</td>
                            <td><input type="text" class="inp1" name=""></td>
                        </tr>
                        <tr>
                            <td class="td1">座机号码：</td>
                            <td><input type="text" class="inp1" name=""></td>
                        </tr>
                        <tr>
                            <td class="td1">购买目的是什么：</td>
                            <td><textarea class="area1"></textarea></td>
                        </tr>
                        <tr>
                            <td class="td1">备注信息：</td>
                            <td><textarea class="area1"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="javascript:;" class="an">确定</a>
                                <span class="dis">* 号为必填信息</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="manner">
                    <h2>送货方式</h2>
                    <div class="radioD">
                        <label class="radio"><input type="radio" name="express"><span><img src="store/images/ems.png" alt="ems"></span></label>
                        <label class="radio"><input type="radio" name="express"><span><img src="store/images/shunfeng.png" alt="顺丰"></span></label>
                    </div>
                </div>
                <div class="manner">
                    <h2>付款方式</h2>
                    <div class="radioD">
                        <label class="radio"><input type="radio" name="pay"><span><img src="store/images/wechatpay.png" alt="微信支付">微信支付</span></label>
                        <label class="radio"><input type="radio" name="pay"><span><img src="store/images/alipay.png" alt="支付宝支付">支付宝支付</span></label>
                        <label class="radio"><input type="radio" name="pay"><span><img src="store/images/transfer.png" alt="转账支付">转账支付</span></label>
                    </div>
                </div>
                <div class="selD">
                    <a href="javascript:;" class="an">立即支付</a>
                </div>
            </div>
    		
    		<!-- 精选推荐 -->
	    	<div class="artistD nr">
		    	<div class="recommend" style="padding:0;">
		    		<h3 class="h3_tit">精选推荐</h3>
		    		<ul class="artlistD recommend-right">
	                    <?php for($i=1;$i<5;$i++){ ?>
		    			<li>
		    				<a class="imgD" href="store_details.php">
                                <img src="index/images/pro2.jpg" alt="献给大卫的兔子">
                                <div class="priD">
                                    <p class="price">¥ 8.222</p>
                                    <p class="p2">立即购买</p>
                                </div>
                            </a>
                            <p class="p1">徐洋<?php echo $i; ?></p>
                            <p class="p2">献给大卫的兔子</p>
                            <p class="dis">卡纸，墨水，马克笔，喷漆 21×29cm</p>
                            <p class="dis">
                                <span class="see">2360</span>
                                <span class="favorite">1234</span>
                            </p>
		    			</li>
	                    <?php } ?>
		    		</ul>
		    	</div>
	    	</div>
    	</div>
    </div>
	<?php include("common/bottom/bottom.html") ?>
    <!-- 订单已生成 -->
    <div class="tan" id="success"  style="display: none;">
        <div class="tan_main">
            <div class="tan_tit">订单已生成</div>
            <div class="tan_nr">
                <p>如果未能支付成功，请前往<span class="textback">订单中心</span>完成支付。如有其他问题，请通过以下方式获得售后支持。</p>
                <p><span class="marg">官方热线 : 010-89515470</span><span class="marg">官方邮箱 : service@artpc.cn</span></p>
            </div>
            <div class="tan_sub">
                <div class="anD">
                    <a href="" class="an">查看订单</a>
                </div>
                <p><a class="a1" href="">支付遇到问题</a></p>
            </div>
            <span class="close"></span>
        </div>
    </div>
    <!-- 微信支付 -->
    <div class="tan" style="display: none;" id="wechatpay">
        <div class="tan_main">
            <div class="tan_tit">微信支付</div>
            <div class="tan_nr">
                <p><img class="erwei" src="store/images/wechatpayerwei.png" alt="微信支付"></p>
                <p>使用<span class="textback">微信扫描上方二维码</span>即可完成支付。</p>
                <p>订单已生成，如果未能支付，请前往<span class="textback">订单中心</span>完成支付！</p>
            </div>
            <div class="tan_sub">
                <div class="anD">
                    <a href="" class="an">确定</a>
                </div>
            </div>
            <span class="close"></span>
        </div>
    </div>
    <!-- 支付宝支付 -->
    <div class="tan" style="display: none;" id="alipay">
        <div class="tan_main">
            <div class="tan_tit">支付宝支付</div>
            <div class="tan_nr">
                <p><img class="erwei" src="store/images/alipayerwei.png" alt="支付宝支付"></p>
                <p>使用<span class="textback">支付宝扫描上方二维码</span>即可完成支付。</p>
                <p>订单已生成，如果未能支付，请前往<span class="textback">订单中心</span>完成支付！</p>
            </div>
            <div class="tan_sub">
                <div class="anD">
                    <a href="" class="an">确定</a>
                </div>
            </div>
            <span class="close"></span>
        </div>
    </div>
    <!-- 转账支付 -->
    <div class="tan" style="display: none;" id="UnionPay">
        <div class="tan_main">
            <div class="tan_tit">转账支付</div>
            <div class="tan_nr">
                <p><img src="store/images/UnionPay.png" alt="转账支付" style="margin-bottom: 30px;"></p>
                <p>
                    <span class="textback marg font15">开户名称 : 北京朴城文化传播有限公司</span>
                    <span class="textback marg font15">银行账号 : 02000 49809 20003 2658</span> 
                </p>
                <p><span class="textback marg font15">开户银行 : 中国工商银行北京分行九棵树支行</span></p>
            </div>
            <div class="tan_sub">
                <div class="anD">
                    <a href="" class="an">确定</a>
                </div>
                <p class="dis">请在下单后48小时内汇款，收到汇款后我们会及时与您取得联系。</p>
            </div>
            <span class="close"></span>
        </div>
    </div>
    <script>
        $(function(){
            // 点击弹窗其他地方关闭
            $(".tan").click(function(){
                $(this).hide();
            });
            $(".tan_main").click(function(event){
                event.stopPropagation();
            });
            $(".tan .close").click(function(){
                $(this).parents(".tan").hide();
            })
            //修改地址
            $(".receipt .d2 .an").click(function() {
                $(".receipt").hide();
                $(".modify").show();
            });
            $(".modify .an").click(function() {
                $(".receipt").show();
                $(".modify").hide();
            });

            //前端展示
            $(".selD .an").click(function() {
                $(".tan").show();
            });

        })
    </script>
</body>
</html>