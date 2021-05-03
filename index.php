<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');

add_javascript('<script src="'.G5_JS_URL.'/owlcarousel/owl.carousel.min.js"></script>', 10);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/owlcarousel/owl.carousel.min.css">', 10);

?>
<div class="mode_btn">
    <div><i class="fa fa-moon-o"></i>다크모드</div>
</div>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<section class="top">
    <div class="owl-carousel" id="main_slide">
        <div class="item">
            <div class="text">
                <h2><span><img src="<?php echo G5_IMG_URL;?>/logo.svg" alt=""></span>는 최고의 기술력으로 <br>
                    지속가능한 성장을 지향하는 친환경 기업입니다.</h2>
            </div>
            <div class="img" style="background:url('<?php echo G5_IMG_URL;?>/main_01.jpg')center no-repeat;background-size:cover;">
            </div>
            <div class="bg"></div>
        </div>
        <div class="item">
            <div class="text">
                <h2><span><img src="<?php echo G5_IMG_URL;?>/logo.svg" alt=""></span>는 고객 중심 경영으로 <br>
                   지역 경제와 상생하는 친환경 기업입니다.</h2>
            </div>
            <div class="img" style="background:url('<?php echo G5_IMG_URL;?>/main_02.jpg')center no-repeat;background-size:cover;">
            </div>
            <div class="bg"></div>
        </div>
    </div>
    <!--<div class="index_top_bg"></div>-->
</section>
<section id="product">
    <div id="container_wr">
        <div class="left">
            <div class="pd_wrap">
                <h2>The best energy
                    saving solution</h2>
          <span>사람과 환경의 가치를 먼저 생각합니다.</span>
                
                <div class="pd_btns">
                    <div onclick="location.href='#N'" id="pd_N" class="active">New R-Turbo</div>
                    <div onclick="location.href='#E'" id="pd_E">MAX Series</div>
                    <div onclick="location.href='#S'" id="pd_S">MAX Series Premium</div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="owl-carousel" id="pd_slide">
                <div class="item" data-hash="N">
                    <div class="top_txt">
                        <p>New R-Turbo</p>
                        <h2>RMX100-C060</h2>
                    </div>
                    <div class="img">
                        <img src="<?php echo G5_IMG_URL;?>/product_sample.png" alt="">
                    </div>
                </div>
                <div class="item" data-hash="E">
                    <div class="top_txt">
                        <p>MAX Series</p>
                        <h2>MAX100-C060</h2>
                    </div>
                    <div class="img">
                        <img src="<?php echo G5_IMG_URL;?>/product_sample.png" alt="">
                    </div>
                </div>
                <div class="item" data-hash="S">
                    <div class="top_txt">
                        <p>MAX Series Premium</p>
                        <h2>MAX100-C060</h2>
                    </div>
                    <div class="img">
                        <img src="<?php echo G5_IMG_URL;?>/product_sample.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="specs">
    <div id="container_wr">
        <div class="spec_tit">
            <h2>사람과 자연을 위하는 터보맥스만의 독보적인 기술</h2>
            <p>TurboMAX의 제품은 고효율 설계로 기존 방식의 블로워제품 대비 20~40% 이상의 전력비용 절감효과가 있으며,<br>
                공기베어링과 공랭식 적용으로 윤활 시스템이 필요 없고 소음과 진동이 상당히 낮아 운영자들의 작업환경을 개선할 친환경 제품입니다.</p>
        </div>
        <div class="spec_item">
            <div  data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000">
                <div class="spec_txt">
                    <div>
                        <h2>핵심기술</h2>
                        <p>Core Technology</p>
                    </div>
                </div>
            </div>
            <div  data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000">
                <div class="spec_txt">
                    <div>
                        <h2>냉각기술</h2>
                        <p>Cooling Technology</p>
                    </div>
                </div>
            </div>
            <div  data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000">
                <div class="spec_txt">
                    <div>
                        <h2>제어·통신 기술</h2>
                        <p>Control / Communication Technology</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</section>
<!--<section id="contact">
    <div id="container_wr">
        <div class="contact_wr">
            <div class="left">
                <div class="map">
                    <img src="<?php /*echo G5_IMG_URL;*/?>/index_map.png" alt="">
                </div>
            </div>
            <div class="right">
                <div class="contact_txt">
                    <h2>TurboMAX <span>In Korea</span></h2>
                    <p>터보맥스 기술력의 가치가 국내ㆍ외 다양하게 확산되고 있습니다.</p>

                    <h3>청주</h3>
                    <div>
                        <div>
                            <h4>터보맥스 본사</h4>
                            <p>충북 청주시 흥덕구 오송생명 9로 208</p>
                            <p>TEL : 043-262-4868  /  FAX : 043-221-4868</p>
                        </div>
                        <div>
                            <h4>터보맥스 현도 공장 </h4>
                            <p>충북 청주시 서원구 현도면 죽암도원로 12-27</p>
                            <p>TEL : 043-275-6002  /  FAX : 043-275-6004</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<script>
$(function(){
   var owl = $("#main_slide");
   owl.owlCarousel({
       loop:true,
       autoplay:true,
       autoplayTimeout:8000,
       autoplaySpeed:3000,
       smartSpeed:3000,
       items:1,
       nav:false,
       dot:true
   });

    var owl2 = $("#pd_slide");
    owl2.owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplaySpeed:1000,
        smartSpeed:1000,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash',
        items:1,
        nav:false,
        dot:true
    });

    owl2.on("changed.owl.carousel",function(e){
        var num = Number(e.page.index) + 1;
        console.log(num);
        $(".pd_btns > div:nth-child("+num+")").addClass('active');
        $(".pd_btns > div").not($(".pd_btns > div:nth-child("+num+")")).removeClass('active');
    });

    var hash = location.hash.replace("#","");
    $("#pd_"+hash).addClass('active');

    $(".spec_item > div").hover(function(e){
        $(this).children($(".spec_txt")).animate({
            height:"100%"
        },500);
    },function(){
        $(this).children($(".spec_txt")).animate({
            height:"100px"
        },500);
    });


});
</script>
<script src="<?php echo G5_JS_URL;?>/app.js"></script>
<!-- Channel Plugin Scripts -->
<script>
    (function() {
        var w = window;
        if (w.ChannelIO) {
            return (window.console.error || window.console.log || function(){})('ChannelIO script included twice.');
        }
        var ch = function() {
            ch.c(arguments);
        };
        ch.q = [];
        ch.c = function(args) {
            ch.q.push(args);
        };
        w.ChannelIO = ch;
        function l() {
            if (w.ChannelIOInitialized) {
                return;
            }
            w.ChannelIOInitialized = true;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
            s.charset = 'UTF-8';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        }
        if (document.readyState === 'complete') {
            l();
        } else if (window.attachEvent) {
            window.attachEvent('onload', l);
        } else {
            window.addEventListener('DOMContentLoaded', l, false);
            window.addEventListener('load', l, false);
        }
    })();
    ChannelIO('boot', {
        "pluginKey": "090c2588-45d0-45a0-b8f7-950571b368b2"
    });
</script>
<!-- End Channel Plugin -->
<?php
include_once(G5_PATH.'/tail.php');