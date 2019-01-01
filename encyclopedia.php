<!DOCTYPE html>
<head>
    <?php include("common/meta.html") ?>
    <title>美术百科</title>
    <link rel="stylesheet" href="/common/swiper/swiper.min.css">
    <script type="text/javascript" src="/common/swiper/swiper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index/index.css">
    <link rel="stylesheet" href="encyclopedia.css">
</head>
<body>
    <?php include("top.html") ?>
    <script>$(function () {$(".com-top .nav a[name='encyclopedia']").addClass('act');})</script>
    <div class="bannerD bannerD2">
        <!-- banner -->
        <div class="swiper-container banner2" id="swiper-banner">
            <div class="swiper-wrapper">
                <?php for($i=1;$i<2;$i++){ ?>
                    <a class="swiper-slide" href="artist_introduction.php">
                        <img class="banimg" src="encyclopedia/images/ban1.jpg" alt="ban1">
                        <div class="d1">
                            <div class="tit">毕加索-超现实主义风格</div>
                            <p class="p1">巴勃罗·毕加索（1881年10月25日-1973年4月8日），<br> 西班牙画家、雕塑家，法国共产党党员。是现代艺术的创始人，西方现代派绘画的主要代表。<br> 毕加索是当代西方最有创造性和影响最深远的艺术家，<br> 
                            是20世纪最伟大的艺术天才。</p>
                            <p class="p1 yellow">查看详情 &gt;&gt;</p>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="ban-pagination" id="ban-pagination"></div>
        <div class="prev" id="ban-prev"></div>
        <div class="next" id="ban-next"></div>
    </div>
    <div class="index_main">
        <div class="w">
            <!-- 创建词条 -->
            <div class="nr createD">
                <div class="create">
                    <div class="word-inf">
                        <p>
                            <span>恭喜张光宇词条创建成功</span>
                            <span class="time">22 : 38 : 59</span>
                        </p>
                    </div>
                    <div class="word-cre">
                        <span>已收录<i>280000</i>个词条</span>
                        <span>已浏览<i>8580000</i>人次</span>
                        <a class="cre" href="encyclopedia_create.php">创建词条</a>
                    </div>
                </div>
                 <ul class="wordD">
                     <li class="act">
                        <a class="a1" href="">美术理论</a>
                        <?php $wordzk=[
                            "中国画" => ["丹青", "水墨画", "门类", "语体与技法", "品评与术语", "画史", "风格与流派"],
                            "油画" => ["工具与材料", "社团机构"],
                            "版画" => ["画种", "名词术语", "工艺手法", "活动与团体"],
                            "书法" => ["名词术语","书史","博物馆","社团","著作"],
                            "篆刻" => ["名词术语", "印章史", "团体", "印学史", "印谱", "篆刻工具书", "篆刻报刊"] 
                        ]; ?>
                        <div class="wordzk">
                            <?php foreach ($wordzk as $k => $v) { ?>
                                <div class="d1">
                                    <h5><?php echo $k; ?></h5>
                                    <?php $_count = count($v)-1;
                                    foreach ($v as $k1 => $v1) { ?>
                                        <?php if($k1%4 == 0){ ?> <div class="d2"> <?php } ?>
                                        <a href="" class="a2"><?php echo $v1; ?></a>
                                        <?php if($k1%4 == 3){ echo "</div>"; } ?>
                                        <?php if($_count%4 != 3 && $k1 == $_count){ echo "</div>";} ?>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </li>
                     <li>
                        <a class="a1" href="">美术活动</a>
                    </li>
                     <li>
                        <a class="a1" href="">美术创作</a>
                    </li>
                     <li>
                        <a class="a1" href="">美术技法</a>
                    </li>
                     <li>
                        <a class="a1" href="">美术分类</a>
                    </li>
                     <li>
                        <a class="a1" href="">美术出版</a>
                    </li>
                     <li>
                        <a class="a1" href="">组织机构</a>
                    </li>
                     <li>
                        <a class="a1" href="">美术市场</a>
                    </li>
                     <li>
                        <a class="a1" href="">中国美术</a>
                    </li>
                     <li>
                        <a class="a1" href="">外国美术</a>
                    </li>
                 </ul>
            </div>
            <!-- 美术理论 -->
            <div class="nr theory">
                <div class="theoryD1">
                    <h2>
                        <p class="p1">美术理论</p>
                        <img src="encyclopedia/images/theory.png" alt="art theory">
                    </h2>
                    <?php $the = array("人物画", "画分十三科", "山水画", "道释画", "花鸟画", "仕女画", "文人画", "写真（写照）", "帛画", "写生"); ?>
                    <div class="choose">
                        <?php foreach ($the as $v) { ?>
                            <a href="encyclopedia_introduction.php"><?php echo $v; ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="theoryD2">
                    <div id="theoryT-pagination"></div>
                    <div class="swiper-container theoryT" id="swiper-theoryT">
                        <div class="swiper-wrapper">
                            <?php for($i=1;$i<5;$i++){ ?>
                                <div class="swiper-slide">
                                    <div class="d1">
                                        美术史是研究美术的历史发展及其规律的科学。美术史的研究范围包括建筑艺术、雕塑、绘画、工艺美术、书法、篆刻等美术种类的历史，涉及美术家、美术作品、美术理论、美术思潮和美术流派等各方面。
                                        <br>
                                        <br>
                                        美术史与历史学有密切联系，同时涉及到古迹和文物的考察与鉴定。美术发生史必须以考古材料为基础，这就与考古学有密切的关系。此外美术史还与一般文化史、民族学、民俗学有交叉关系，但是它是以美术作品为第一性资料，同时伴有审美判断，这两点可与历史学、考古学、文化史、民族学、民俗学划清界线。美术史需要哲学、美学、美术理论的指导，还涉及美术批评...
                                    </div>
                                    <p class="p2"><a href="">查看详情 >></a><span class="time">04-28</span></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="theoryD3">
                    <div id="theory-pagination"></div>
                    <div class="swiper-container theory" id="swiper-theory">
                        <div class="swiper-wrapper">
                            <?php for($i=1;$i<5;$i++){ ?>
                                <div class="swiper-slide">
                                    <img src="encyclopedia/images/img1.jpg" alt="img1">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 百科词条排行榜 -->
            <div class="nr rank">
                <div class="rank-left">
                    <ol class="barol barol2">
                        <?php for($i=1;$i<4;$i++){ ?>
                            <li>
                                <span class="no"><?php echo $i; ?></span>
                                <span class="name"><a href="">马王</a></span>
                                <span class="bar"><?php echo 12345-4*$i; ?></span>
                            </li>
                        <?php } ?>
                    </ol>
                    <ol class="barol">
                        <?php for($i=4;$i<7;$i++){ ?>
                            <li>
                                <span class="no"><?php echo $i; ?></span>
                                <span class="name"><a href="">马王堆帛书</a></span>
                                <span class="bar"><?php echo 12345-4*$i; ?></span>
                            </li>
                        <?php } ?>
                    </ol>
                    <ol class="barol">
                        <?php for($i=7;$i<10;$i++){ ?>
                            <li>
                                <span class="no"><?php echo $i; ?></span>
                                <span class="name"><a href="">马王堆帛书</a></span>
                                <span class="bar"><?php echo 12345-4*$i; ?></span>
                            </li>
                        <?php } ?>
                    </ol>
                </div>

                <h2>
                    <p class="p1">百科词条排行榜</p>
                    <img src="encyclopedia/images/ranking.png" alt="ranking list">
                </h2>
            </div>
            <!-- 美术人物 -->
            <div class="nr recommend store figures">
                <div class="recommend-left">
                    <h2>
                        <p class="p1">美术人物</p>
                        <img src="encyclopedia/images/figures.png" alt="art figures">
                    </h2>
                    <div class="pagination" id="figures-pagination"></div>
                    <div class="choose">
                        <a href="">张大千</a>
                        <a href="">黄永玉</a>
                        <a href="">李苦禅</a>
                        <a href="">李苦禅</a>
                        <a href="">张春桥</a>
                        <a href="">贾文忠</a>
                        <a href="">贾文忠</a>
                        <a href="">齐白石</a>
                    </div>
                </div>
                <div class="swiper-container recommend-right" id="swiper-figures">
                    <div class="swiper-wrapper">
                        <?php for($i=1;$i<8;$i++){ ?>
                            <div class="swiper-slide">
                                <a class="imgD" href="">
                                    <img src="encyclopedia/images/img3.jpg" alt="巴勃罗·毕加索">
                                </a>
                                <p class="p1">巴勃罗·毕加索<?php echo $i; ?></p>
                                <p class="p2">西班牙画家、雕塑家</p>
                                <p class="dis p3">是现代艺术的创始人，西方现代派绘画的主要代表。毕加索是当代西方最有创造性和影响最深远的艺术家，是20世纪最伟大的艺术天才。</p>
                                <p class="dis">
                                    <span class="see">2360</span>
                                    <span class="favorite">1234</span>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- 热点素材 -->
            <div class="nr pictureD">
                <div class="hotD">
                    <h2>
                        <p class="p1">热点素材</p>
                        <img src="encyclopedia/images/picture.png" alt="hot picture">
                    </h2>
                    <div id="picture-pagination"></div>
                    <div class="swiper-container swiper-picture" id="swiper-picture">
                        <div class="swiper-wrapper">
                            <?php for($i=1;$i<5;$i++){ ?>
                                <div class="swiper-slide">
                                    <a href="">
                                        <img src="encyclopedia/images/img2.jpg" alt="img2">
                                        <span>马踏飞燕<br>又名马超龙雀</span>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="updates">
                    <h2>
                        <p class="p1">最近更新</p>
                        <img class="img1" src="encyclopedia/images/updates.png" alt="updates">
                        <a class="more" href=""><img src="encyclopedia/images/more.png" alt="more"></a>
                    </h2>
                    <ul class="newlist">
                        <?php for($y=1;$y<5;$y++){ ?>
                            <li>
                                <h3>不容忽略画之贵“气”--党培东<span class="right">04-28</span> </h3>
                                <p>古人讲“下气为水，上气为雾”，谢赫六法评画之首为“气韵生动”，可见“气”之重要。</p>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- 相关机构 -->
            <div class="nr relevant">
                <h2>
                    <p class="p1">相关机构</p>
                    <img src="encyclopedia/images/relevant.png" alt="relevant institutions">
                </h2>
                <?php $rel = array(
                    "大英博物馆","江苏省美术馆","上海龙美术馆","上海美术馆","炎黄艺术馆","中国国家博物馆","中国国家画院 ",
                    "卢浮宫","中国美术馆","浙江美术馆","北京画院美术馆","台北故宫博物院"
                ); ?>
                <div class="listD">
                <?php foreach ($rel as $k => $v) { ?>
                    <a href="">
                        <img src="encyclopedia/images/rel<?php echo $k+1; ?>.jpg" alt="<?php echo $v; ?>">
                        <span><?php echo $v; ?></span>
                    </a>
                <?php } ?>
                </div>
            </div>
            <!-- 友情链接 -->
            <?php include 'friend-link.php'; ?>
        </div>
    </div>
    <?php include("common/bottom/bottom.html") ?>
    <script>
        var banner = new Swiper('#swiper-banner',{
            loop:true,
            autoplay: true,
            pagination: {
                el: '#ban-pagination',
            },
            navigation: {
                nextEl: '#ban-next',
                prevEl: '#ban-prev',
            },
        });

        //美术理论
        var theoryT = new Swiper('#swiper-theoryT',{
            autoHeight:true,
            pagination: {
                el: '#theoryT-pagination',
                clickable: true,
                // renderBullet: function (index, className) {
                //   return '<span class="' + className + '">' + (index + 1) + '</span>';
                // },
                renderBullet: function (index, className) {
                switch(index){
                    case 0:text='美术史';break;
                    case 1:text='水墨画';break;
                    case 2:text='著作';break;
                    case 3:text='博物馆';break;
                    case 4:text='伍';break;
                }
                return '<span class="' + className + '">' + text + '</span>';
            },
          },
        });
        var theory = new Swiper('#swiper-theory',{
            pagination:{
                el:'#theory-pagination',
                clickable :true,
            },
            direction : 'vertical',
            controller: {
                control: theoryT,
            },
        });
        theoryT.controller.control = theory;

        // 美术人物
        var figures = new Swiper('#swiper-figures', {
            loop: true,
            // autoplay:true,
            autoHeight: true,
            pagination:{
                el:'#figures-pagination',
                clickable :true,
            },
            //网格分布
            slidesPerView:3,
            slidesPerGroup : 3,
            centerInsufficientSlides: true,
        });
        // 热点素材
        var picture = new Swiper('#swiper-picture',{
            pagination:{
                el:'#picture-pagination ',
                clickable :true,
            },
            direction : 'vertical',
        })
    </script>
</body>
</html>