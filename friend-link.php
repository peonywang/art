<div class="nr relevant link">
                <h2>
                    <p class="p1">友情链接</p>
                    <img src="encyclopedia/images/link.png" alt="Friendship link">
                </h2>
                <?php $link = array(
                    "中国文艺网","中国美术家协会" ,"中国书法家协会" ,"艺术中国",
                    "雅昌艺术网","荣宝斋","中国艺术研究院","中国美术馆",
                    "中国国家画院","中国国家博物馆","故宫博物院","今日美术馆",
                    "北京画院","中央美术学院","中国美术学院", "清华大学美术学院",
                    "天津美术学院","西泠印社","台北故宫博物院","大英博物馆", 
                    "大都会艺术博物馆", "卢浮宫博物馆", "新浪收藏", "网易艺术"
                    );
                ?>
                <ul class="linklist">
                <?php foreach ($link as $k => $v) { ?>
                    <li>
                        <a href="" title="<?php echo $v; ?>"><?php echo $v; ?></a>
                    </li>
                <?php } ?>
                </ul>
            </div>