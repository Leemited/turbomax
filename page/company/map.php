<?php
include_once('../../common.php');
include_once(G5_PATH.'/head.php');
?>
<section class="com_w">
    <h1 class="title">오시는 길</h1>
    <p class="sub_tit">전국의 터보맥스 본사 및 지사에 오시는 길 및 연락처를 안내해드립니다.</p>
    <div id="map">
        <h3 class="title_28">터보맥스 본사<span class="con_20l">충북 청주시 흥덕구 오송생명 9로 208   TEL : 043-262-4868  /  FAX : 043-221-4868</span></h3>
        <div class="map" id="map_a"></div>
        <h3 class="title_28">터보맥스 현도 공장<span class="con_20l">충북 청주시 서원구 현도면 죽암도원로 12-27     TEL : 043-275-6002  /  FAX : 043-275-6004</span></h3>
        <div class="map" id="map_b"></div>
    </div>
</section>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm0zBJyJyanmmRCesRcrmUxk7_9coGqsM&callback=initMap&region=kr"></script>
<script>
    function initMap() {
        var turbo = {lat: 36.52064347462114, lng: 127.43343369145231};
        var map = new google.maps.Map(document.getElementById('map_a'), {
            zoom: 12,
            center: turbo
        });

        var turbo2 = {lat: 36.52064347462114, lng: 127.43343369145231};
        var map2 = new google.maps.Map(document.getElementById('map_b'), {
            zoom: 12,
            center: turbo
        });
    }

    $(function(){
        initMap();
    });

</script>

<?php
include_once(G5_PATH.'/tail.php');
?>
