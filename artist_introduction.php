<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>艺术家-简介</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
    <link rel="stylesheet" href="introduction.css">
</head>
<body>
	<?php include("top.html") ?>
	<script>$(function () {$(".com-top .nav a[name='artist']").addClass('act');})</script>

	<div class="bannerD3">
		<div class="w">
			<a href="index.php">首页</a> - <a href="artist.php">艺术家</a> - <span>齐白石简介</span>
		</div>
    </div>

    <div class="index_main page_main">
        <div class="w">
        	<div class="nr eduD intnrD">
        		<div class="edu">
        			<div class="intnr">
        				<h1>
		        			齐白石简介
		        			<div class="right">
		        				<span class="share">
			        				68
			        				<div class="bdsharebuttonbox shareD">
										<a href="#" class="wechat" data-cmd="weixin" title="分享到微信"></a>
					                    <a href="#" class="sina" data-cmd="tsina" title="分享到新浪微博"></a>
					                    <a href="#" class="qqweibo" data-cmd="tqq" title="分享到腾讯微博"></a>
					                    <a href="#" class="qq" data-cmd="sqq" title="分享到QQ好友"></a>
			        				</div>
			        			</span>
		        				<span class="see">2360</span>
		        				<span class="favorite">652</span>
		        			</div>
		        		</h1>
		        		<p>
		        			中国画，简称“国画”。是我国传统造型艺术之一。从美术史的角度讲，民国前的都统称为古画。国画在古代无确定名称，一般称之为丹青，在世界美术领域中自成体系。中国画在内容和艺术创作上，体现了古人对自然、社会及与之相关联的政治、哲学、宗教、道德、文艺等方面的认识。主要是用毛笔、软笔或手指，用国画颜色和墨在帛或宣纸上作画的一种中国传统的绘画形式，是琴棋书画四艺之一。
		        		</p>
		        		<?php 
		        		$artDis=[
		        			["tit"=>"中文名", "text"=>"齐白石"],
		        			["tit"=>"字号", "text"=>"号渭青、濒生，别号白石、白石老人等"],
		        			["tit"=>"国籍", "text"=>"中国"],
		        			["tit"=>"出生地", "text"=>"湖南湘潭"],
		        			["tit"=>"祖籍", "text"=>"安徽砀山"],
		        			["tit"=>"逝世日期", "text"=>"1957年"],
		        			["tit"=>"毕业院校", "text"=>"私塾"],
		        			["tit"=>"出生日期", "text"=>"1864年"],
		        			["tit"=>"别名", "text"=>"原名纯芝，后改名璜"],
		        			["tit"=>"职业", "text"=>"画家"],
		        			["tit"=>"民族", "text"=>"汉"],
		        			["tit"=>"艺术类别", "text"=>"山水、花鸟、人物、书法、篆刻"],
		        		];
		        		?>
		        		<ul class="tab1 tab1_1">
		        			<?php foreach ($artDis as $k => $v) { ?>
		        			<li>
		        				<span class="s1"><?php echo $v["tit"]; ?></span>
		        				<span class="s2"><?php echo $v["text"]; ?></span>
		        			</li>
		        			<?php } ?>
		        		</ul>
        			</div>
        			<div class="intnr">
	        			<h2>介绍</h2>
	        			<div class="img1"><img src="artist/images/img1.jpg" alt="img1"></div>
	        			<p>
	        				中国画大致可分为；人物，山水、界画、花卉、瓜果、翎毛、走兽、虫鱼等画科；有工笔、写意、钩勒、设色、水墨等技法形式，设色又可分为金碧、大小青绿，没骨、泼彩、淡彩、浅绛等几种。主要运用线条和墨色的变化，以钩、皴、点、染，浓、淡、干、湿，阴、阳、向、背，虚、实、疏、密和留白等表现手法，来描绘物象与经营位置；取景布局，视野宽广，不拘泥于焦点透视。
	        			</p>
	        			<p>
	        				有壁画、屏幛、卷轴、册页、扇面等画幅形式，辅以传统的装裱工艺装璜之。人物画从晚周至汉魏、六朝渐趋成熟。山水、花卉、鸟兽画等至隋唐之际始独立形成画科。五代、两宋流派竞出，水墨画随之盛行，山水画蔚成大科。文人画在宋代已有发展，而至元代大兴，画风趋向写意；明清和近代续有发展，日益侧重达意畅神。在魏晋、南北朝、唐代和明清等时期，先后受到佛教艺术和西方绘画艺术的影响。中国画强调“外师造化，中得心源”，要求“意存笔先，画尽意在”，强调融化物我，创制意境，达到以形写神，形神兼备，气韵生动。
	        			</p>
	        			<p>
	        				国画历史悠久，宋朝以前绘图在绢帛上，材料昂贵，因此国画题材多以王宫贵族肖像或生活记录等，直至宋元朝后，纸材改良，推广与士大夫文人画兴起等，让国画题材技法多元，在画作上题诗，为书画同源之始。明朝之后，绘画推广到大众，成为市民生活的一部份，风俗画因此产生。清末，西风东渐，绘画材料多元，加入了西画元素，朝多方面发展。 
	        			</p> 
	        			<p>
		        			国画和西方绘画的原则有许多不同的地方，其重在神似不重形似，强调观察总结不强调现场临摹，运用散点透视法不用焦点透视法，重视意境不重视场景。现代国画的发展也开始吸收西方绘画的一些技巧，如明暗光影的配置，人体解剖的准确等，也有画家将国画的意境用于油画创作上。
		        		</p>
        			</div>
        			<div class="intnr">
        				<h2>中国画的特点</h2>
        				<div class="img1">
	        				<img src="artist/images/img2.jpg" alt="img2">
        					<p>宋代林椿工笔花鸟：果熟来禽图，绢本，设色</p>
        				</div>
        				<div class="img1">
	        				<img src="artist/images/img3.jpg" alt="img3">
        					<p>现代写意花鸟：鹰石山花，纸本，水墨</p>
        				</div>
        				<p>
        					中国画有着自己明显的特征。传统的中国画，依南朝谢赫的古画品录评论：<br> 
        					* 讲究“气韵生动”，不拘泥于物体外表的肖似，而多强调抒发作者的主观情趣。中国画讲求“以形写神”，追求一种“妙在似与不似之间”的感觉
        				</p>
        				<p>
        					* 讲究笔墨神韵，笔法要求：平、圆、留、重、变。墨法要求墨分五色，焦、浓、重、淡、清。<br> 
        					* 讲究“骨法用笔”，不讲究焦点透视，不强调环境对于物体的光色变化的影响<br> 
        					* 讲究空白的布置和物体的“气势”。<br> 
        					可以说西洋画是“再现”的艺术，中国画是“表现”的艺术。<br> 
        					国画是要表现“气韵”、“境界”。<br> 
        					绘画的工具<br>
        				</p>
        				<p>
        					“笔墨纸砚”是中国古代文人不可缺少的工具，号称“文房四宝”，其意义不止于书写绘画方面，中国文人对其给予了深厚的文化内涵和感情，历代文人书画大家和笔墨纸砚相关的故事举不胜举。
        				</p>
        				<h3>笔</h3>
        				<p>
        					毛笔是中国所创，并影响到朝鲜，日本，等亚洲广泛地域的传统书写习惯。毛笔分硬毫，软毫和兼毫，硬毫以狼毫（黄鼠狼尾）为代表，软毫以羊毫（山羊须）为代表，根据写字绘画，种类，以及个人习惯的不同，用笔也不一样，羊毫柔软，狼毫刚健，兼毫柔中带刚。中国的书法和绘画，都是与毛笔的分不开的。尤其以湖州（今浙江善琏）之湖笔，宣州（今安徽泾县）之宣笔，及江西进贤之笔为上。
        				</p>
        				<h3>墨</h3>
        				<p>
	        				墨分“油烟”和“松烟”两种，油烟墨用桐油或添烧烟加工制成；松烟墨用松枝烧烟加工制成。古代徽州所产之墨，历来为文人所喜爱，徽墨有金不换之美称。颜料有两种，使用起来会产生不同的效果，其一种是植物质的，如花青、滕黄、胭脂、牡丹红等，性能是透明、质细，但年久会褪色；另一种是矿物质的，如朱砂、朱漂、头青至三青、头绿至三绿、赭石、石黄、白粉等，性能是不透明，有覆盖力，年久不褪色。
	        			</p>
        			</div>
        			<div class="intnr">
        				<h2>美术作品</h2>
        				<ul class="worksD">
        					<?php for($i=1;$i<6;$i++){ ?>
	        					<li name="swiper-worksD<?php echo $i; ?>">
			        				<!-- <img class="img1" src="artist/images/img4.jpg" alt=""> -->
			        				<div class="img1" style="background-image: url('artist/images/img4.jpg')"></div>
	        						<p><span class="left">绘画作品</span><span class="right">[18]</span></p>
			        				<!-- Swiper -->
			        				<div class="swiper-worksD swiper-worksD<?php echo $i; ?>">
			        					<div class="swiper-works">
											<div class="swiper-container gallery-top">
											    <div class="swiper-wrapper">
													<div class="swiper-slide">
														<div class="imgD" style="background-image: url('artist/images/img7.jpg')"></div>
														<p>齐白石《虾》1</p>
													</div>
													<div class="swiper-slide">
														<div class="imgD" style="background-image: url('artist/images/img1.jpg')"></div>
														<p>齐白石《虾》2</p>
													</div>
													<div class="swiper-slide">
														<div class="imgD" style="background-image: url('artist/images/img2.jpg')"></div>
														<p>齐白石《虾》3</p>
													</div>
													<div class="swiper-slide">
														<div class="imgD" style="background-image: url('artist/images/img3.jpg')"></div>
														<p>齐白石《虾》4</p>
													</div>
													<div class="swiper-slide">
														<div class="imgD" style="background-image: url('artist/images/img4.jpg')"></div>
														<p>齐白石《虾》5</p>
													</div>
													<!-- <div class="swiper-slide"> <img src="artist/images/img1.jpg" alt="img1"> <p>齐白石《虾》2</p></div>
													<div class="swiper-slide"> <img src="artist/images/img2.jpg" alt="img2"> <p>齐白石《虾》3</p></div>
													<div class="swiper-slide"> <img src="artist/images/img3.jpg" alt="img3"> <p>齐白石《虾》4</p></div>
													<div class="swiper-slide"> <img src="artist/images/img4.jpg" alt="img4"> <p>齐白石《虾》5</p></div> -->
											    </div>
											    <!-- Add Arrows -->
											    <div class="swiper-button-next swiper-button-white"></div>
											    <div class="swiper-button-prev swiper-button-white"></div>
											</div>
											<div class="swiper-container gallery-thumbs">
											    <div class="swiper-wrapper">
													<div class="swiper-slide" style="background-image:url(artist/images/img7.jpg)"></div>
													<div class="swiper-slide" style="background-image:url(artist/images/img1.jpg)"></div>
													<div class="swiper-slide" style="background-image:url(artist/images/img2.jpg)"></div>
													<div class="swiper-slide" style="background-image:url(artist/images/img3.jpg)"></div>
													<div class="swiper-slide" style="background-image:url(artist/images/img4.jpg)"></div>
											    </div>
											</div>
										</div>
									</div>
	        					</li>
        					<?php } ?>
        				</ul>
        			</div>
        			<div class="intnr">
        				<h2>出版专著</h2>
        				<p class="p1">
        					• 1928年9月，《借山吟馆诗草》始印行。10月《白石印草》印行。同年胡佩衡编《齐白石画册初集》出版。<br>
							• 1932年7月，徐悲鸿编选作序的《齐白石画册》由上海中华书局印行。<br>
						    &nbsp;&nbsp;&nbsp;&nbsp;同年起与张次溪着手《白石诗草》八卷的编印工作。<br>
						    &nbsp;&nbsp;&nbsp;&nbsp;齐白石自己设计版式、封面，亲手纸张、装订线等。请杨云史等文化名人题词。<br>
							• 1949年3月，胡适等编的《齐白石年谱》由商务印书馆出版发行。<br>
							• 1952年，北京荣宝斋用木板水印法复印出版《齐白石画集》。<br>
							• 1962年，人民美术出版社出版《白石老人自述》。<br>
        				</p>
        			</div>
        			<div class="intnr">
        				<h2>声明</h2>
        				<p>
        					本站上发表的所有内容，均为原作者的观点，不代表美术百科网的立场，也不代表美术百科网的价值判断。美术百科的词条（含所附图片）系由本站或网友上传，如果涉嫌侵权，请与客服联系，我们将按照法律之相关规定及时进行处理。未经许可，禁止商业网站等复制、抓取本站内容；合理使用者，请注明来源于www.artpc.cn。
        				</p>
        			</div>
        		</div>
        		<div class="barD barD2">
        			<div class="barnr personD">
        				<img src="artist/images/person.jpg" alt="齐白石">
        				<p>齐白石画册</p>
        				<div>
        					<a href="" class="buy">购买复制品</a>
        				</div>
        			</div>
        			<div class="barnr">
        				<h2 class="tit">
        					<p class="p1 dateTit">词条统计</p>
        				</h2>
        				<p class="dis date_dis">
        					<span class="s1">浏览次数</span>：2001500次<br> 
        					<span class="s1">最近更新</span>：2018-1-11<br> 
        					<span class="s1">创建者</span>：美术百科
        				</p>
        			</div>
        			<div class="barnr infor">
        				<h2 class="tit">
        					<p class="p1 figuresTit">美术人物</p>
        				</h2>
        				<div class="figures">
	        				<div class="figureslist">
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
        				</div>
        			</div>

        			<?php 
	        			$catalog = array(
	        				"介绍" => array(""),
	        				"中国画的特点" => array(""),
	        				"中国画的形式" => array(""),
	        				"中国画的分类" => array("按内容分：","按技法分："),
	        				"中国历代画家" => array("魏晋南北朝时期","隋唐","五代","宋代","元代")
	        			);
	        			$catano = 0;
        			 ?>
        			<div class="barnr catalog">
        				<dl class="catalog-list">
        					<?php foreach($catalog as $k => $v){ $catano ++; ?>
	        					<dt class="catalog-title level1">
	        						<a href="" class="title-link">
	        							<span class="text">
	        								<span class="title-index"><?php echo $catano; ?>.</span>
	        								<span class="title-link"><?php echo $k; ?></span>
	        							</span>
	        						</a>
	        					</dt>

								<?php if(count($v)>1) {
	        						foreach ($v as $k1 => $v1) { ?>
		        					<dd class="catalog-title level2">
										<a href="" class="title-link">
											<span class="text">
												<span class="title-index"><?php echo $catano.'.'.($k1+1); ?></span>
												<span class="title-link"><?php echo $v1; ?></span>
											</span>
										</a>
									</dd>
	        					<?php  }} ?>
	        					
        					<?php } ?>
        				</dl>
	                </div>
        		</div>
        	</div>

            <!-- 友情链接 -->
            <?php include 'friend-link.php'; ?>
        </div>
    </div>
    <?php include("common/bottom/bottom.html") ?>

    <!-- 查看作品 Initialize Swiper -->
    <script>

    	<?php for($i=1;$i<6;$i++){ ?>
		    var galleryTop<?php echo $i; ?> = new Swiper('.swiper-worksD<?php echo $i; ?> .gallery-top', {
				spaceBetween: 10,
				navigation: {
					nextEl: '.swiper-worksD<?php echo $i; ?> .swiper-button-next',
					prevEl: '.swiper-worksD<?php echo $i; ?> .swiper-button-prev',
				},
				observer:true,
				observeParents:true,
		    });
		    var galleryThumbs<?php echo $i; ?> = new Swiper('.swiper-worksD<?php echo $i; ?> .gallery-thumbs', {
				spaceBetween: 20,
				centeredSlides: true,
				slidesPerView: 'auto',
				touchRatio: 0.2,
				slideToClickedSlide: true,
				observer:true,
				observeParents:true,
		    });
		    galleryTop<?php echo $i; ?>.controller.control = galleryThumbs<?php echo $i; ?>;
		    galleryThumbs<?php echo $i; ?>.controller.control = galleryTop<?php echo $i; ?>;
		<?php } ?>
		$(function(){
			//查看作品
			$(".worksD li .img1").click(function(){
				var name = $(this).parents("li").attr("name");
				$("."+name).show();
			});
            // 点击弹窗其他地方关闭
            $(".swiper-worksD").click(function(){
                $(this).hide();
            });
            $(".gallery-top,.gallery-thumbs").click(function(event){
                event.stopPropagation();
            });
		})
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