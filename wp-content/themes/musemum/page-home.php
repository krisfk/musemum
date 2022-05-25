<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

<div class="cal-pos-1"></div>
<div class="cal-pos-2"></div>
<div class="cal-pos-3"></div>

<div class="main-container">

    <!--scene-1 start-->

    <div class="scene-div scene-div-1">
        <div class="scene-1-bg">

        </div>


        <img class="page-1-bg" class="h-100" src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/page-1-bg.jpg"
            alt="">


        <img class="white-big-mcd-logo h-100" class="h-100"
            src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/white-big-mcd-logo.png" alt="">

        <img class="musemum-card" src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/card.png" alt="">

        <div class="scene-1-txt-1" style="color: #394d64;font-size: 42px;">
            帶你體驗康文署博物館精彩的藝術 • 歷史 • <br>科學旅程！<br>
            <span class="roboto">Enjoy the visit by inspiring experiences in Art • History • <br>
                Science under the LCSD Museums</span>
        </div>

        <div class="scene-1-txt-2" style="color: #394d64;font-size: 66px;">
            博物館<span style="font-size:104px;margin-left:1rem;margin-right:1rem;font-weight:bold;">通行證</span>辦理處 <br>
            <span class="roboto" style="margin-left: 55px;"> <span style="font-size: 58px;">Museum</span> <span
                    style="font-size: 85px;margin-left: 0rem;margin-right:1rem;font-weight:bold;">Pass
                    Counter</span></span>
        </div>

        <div class="scene-1-green-bg">

        </div>
        <img class="app-icon" src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/app-icon.png" alt="">

        <div class="qr-code-group-1">

            <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/qr-1.png" alt="">
            <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/app-store-icon-1.png" alt="">
        </div>
        <div class="qr-code-group-2">
            <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/qr-2.png" alt="">
            <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/app-store-icon-2.png" alt="">

        </div>


        <div class="scene-1-txt-3" style="font-size: 42px;">
            <span style="font-size: 66px;position: relative;/* top: -10px; */">海防</span>
            <span style="font-size: 90px;font-weight: bold;margin: 0 0 0 9px;">智博行</span> <br>
            <span class="roboto" style="margin: 0 0 0 111px;">MCD <span style="font-size: 60px;font-weight: bold;">iM
                    Guide</span></span>
        </div>


        <div class="scene-1-txt-4" style="font-size:40px;"> <span>免費下載「智博行」流動應用程式</span> <br>
            <span class="roboto">Free download of "MCD iM Guide" <br>
                mobile application</span>
        </div>

        <div class="scene-1-txt-5" style="font-size: 100px;">
            <span> 隨意行 隨處賞</span> <br>
            <span class="roboto" style="font-size: 84px;margin: 0 0 0 70px;"> Explore your interest, Plan your
                trip</span>
        </div>
        <img class="bg-behind-phone-1"
            src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/bg-behind-phone-1-scaled.jpg" alt="">

        <div class="iphone-div">
            <!-- <video class="iphone-video" autoplay muted>
                <source src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/AR_UI.mp4" type="video/mp4">
            </video> -->
            <!-- <video class="iphone-img">
                <source src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/Checkpoint11_UI.mp4"
                    type="video/mp4">
            </video> -->

            <img class="iphone-img" src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/iphone.png" alt="">
        </div>

    </div>

    <!--scene-1 end-->




</div>
</div>

<!-- <video width="320" height="240" controls autoplay muted>
    <source src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/AR_UI.mp4" type="video/mp4">

</video> -->

<script type="text/javascript">
$(function() {

    // $('.app-icon').fadeOut(0);


    //start
    setTimeout(() => {

        $('.app-icon').fadeOut(0);
        $('.qr-code-group-1,.qr-code-group-2').fadeOut(0);
        // $('.qr-code-group-2').fadeOut(0);


        setTimeout(() => {
            $('.qr-code-group-1,.qr-code-group-2,.scene-1-txt-3,.scene-1-txt-4').fadeIn(200);
        }, 800);


        setTimeout(() => {
            $('.app-icon').fadeIn(0);
        }, 800);

        $('.white-big-mcd-logo').animate({
            'left': '202px'
        }, 1000, function() {

            $('.app-icon').animate({
                'left': '2172px'
            }, 500, function() {


                $('.iphone-div').fadeIn(800);
                // $('.iphone-div').animate({
                //     'left': '2662px'
                // }, 500);
                $('.iphone-div').addClass('rotate1');
                $('.iphone-div').prepend(
                    '<video class="iphone-video" autoplay muted> <source src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/Checkpoint11_UI.mp4" type="video/mp4"> </video>'
                );
                //             position: absolute;
                // top: 150px;
                // left: 2662px;
                // display: none;
                // z-index: 100;
                // transform: rotate(15deg);
            });


        });
        $('.scene-1-green-bg').fadeIn(500);
        $('.bg-behind-phone-1').fadeIn(500);
        $('.scene-1-txt-5').fadeIn(500);


        $('.musemum-card,.scene-1-txt-1,.scene-1-txt-2').fadeOut(200);


    }, 1000);
})
</script>
<?php
get_footer();