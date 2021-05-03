<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

        </div>
        <!--<div id="aside">
            <?php /*echo outlogin(); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 */?>
            <?php /*echo poll(); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 */?>
        </div>-->
<?php if (!defined("_INDEX_")) { ?>
    </div>

</div>
<?php }?>
<!-- } 콘텐츠 끝 -->


<section id="inquiry">
    <div id="container_wr">
        <div class="inquiry_wr" data-aos="fade-up" data-aos-offset="300" data-aos-duration="1000">
            <h2>TurboMAX 와 함께<br>
                더 나은 내일을 위한 준비가 되셨나요?</h2>
            <p>성심껏 상담해드리겠습니다.</p>
            <input type="button" value="문의하기" class="inquiry_btn">
        </div>
    </div>
</section>

<!-- 하단 시작 { -->
<div id="ft">
    <div id="ft_wr">
        <div class="ft_top">
            <ul>
                <li>개인정보처리방침</li>
                <li>이메일 무단수집거부</li>
                <li>이용약관</li>
            </ul>
            <p>본사 : 충북 청주시 흥덕구 오송생명9로 208&nbsp;&nbsp;&nbsp;&nbsp;전화 : 043-730-8000, 팩스 : 043-730-8009 &nbsp;&nbsp;|&nbsp;&nbsp; 현도 공장 : 충북 청주시 서원구 현도면 죽암도원로 12-27&nbsp;&nbsp;&nbsp;&nbsp;전화 : 043-275-6002, 팩스 : 043-275-6004</p>
        </div>
    </div>
    <!--<div id="ft_wr">
        <div id="ft_link" class="ft_cnt">
            <a href="<?php /*echo get_pretty_url('content', 'company'); */?>">회사소개</a>
            <a href="<?php /*echo get_pretty_url('content', 'privacy'); */?>">개인정보처리방침</a>
            <a href="<?php /*echo get_pretty_url('content', 'provision'); */?>">서비스이용약관</a>
            <a href="<?php /*echo get_device_change_url(); */?>">모바일버전</a>
        </div>
        <div id="ft_company" class="ft_cnt">
        	<h2>사이트 정보</h2>
	        <p class="ft_info">
	        	회사명 : 회사명 / 대표 : 대표자명<br>
				주소  : OO도 OO시 OO구 OO동 123-45<br>
				사업자 등록번호  : 123-45-67890<br>
				전화 :  02-123-4567  팩스  : 02-123-4568<br>
				통신판매업신고번호 :  제 OO구 - 123호<br>
				개인정보관리책임자 :  정보책임자명<br>
			</p>
	    </div>
        <?php
/*        //공지사항
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('notice', 'notice', 4, 13);
        */?>

        <?php /*echo visit(); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 */?>
    </div>
    <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div>

    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>-->
</div>
<div id="ft_2">
    <div id="ft_wr">
        <div class="ft_logo">
            <img src="<?php echo G5_IMG_URL;?>/ft_logo.svg" alt="">
        </div>
        <div class="copy">
            copayright &copy; 2021 by <span>TURBO</span><span>MAX</span>. Corporation. All Right Reserved.
        </div>
    </div>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
    AOS.init();
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");