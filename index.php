<!DOCTYPE html>
<head>
	<?php include("common/meta.html") ?>
    <title>美术百科－首页</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
</head>
<body>
	<?php include("top_home.html") ?>
    <div class="bannerD">
        <!-- banner -->
        <div class="swiper-container banner" id="swiper-banner">
            <div class="swiper-wrapper">
                <?php for($i=1;$i<5;$i++){ ?>
                    <a class="swiper-slide" href="" style="background-image:url('index/images/ban<?php echo $i; ?>.jpg')"></a>
                <?php } ?>
            </div>
        </div>
        <!--  搜索 -->
        <div class="searchD">
            <div class="search">
                <input type="text" placeholder="请输入您要检索的关键词">
                <button><img src="common/images/zoom.png">搜索</button>
            </div>
            <p class="p1">
                <span>已收录 280000 个词条</span>
                <span>已浏览 8580000 人次</span>
            </p>
        </div>
        <!-- 左侧图标 -->
        <div class="minD">
            <div class="shareD">
                <div class="icon"></div>
                <div class="bdsharebuttonbox disD">
                    <a href="#" class="weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a href="#" class="sina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a href="#" class="qqweibo" data-cmd="tqq" title="分享到腾讯微博"></a>
                    <a href="#" class="qq" data-cmd="sqq" title="分享到QQ好友"></a>
                </div>
            </div>
            <div class="inforD disF">
                <span class="icon"></span>
                <div class="disD swiper-container" id="inforD_dis">
                    <div class="swiper-wrapper">
                        <?php for($i=1;$i<5;$i++){ ?>
                            <div class="swiper-slide">
                                <div class="tit"><strong>暖春之约:<?php echo $i; ?> <br>中日书法展上海开幕</strong></div>
                                <div class="textD">
                                    <p>沪上四月，暖春之约。</p>
                                    <p>2018年，是《中日和平友好条约》、《中日长期贸易协定》签订40周年、《中日投资保护协定》签订30周年，也是中国改革开放40周年。</p>
                                    <p>为促进两国之间的民间友好往来和文化交流，由上海市国际文化传播协会和日本群马县政府共同主办，庄希泉基金会，群马县日本中国友好协会，群马县书道协会协办，上海吴昌硕艺术研究协会和上海吴昌硕纪念馆共同承办的《纪念中日和平友好条约签订40周年暨日本上野三碑入选世界记忆名录.中日书法展》，于2018年4月12日——15日在上海吴昌硕纪念馆举行。此次活动的举办适值2018年博鳌亚洲论坛刚刚闭幕，国家主席习近平在海南博鳌出席博鳌亚洲论坛的主旨演讲《开放共创繁荣 创新引领未来》，余音尚在绕梁，4月12日上午10时，“中日书法展”开幕式在中、日两国众多嘉宾的见证参与下，隆重举办。</p>
                                </div>
                                <a href="">查看详情</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="prev" id="ban-prev"></div>
            <div class="ban-pagination" id="ban-pagination"></div>
            <div class="next" id="ban-next"></div>
        </div>
        <!-- 右侧图标 -->
        <div class="scroll-down" title="下一屏"></div>
    </div>
	<div class="index_main">
		<div class="w">
            <!-- 美术百科 -->
            <div class="nr infor">
                <div class="inforD">
                    <h2>
                        <p class="p1">美术百科</p>
                        <img src="index/images/information.png" alt="art information">
                    </h2>
                    <div class="pagination" id="infor-pagination"></div>
                    <div class="choose">
                        <a href="">美术理论</a>
                        <a href="">美术活动</a>
                        <a href="">美术创作</a>
                    </div>
                </div>
                <div class="swiper-container newslist" id="swiper-infor">
                    <div class="swiper-wrapper">
                        <?php for($i=1;$i<4;$i++){ ?>
                            <ul class="swiper-slide">
                                <?php for($y=1;$y<4;$y++){ ?>
                                    <li <?php if($y==1){echo 'class="act"';} ?>>
                                        <a href="">
                                        <h3>不容忽略画之贵“气”--党培东<span class="right">04-28</span> </h3>
                                        <p>古人讲“下气为水，上气为雾”，谢赫六法评画之首为“气韵生动”，可见“气”之重要。</p>
                                        <img class="img1" src="index/images/inforimg<?php if($y==2){echo 2;} ?>.jpg" alt="img1">
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
                <!-- 美术人物 -->
                <div class="figures">
                    <h2>
                        <p class="p1">美术人物</p>
                        <img src="index/images/figures.png" alt="art figures">
                    </h2>
                    <div class="pagination" id="figures-pagination"></div>
                    <div class="swiper-container figureslist" id="swiper-figures">
                        <div class="swiper-wrapper">
                            <?php for($i=1;$i<4;$i++){ ?>
                                <div class="swiper-slide">
                                    <?php for($y=1;$y<7;$y++){ ?>
                                        <a href="">
                                            <div class="imgD">
                                                <img class="user" src="common/images/user.jpg" alt="头像">
                                                <div class="see"><img src="common/images/eye_inv.png" alt=""></div>
                                            </div>
                                            <span>佐藤秀贵</span>
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 推荐下载 -->
            <div class="nr recommend">
                <div class="recommend-left">
                    <h2>
                        <p class="p1">推荐下载</p>
                        <img src="index/images/recommend.png" alt="recommend">
                    </h2>
                    <div class="pagination" id="rec-pagination"></div>
                    <div class="choose">
                        <a href="">书法</a>
                        <a href="">国画</a>
                        <a href="">油画</a>
                        <a href="">篆刻</a>
                        <a href="">陶瓷</a>
                        <a href="">全部</a>
                    </div>
                </div>
                <div class="swiper-container recommend-right" id="swiper-recommend">
                    <div class="swiper-wrapper">
                        <?php for($i=1;$i<10;$i++){ ?>
                        <div class="swiper-slide">
                            <a class="imgD" href="">
                                <img class="pro" src="index/images/pro1.jpg" alt="达芬奇《蒙娜丽莎》">
                                <div class="priD">
                                    <p class="p1">立即下载</p>
                                </div>
                            </a>
                            <p class="p1">达芬奇《蒙娜丽莎》<?php echo $i; ?></p>
                            <p class="dis">已下载 : 160<span class="right">格式 : TIFI</span></p>
                            <p class="dis dis1">尺寸 : 7087×3543像素 7087×3543像素</p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- 热搜排行 -->
            <div class="nr hot">
                <!-- 热搜排行 -->
                <div class="hotsearch">
                    <h2>
                        <p class="p1">热搜排行</p>
                        <img src="index/images/hot.png" alt="Hot search bar">
                    </h2>
                    <ol class="barol barol2">
                        <?php for($i=1;$i<6;$i++){ ?>
                            <li>
                                <span class="no"><?php echo $i; ?></span>
                                <span class="name">马王堆帛书</span>
                                <span class="bar"><?php echo 12345-4*$i; ?></span>
                            </li>
                        <?php } ?>
                    </ol>
                </div>
                <!-- 艺术资讯 -->
                <div class="encyclopedia">
                    <div class="swiper-container newslist" id="swiper-ency">
                        <div class="swiper-wrapper">
                            <?php for($i=1;$i<4;$i++){ ?>
                                <ul class="swiper-slide">
                                    <?php for($y=1;$y<4;$y++){ ?>
                                    <li>
                                        <h3>不容忽略画之贵“气”--党培东<span class="right">04-28</span> </h3>
                                        <p>古人讲“下气为水，上气为雾”，谢赫六法评画之首为“气韵生动”，可见“气”之重要。</p>
                                    </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="encyD">
                        <h2>
                            <p class="p1">艺术资讯</p>
                            <img src="index/images/encyclopedia.png" alt="art encyclopedia">
                        </h2>
                        <div class="swiper-container encyimg" id="swiper-encyimg">
                            <div class="swiper-wrapper">
                                <?php for($i=1;$i<4;$i++){ ?>
                                    <div class="swiper-slide">
                                        <img src="index/images/encyimg.jpg" alt="img1">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="pagination" id="ency-pagination"></div>
                        <div class="choose">
                            <a href="">展览资讯</a>
                            <a href="">业内资讯</a>
                            <a href="">国外资讯</a>
                        </div>
                    </div>
                </div>
            </div>
			<!-- 艺术商店 -->
			<div class="nr recommend store">
				<div class="recommend-left">
                    <h2>
                        <p class="p1">艺术商店</p>
                        <img src="index/images/store.png" alt="art store">
                    </h2>
                    <div class="pagination" id="store-pagination"></div>
					<div class="choose">
						<a href="">工笔</a>
						<a href="">写意</a>
						<a href="">兼工带写</a>
						<a href="">水墨</a>
						<a href="">重彩</a>
						<a href="">写实</a>
						<a href="">抽象</a>
					</div>
				</div>
                <div class="swiper-container recommend-right" id="swiper-store">
                    <div class="swiper-wrapper">
                        <?php for($i=1;$i<13;$i++){ ?>
                            <div class="swiper-slide">
                                <a class="imgD" href="">
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
                            </div>
                        <?php } ?>
                    </div>
                </div>
			</div>
			<!-- 站内数据 -->
			<div class="nr aggregate">
				<div class="agg-left">
					<ul>
						<li>
							<p class="p1">280000</p>
							<p class="p2">已收录词条 /条</p>
						</li>
						<li>
							<p class="p1">280000</p>
							<p class="p2">入住艺术家 /位</p>
						</li>
						<li>
							<p class="p1">280000</p>
							<p class="p2">高品质下载资源 /条</p>
						</li>
						<li>
							<p class="p1">280000</p>
							<p class="p2">可出售艺术品 /件</p>
						</li>
						<li>
							<p class="p1">280000</p>
							<p class="p2">注册用户 /位</p>
						</li>
					</ul>
					<p class="p3">美术百科艺术平台，为我们的用户提供更好的服务。</p>
				</div>
				<h2 class="agg-right">
					<p class="p1">站内数据</p>
                    <img src="index/images/agg.png" alt="aggregate">
				</h2>
			</div>
		</div>
	</div>
	<?php include("common/bottom/bottom.html") ?>
    <script>
        var windowH = $(window).height();
        var topH = $(".com-top").height();
        $(".bannerD").height(windowH - topH);
        $(function(){
            $(window).resize(function() {
                windowH = $(window).height();
                topH = $(".com-top").height();
                banH = $(".index_main").offset().top;
                $(".bannerD").height(windowH - topH);
            });
        })
        // banner
        var banner = new Swiper('#swiper-banner',{
            loop:true,
            autoplay: {
                disableOnInteraction: false,
            },
            pagination: {
                el: '#ban-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '#ban-next',
                prevEl: '#ban-prev',
            },
        });
        var inforD_dis = new Swiper('#inforD_dis', {
            loop:true
        })
        banner.controller.control = inforD_dis;
        inforD_dis.controller.control = banner;
        $(".minD .inforD").hover(function() {
            banner.autoplay.stop();
        }, function() {
            banner.autoplay.start();
        });

        $(function(){
            $(".minD .inforD").removeClass('disF');
        })
        // 美术百科(双向控制)
        var infor = new Swiper('#swiper-infor',{
            autoHeight:true,
            direction : 'vertical',
            pagination:{
                el:'#infor-pagination',
                clickable :true,
            },
        })
        $("#swiper-infor li").hover(function() {
            $(this).addClass('act').siblings('.act').removeClass('act');
        });
        // 美术人物
        var figures = new Swiper('#swiper-figures',{
            pagination:{
                el:'#figures-pagination ',
                clickable :true,
            },
            direction : 'vertical',
        })
        // 推荐下载
        var recommend = new Swiper('#swiper-recommend', {
            loop: true,
            // autoplay:true,
            autoHeight: true,
            pagination:{
                el:'#rec-pagination',
                clickable :true,
            },
            //网格分布
            slidesPerView:3,
            slidesPerGroup : 3,
        });
        // 艺术资讯(双向控制)
        var ency = new Swiper('#swiper-ency',{
            autoHeight:true,
            // direction : 'vertical',
        })
        var encyimg = new Swiper('#swiper-encyimg',{
            // autoplay:true,
            controller: {
                control: ency,
            },
            pagination:{
                el:'#ency-pagination',
                clickable :true,
            },
            autoHeight:true,
        })
        ency.controller.control = encyimg;//Swiper1控制Swiper2，需要在Swiper2初始化后

        // 艺术商店
        var store = new Swiper('#swiper-store', {
            loop: true,
            // autoplay:true,
            autoHeight: true,
            pagination:{
                el:'#store-pagination',
                clickable :true,
            },
            //网格分布
            slidesPerView:3,
            slidesPerGroup : 3,
        });

        //下一屏
        var banH = $(".index_main").offset().top;
        $(window).resize(function() {
            banH = $(".index_main").offset().top;
        });
        $(".scroll-down").click(function(){
            $("html,body").animate({scrollTop:banH-50}, 300);
        });
    // 分享
    window._bd_share_config = {
        "common":{
            "bdSnsKey":{},
            "bdText":"美术百科",
            "bdMini":"2",
            "bdMiniList":[],
            "bdPic":"",
            "bdStyle":"0",
            "bdSize":"32"
            },
        "share":{}
    };
    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
    </script>
</body>
</html>

