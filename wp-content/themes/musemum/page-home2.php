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

//get_header();

?>

<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <meta name="viewport" content="width=100, initial-scale=1.0"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a> -->

        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <div class="cal-pos-1"></div>
                    <div class="cal-pos-2"></div>
                    <div class="cal-pos-3"></div>

                    <div class="main-container">

                        <!--scene-1 start-->

                        <div class="scene-div scene-div-1">

                            <div class="scene-1-green-bg"></div>
                            <!-- <div class="scene-1-bg">

                            </div> -->


                            <img class="page-1-bg" class="h-100"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/page-1-bg.jpg" alt="">


                            <img class="white-big-mcd-logo"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/07/scene-1-mcd-logo.png"
                                alt="">

                            <img class="musemum-card"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/07/scene-1-card.png" alt="">

                            <div class="scene-1-txt-1" style="color: #fff;font-size: 42px;">
                                帶你體驗康文署博物館精彩的藝術 • 歷史 • <br>科學旅程！<br>
                                <span class="roboto">Enjoy the visit by inspiring experiences in Art • History • <br>
                                    Science under the LCSD Museums</span>
                            </div>

                            <img class="scene-1-musemum-pass-txt"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/07/scene-1-pass-txt.png"
                                alt="">

                            <!-- <div class="scene-1-txt-2" style="color: #394d64;font-size: 66px;">
                                博物館<span
                                    style="font-size:104px;margin-left:1rem;margin-right:1rem;font-weight:bold;">通行證</span>辦理處
                                <br>
                                <span class="roboto" style="margin-left: 55px;"> <span
                                        style="font-size: 58px;">Museum</span> <span
                                        style="font-size: 85px;margin-left: 0rem;margin-right:1rem;font-weight:bold;">Pass
                                        Counter</span></span>
                            </div> -->

                            <div class="scene-1-green-bg">

                            </div>
                            <img class="app-icon"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/app-icon.png" alt="">

                            <div class="qr-code-group-1">

                                <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/qr-1.png" alt="">
                                <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/app-store-icon-1.png"
                                    alt="">
                            </div>
                            <div class="qr-code-group-2">
                                <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/qr-2.png" alt="">
                                <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/app-store-icon-2.png"
                                    alt="">

                            </div>


                            <div class="scene-1-txt-3" style="font-size: 42px;">
                                <span style="font-size: 66px;position: relative;/* top: -10px; */">海防</span>
                                <span style="font-size: 90px;font-weight: bold;margin: 0 0 0 9px;">智博行</span> <br>
                                <span class="roboto" style="margin: 0 0 0 111px;">MCD <span
                                        style="font-size: 60px;font-weight: bold;">iM
                                        Guide</span></span>
                            </div>


                            <div class="scene-1-txt-4" style="font-size:40px;"> <span>免費下載「智博行」流動應用程式</span> <br>
                                <span class="roboto">Free download of "MCD iM Guide" <br>
                                    mobile application</span>
                            </div>

                            <div class="scene-1-txt-5" style="font-size: 100px;">
                                <span> 隨意行 隨處賞</span> <br>
                                <span class="roboto" style="font-size: 84px;margin: 0 0 0 70px;"> Explore your interest,
                                    Plan your
                                    trip</span>
                            </div>



                            <!-- <div class="iphone-div">

                                <video class="iphone-video" controls>
                                    <source
                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/Checkpoint11_UI_crop.mov"
                                        type="video/mp4">
                                </video>

                                <img class="iphone-img"
                                    src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/iphone.png" alt="">
                            </div>

                            <div class="ar-videos-div">

                                <video class="ar-video ar-video-1" controls>
                                    <source
                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/5_Animation_13_FinalRender-1.mp4"
                                        type="video/mp4">
                                </video>

                                <video class="ar-video ar-video-2" controls>
                                    <source
                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/video_preview_h264.mp4"
                                        type="video/mp4">
                                </video>

                                <video class="ar-video ar-video-3" controls>
                                    <source
                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/video_preview_h264-1.mp4"
                                        type="video/mp4">
                                </video>



                            </div> -->

                        </div>

                        <!--scene-1 end-->

                        <!--scene-1_5 start-->
                        <div class="scene-div scene-div-1_5">


                            <img class="im-guide-icon-1-5"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/Asset-4@2x.png" alt="">
                            <img class="qr-code-icon-1-5"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/Asset-3@2x.png" alt="">
                            <img class="hc-img-1-5"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/Asset-1@2x-1.png" alt="">
                            <img class="d-img-1-5" src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/D.png"
                                alt="">



                            <img class="tag-1-5" src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/tag.png"
                                alt="">

                            <img class="bg-behind-phone bg-behind-phone-2"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/bg-behind-phone-2.jpg"
                                alt="">

                            <img class="bg-behind-phone bg-behind-phone-1"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/bg-behind-phone-1.jpg"
                                alt="">


                            <div class="iphone-div">

                                <div class="iphone-border"></div>

                                <video class="iphone-video" controls>
                                    <source
                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/ARCheckpoint1_1Vertical.mp4"
                                        type="video/mp4">
                                </video>

                                <img class="iphone-img"
                                    src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/iphone.png" alt="">
                            </div>

                            <div class="ar-videos-div">

                                <video class="ar-video ar-video-1" controls>
                                    <source
                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/ARCheckpoint1_2Horizontal.mp4"
                                        type="video/mp4">
                                </video>

                                <video class="ar-video ar-video-2" controls>
                                    <source
                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/ARCheckpoint2_2Vectical.mp4"
                                        type="video/mp4">
                                </video>





                            </div>

                        </div>

                        <!--scene-1_5 end-->



                        <!--scene-2 start-->

                        <div class="scene-div scene-div-2">


                            <div class="scene-2-screen scene-2-screen-1">

                                <!-- <div class="scene-2-txt-1" style="font-size: 100px; display: block;">
                                    <span> 融教於樂 知性體驗</span> <br>
                                    <span class="roboto" style="font-size: 84px;margin: 0 0 0 70px;">Get different
                                        learning
                                        experience</span><br>
                                    <span class="roboto" style="font-size: 84px;margin: 0 0 0 124px;"> through the
                                        programmes</span>
                                </div> -->
                                <img class="tag2" src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/tag2.png"
                                    alt="">

                                <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/08/wall.jpg" alt="">

                            </div>

                            <!-- <div class="scene-2-screen scene-2-screen-2">
                                <div class="screen-2-bg"></div>
                            </div> -->
                            <div class="scene-2-screen scene-2-screen-2">

                                <div class="scene-2-screen-2-slide">
                                    <div class="event-div one-col-width">
                                        <div class="event-title-div" style="background:#394d64;">
                                            <div> <span style="font-size: 60px;">免費公眾導賞</span> <br> <span
                                                    style="font-size: 50px; font-weight:bold">Free Public Guide
                                                    Tours</span> </div>
                                        </div>
                                        <div class="event-content-div" style="background:#fff">
                                            <div style=" width: 530px; ">
                                                <div style="font-size: 65px;font-weight: bold;">09:00 - 13:00<span
                                                        style=" font-size: 32px; "> AM /</span> <br> 18:00 - 20:00<span
                                                        style=" font-size: 32px; "> PM</span></div>
                                                <div style="font-size: 28px;color: #808080;margin: 20px 0 0 0;"
                                                    class=""> 逢周末及公眾假期 <br> Weekends &amp; Public Holidays </div>
                                                <div style="height: 6px;background:#394d64;margin: 25px 0 0 0;"
                                                    class=""> </div>
                                                <div class="" style=" font-size: 30px; margin: 39px 0 0 0; "> 同暢遊 齊共賞
                                                    <br> Enjoy the visit by inspiring experiences in Art • History •
                                                    Science under the LCSD Museums
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-div one-col-width">
                                        <div class="event-title-div" style="background:#225580;">
                                            <div> <span style="font-size: 60px;">探索地帶 </span> <br> <span
                                                    style="font-size: 50px; font-weight:bold">Discovery Zone</span>
                                            </div>
                                        </div>
                                        <div class="event-content-div" style="background:#fff">
                                            <div style=" width: 530px; ">
                                                <div style="font-size: 65px;font-weight: bold;">10:00<span
                                                        style=" font-size: 32px; "> AM -</span> <br> 15:00<span
                                                        style=" font-size: 32px; "> PM</span></div>
                                                <div style="font-size: 28px;color: #808080;margin: 20px 0 0 0;"
                                                    class=""> 逢周末及公眾假期 <br> Weekends &amp; Public Holidays </div>
                                                <div style="height: 6px;background:#225580;margin: 25px 0 0 0;"
                                                    class=""> </div>
                                                <div class="" style=" font-size: 30px; margin: 39px 0 0 0; "> 嘗探索、享體驗
                                                    <br>
                                                    To Explore, To Learnz
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="scene-2-screen-2-slide">
                                    <div class="event-div one-col-width">
                                        <div class="event-title-div" style="background:#394d64;">
                                            <div> <span style="font-size: 60px;">免費公眾導賞test</span> <br> <span
                                                    style="font-size: 50px; font-weight:bold">Free Public Guide
                                                    Tours</span> </div>
                                        </div>
                                        <div class="event-content-div" style="background:#fff">
                                            <div style=" width: 530px; ">
                                                <div style="font-size: 65px;font-weight: bold;">09:00 - 13:00<span
                                                        style=" font-size: 32px; "> AM /</span> <br> 18:00 - 20:00<span
                                                        style=" font-size: 32px; "> PM</span></div>
                                                <div style="font-size: 28px;color: #808080;margin: 20px 0 0 0;"
                                                    class=""> 逢周末及公眾假期 <br> Weekends &amp; Public Holidays </div>
                                                <div style="height: 6px;background:#394d64;margin: 25px 0 0 0;"
                                                    class=""> </div>
                                                <div class="" style=" font-size: 30px; margin: 39px 0 0 0; "> 同暢遊 齊共賞
                                                    <br> Enjoy the visit by inspiring experiences in Art • History •
                                                    Science under the LCSD Museums
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-div one-col-width">
                                        <div class="event-title-div" style="background:#225580;">
                                            <div> <span style="font-size: 60px;">探索地帶test</span> <br> <span
                                                    style="font-size: 50px; font-weight:bold">Discovery Zone</span>
                                            </div>
                                        </div>
                                        <div class="event-content-div" style="background:#fff">
                                            <div style=" width: 530px; ">
                                                <div style="font-size: 65px;font-weight: bold;">10:00<span
                                                        style=" font-size: 32px; "> AM -</span> <br> 15:00<span
                                                        style=" font-size: 32px; "> PM</span></div>
                                                <div style="font-size: 28px;color: #808080;margin: 20px 0 0 0;"
                                                    class=""> 逢周末及公眾假期 <br> Weekends &amp; Public Holidays </div>
                                                <div style="height: 6px;/* width: 545px; */background:#000;margin: 25px 0 0 0;"
                                                    class=""> </div>
                                                <div class="" style=" font-size: 30px; margin: 39px 0 0 0; "> 嘗探索、享體驗
                                                    <br>
                                                    To Explore, To Learnz
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="scene-2-screen scene-2-screen-3">

                                <div class="scene-2-screen-3-slide">
                                    <div class="event-div one-col-width">
                                        <div class="event-title-div" style="background:#5ca8a5;">
                                            <div> <span style="font-size: 60px;">體驗基地
                                                </span> <br> <span style="font-size: 50px; font-weight:bold">Experience
                                                    Base</span> </div>
                                        </div>
                                        <div class="event-content-div" style="background:#fff">
                                            <div style=" width: 530px; ">
                                                <div style="font-size: 65px;font-weight: bold;">11:00<span
                                                        style=" font-size: 32px; "> AM /</span> <br>18:00<span
                                                        style=" font-size: 32px; "> PM</span></div>
                                                <div style="font-size: 28px;color: #808080;margin: 20px 0 0 0;"
                                                    class=""> 逢周末及公眾假期 <br> Weekends &amp; Public Holidays </div>
                                                <div style="height: 6px;background:#5ca8a5;margin: 25px 0 0 0;"
                                                    class="">
                                                </div>
                                                <div class="" style=" font-size: 30px; margin: 39px 0 0 0; "> 同暢遊 齊共賞
                                                    <br>
                                                    Enjoy the visit by inspiring experiences in Art • History • Science
                                                    under the LCSD Museums
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event-div one-col-width">
                                        <div class="event-title-div" style="background:#2e7c76;">
                                            <div> <span style="font-size: 60px;">公眾活動</span> <br> <span
                                                    style="font-size: 50px; font-weight:bold">Public Programmes</span>
                                            </div>
                                        </div>
                                        <div class="event-content-div" style="background:#fff">
                                            <div style=" width: 530px; ">
                                                <div style="font-size: 65px;font-weight: bold;">15:00<span
                                                        style=" font-size: 32px; "> PM -</span> <br> 16:30<span
                                                        style=" font-size: 32px; "> PM</span></div>
                                                <div style="font-size: 28px;color: #808080;margin: 20px 0 0 0;"
                                                    class=""> 逢星期三 <br>
                                                    Every Wednesday</div>
                                                <div style="height: 6px;background:#2e7c76;margin: 25px 0 0 0;"
                                                    class=""> </div>
                                                <div class="" style=" font-size: 30px; margin: 39px 0 0 0; ">軍事防衛的鯉魚門
                                                    <br>
                                                    Liyumen for Military Defense
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>

                        </div>
                        <!--scene-2 end-->

                        <!--scene-3 start-->
                        <div class="scene-div scene-div-3">

                            <div class="scene-3-screen scene-3-screen-1">
                                <!-- http://64.227.13.14/musemum/wp-content/uploads/2022/08/little-plant.jpg -->
                                <!-- <img class="scene-3-screen-left-img"
                                    src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/publication-left-img-1.jpg"
                                    alt=""> -->

                                <div class="publication-div">

                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/book-2.png" alt=""
                                        class="book">

                                    <div class="publication-div-text-content">
                                        <span style="font-size:35px;">
                                            我武維揚 - <br>
                                            近代中國海軍史新論 </span>
                                        <br><br>

                                        <span class="roboto" style="font-size: 30px;"> Modern Chinese Naval History:
                                            New Perspectives

                                        </span>

                                        <br><br>
                                        <span>
                                            <span style="font-size:25px;">
                                                港幣HK
                                            </span>
                                            <span style="font-size:50px;">$165</span>
                                        </span>

                                    </div>

                                </div>
                                <div class="publication-div">

                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/book-1.png" alt=""
                                        class="book">

                                    <div class="publication-div-text-content">
                                        <span style="font-size:35px;">
                                            香港在英治時期的海防歷史： <br>
                                            鯉魚門的防禦工事 </span>
                                        <br><br>

                                        <span class="roboto" style="font-size: 30px;"> Notes on the History of Hong
                                            Kong's
                                            Coastal Defences
                                            during the British
                                            Administration, with
                                            Special
                                            Reference to Lei Yue Mun
                                        </span>

                                        <br><br>
                                        <span>
                                            <span style="font-size:25px;">
                                                港幣HK
                                            </span>
                                            <span style="font-size:50px;">$165</span>
                                        </span>

                                    </div>

                                </div>
                                <!-- <div class="publication-div"></div> -->

                            </div>

                            <div class="scene-3-screen scene-3-screen-2">
                                <div class="publication-div three-books">

                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/book-5.png" alt=""
                                        class="book">

                                    <div class="publication-div-text-content">
                                        <span style="font-size:35px;">
                                            香港在英治時期的海防歷史： <br>
                                            鯉魚門的防禦工事 </span>
                                        <br><br>

                                        <span class="roboto" style="font-size: 30px;"> The Defence of Hong Kong -
                                            Collected Essays on the Hong Kong-Kowloon Brigade of the East River
                                            Column
                                        </span>

                                        <br><br>
                                        <span>
                                            <span style="font-size:25px;">
                                                港幣HK
                                            </span>
                                            <span style="font-size:50px;">$130</span>
                                        </span>

                                    </div>

                                </div>
                                <div class="publication-div three-books">

                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/book-4.png" alt=""
                                        class="book">

                                    <div class="publication-div-text-content">
                                        <span style="font-size:35px;">
                                            我的海防手帳
                                        </span>
                                        <br><br>

                                        <span class="roboto" style="font-size: 30px;"> My Coastal Defence Notes

                                        </span>

                                        <br><br>
                                        <span>
                                            <span style="font-size:25px;">
                                                港幣HK
                                            </span>
                                            <span style="font-size:50px;">$88</span>
                                        </span>

                                    </div>

                                </div>
                                <div class="publication-div three-books">

                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/book-3.png" alt=""
                                        class="book">

                                    <div class="publication-div-text-content">
                                        <span style="font-size:35px;">
                                            近代中國海防 - <br>
                                            軍事與經濟 </span>
                                        <br><br>






                                        <span class="roboto" style="font-size: 30px;"> Modern Chinese Coastal
                                            Defense -
                                            military and
                                            economics

                                        </span>

                                        <br><br>
                                        <span>
                                            <span style="font-size:25px;">
                                                港幣HK
                                            </span>
                                            <span style="font-size:50px;">$165</span>
                                        </span>

                                    </div>

                                </div>
                            </div>

                            <div class="scene-3-screen scene-3-screen-3">


                                <div class="scene-3-screen-3-txt"> <span style=" font-size: 120px; ">好書</span> <span
                                        style=" font-size: 70px; margin-left: 20px; ">伴回家</span> <br> <span
                                        class="roboto" style=" font-size: 50px; margin-left: 158px; ">Joyful</span>
                                    <span class="roboto" style=" font-size: 80px; margin-left: 20px; ">Readings</span>
                                </div>

                                <img class="scene-3-screen-right-img"
                                    src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/publication-right-img-1.png"
                                    alt="">
                            </div>


                        </div>
                        <!--scene-3 end-->

                        <!--scene-4-start-->
                        <div class="scene-div scene-div-4">
                            <img class="weather-bg" src="" alt="">
                            <div class="scene-4-screen scene-4-screen-1">



                                <div class="scene-4-screen-1-txt"> <span style="font-size: 70px;">現在</span><span
                                        style="font-size: 100px;margin-left: 12px;">天氣</span> <br> <span class="roboto"
                                        style="font-size:50px;margin-left: 200px;">Current</span><span class="roboto"
                                        style="font-size: 60px;margin-left: 10px;">Weather</span>
                                </div>

                            </div>
                            <div class="scene-4-screen scene-4-screen-2">

                                <div class="weather-center-blk">
                                    <div class="scene-4-screen-2-block scene-4-screen-2-block-1">
                                        <div class="weather-msg"> <img class="weather-icon today-weather-icon" src=""
                                                alt="">

                                            <div class="weekday-txt">
                                                <!-- <span>星期一</span> <br> <span class="roboto">MONDAY</span>  -->
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="weather-msg roboto"
                                            style="left: 0;transform: translate(0px, -50%);padding: 0 77px;top: 50%;">
                                            <span style="font-size:50px">
                                                史蹟徑暫時關閉 <br>
                                                Historic Trail is temporarily closed
                                            </span>
                                        </div>
                                    </div>
                                    <div class="scene-4-screen-2-block scene-4-screen-2-block-2">
                                        <div class="weather-msg roboto"
                                            style=" display: block; width: 100%; text-align: center; ">
                                            <div style=" display: inline-block; /* text-align: left; */ "> <span
                                                    style="font-size: 400px;" class="current-temperature"></span><sup
                                                    style="font-size: 114px;position: relative;top: -264px;">o</sup><span
                                                    style="font-size: 400px;">C</span> </div>
                                            <div class="weather-place">筲箕灣 <br> Shau Kei Wan </div>
                                        </div>


                                        <div class="weather-msg roboto"
                                            style="left: 50%;transform: translate(-50%, -50%);padding: 0 77px;top: 50%;">
                                            <span style="font-size:50px">

                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td style=" "><img
                                                                    src="http://64.227.13.14/musemum/wp-content/uploads/2022/06/signal3.png"
                                                                    alt="" style=" width: 371px;"></td>
                                                            <td rowspan="2"
                                                                style=" font-size: 400px; padding-left: 50px;line-height: 1.1; ">
                                                                3</td>
                                                        </tr>
                                                        <tr>
                                                            <td style=" font-size: 61px; ">三號強風信號</td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                            </span>
                                        </div>

                                    </div>
                                    <div class="scene-4-screen-2-block scene-4-screen-2-block-3">


                                        <div class="weather-bottom-div" style="margin-right: 62px;">
                                            <img class="weather-bottom-icon"
                                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/wind-icon.png"
                                                alt="">
                                            XX mph
                                        </div>

                                        <div class="weather-sep">|</div>

                                        <div class="weather-bottom-div">
                                            <img class="weather-bottom-icon"
                                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/wet-icon.png"
                                                alt="">
                                            <span class="current-humidity"></span>%


                                        </div>

                                        <div class="weather-sep">|</div>

                                        <div class="weather-bottom-div">
                                            <img class="weather-bottom-icon"
                                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/umbrella-icon.png"
                                                alt="">

                                            XX%
                                        </div>



                                    </div>
                                </div>

                            </div>
                            <div class="scene-4-screen scene-4-screen-3">

                                <div class="weekdays-div">

                                    <div class="weekday-div">

                                        <div class="weekday-title-div-wrapper">
                                            <div class="weekday-title-div">一 MON</div>
                                        </div>
                                        <div class="weekday-degree-div-wrapper">

                                            <div class="weekday-degree-div">

                                                <div class="weekday-weather-icon">
                                                    <img class="w-100"
                                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/pic51.png"
                                                        alt="">
                                                </div>

                                                <div class="degree-div roboto">
                                                    <span class="degree">24</span>
                                                    <sup style="font-size: 43px;position: relative;top: 31px;">o</sup>
                                                    <span>C</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="weekday-div">
                                        <div class="weekday-title-div-wrapper">

                                            <div class="weekday-title-div">二 TUE</div>
                                        </div>
                                        <div class="weekday-degree-div-wrapper">

                                            <div class="weekday-degree-div">

                                                <div class="weekday-weather-icon">
                                                    <img class="w-100"
                                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/pic51.png"
                                                        alt="">
                                                </div>

                                                <div class="degree-div roboto">
                                                    <span class="degree">18</span>
                                                    <sup style="font-size: 43px;position: relative;top: 31px;">o</sup>
                                                    <span>C</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="weekday-div">
                                        <div class="weekday-title-div-wrapper">

                                            <div class="weekday-title-div">三 WED</div>
                                        </div>
                                        <div class="weekday-degree-div-wrapper">
                                            <div class="weekday-degree-div">

                                                <div class="weekday-weather-icon">
                                                    <img class="w-100"
                                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/pic51.png"
                                                        alt="">
                                                </div>

                                                <div class="degree-div roboto">
                                                    <span class="degree">18</span>
                                                    <sup style="font-size: 43px;position: relative;top: 31px;">o</sup>
                                                    <span>C</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="weekday-div">
                                        <div class="weekday-title-div-wrapper">

                                            <div class="weekday-title-div">四 THU</div>
                                        </div>
                                        <div class="weekday-degree-div-wrapper">

                                            <div class="weekday-degree-div">

                                                <div class="weekday-weather-icon">
                                                    <img class="w-100"
                                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/pic51.png"
                                                        alt="">
                                                </div>

                                                <div class="degree-div roboto">
                                                    <span class="degree">18</span>
                                                    <sup style="font-size: 43px;position: relative;top: 31px;">o</sup>
                                                    <span>C</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="weekday-div">
                                        <div class="weekday-title-div-wrapper">

                                            <div class="weekday-title-div">五 FRI</div>
                                        </div>
                                        <div class="weekday-degree-div-wrapper">

                                            <div class="weekday-degree-div">

                                                <div class="weekday-weather-icon">
                                                    <img class="w-100"
                                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/pic51.png"
                                                        alt="">
                                                </div>

                                                <div class="degree-div roboto">
                                                    <span class="degree">18</span>
                                                    <sup style="font-size: 43px;position: relative;top: 31px;">o</sup>
                                                    <span>C</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="weekday-div">
                                        <div class="weekday-title-div-wrapper">

                                            <div class="weekday-title-div">六 SAT</div>
                                        </div>
                                        <div class="weekday-degree-div-wrapper">

                                            <div class="weekday-degree-div">

                                                <div class="weekday-weather-icon">
                                                    <img class="w-100"
                                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/pic51.png"
                                                        alt="">
                                                </div>

                                                <div class="degree-div roboto">
                                                    <span class="degree">18</span>
                                                    <sup style="font-size: 43px;position: relative;top: 31px;">o</sup>
                                                    <span>C</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="weekday-div">
                                        <div class="weekday-title-div-wrapper">

                                            <div class="weekday-title-div">日 SUN</div>
                                        </div>
                                        <div class="weekday-degree-div-wrapper">

                                            <div class="weekday-degree-div">

                                                <div class="weekday-weather-icon">
                                                    <img class="w-100"
                                                        src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/pic51.png"
                                                        alt="">
                                                </div>

                                                <div class="degree-div roboto">
                                                    <span class="degree">18</span>
                                                    <sup style="font-size: 43px;position: relative;top: 31px;">o</sup>
                                                    <span>C</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <!--scene-4-end-->

                        <!--scene-5-start-->
                        <div class="scene-div scene-div-5">

                            <img class="white-big-mcd-logo h-100"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/white-big-mcd-logo.png"
                                alt="">


                            <img class="scene-5-right-img-bg"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/scene-5-right-bg.jpg"
                                alt="">

                            <div class="scene-5-screen scene-5-screen-1">

                                <div class="disc-c-div">
                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/disc-c.png" alt="">
                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/disc-a.png" alt="">
                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/disc-b.png" alt="">

                                </div>
                                <div class="disc-b-div">
                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/disc-b.png" alt="">
                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/disc-c.png" alt="">
                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/disc-a.png" alt="">
                                </div>
                            </div>
                            <div class="scene-5-screen scene-5-screen-2">

                                <div class="disc-a-div">
                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/disc-a.png" alt="">
                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/disc-b.png" alt="">
                                    <img src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/disc-c.png" alt="">

                                </div>
                            </div>
                            <div class="scene-5-screen scene-5-screen-3">

                                <div class="scene-5-screen-3-txt"> <span style="font-size: 84px;">博物館</span> <span
                                        style="font-size: 150px;margin-left: 19px;">餐廳</span> <br> <span class="roboto"
                                        style="font-size: 92px;margin-left: 308px;">Museum</span><span class="roboto"
                                        style="font-size: 128px;margin-left: 15px;">Cafe</span>
                                </div>
                            </div>

                        </div>
                        <!--scene-5-end-->


                        <!--scene-6-start-->
                        <div class="scene-div scene-div-6">


                            <img class="white-big-mcd-logo h-100" class="h-100"
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/white-big-mcd-logo.png"
                                alt="">


                            <div class="scene-6-screen scene-6-screen-1">

                                <img class="scene-6-left-bg"
                                    src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/scene-6-left-bg.jpg"
                                    alt="">
                            </div>
                            <div class="scene-6-screen scene-6-screen-2">


                                <div class="scene-6-screen-2-txt">
                                    <ul>
                                        <li>預防新型冠狀病毒在社區傳播</li>
                                        <li>本博物館採取以下防疫措施以保障公眾健康</li>
                                        <li>訪客進館前須佩戴口罩，以保障公眾及員工健康</li>
                                        <li>我們為所有進入博物館的人士及工作人員量度體溫，多謝合作</li>
                                        <li>Help prevent the Novel Coronavirus from spreading in the community</li>
                                        <li>Our museum implements the following precaution measures</li>
                                        <li>It is essential for visitor to wear masks upon entry the museum to
                                            safeguard
                                            the health of
                                            visitors
                                            and staff members</li>
                                        <li>We arrange temperature check for all visitors and staff who enter the
                                            museum
                                            Thank you for your cooperation</li>
                                    </ul>
                                </div>

                                <img class="scene-6-screen-2-img"
                                    src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/mask-img.png" alt="">
                            </div>
                            <div class="scene-6-screen scene-6-screen-3">

                                <div class="scene-6-screen-3-txt"> <span style="font-size: 70px;">防疫</span><span
                                        style="font-size: 130px;margin-left: 20px;">資訊</span> <br> <span class="roboto"
                                        style="font-size: 60px;margin-left: 74px;">Epidemic
                                        Prevention</span> <span style="font-size: 80px;margin-left: 20px;"
                                        class="roboto">Information</span>
                                </div>
                            </div>
                        </div>
                        <!--scene-6-end-->


                    </div>

                    <div class="start-panel">
                        <video id="test-video" width="320" height="240" controls autoplay>
                            <source
                                src="http://64.227.13.14/musemum/wp-content/uploads/2022/05/5_Animation_13_FinalRender.mp4"
                                type="video/mp4">
                        </video>
                        <a href="javascript:void(0);" class="start-btn">START</a>
                    </div>
                    <a href="javascript:void(0);" class="stage-btn stage-btn-1">1</a>
                    <a href="javascript:void(0);" class="stage-btn stage-btn-1_5">1.5</a>

                    <a href="javascript:void(0);" class="stage-btn stage-btn-2">2</a>
                    <a href="javascript:void(0);" class="stage-btn stage-btn-3">3</a>
                    <a href="javascript:void(0);" class="stage-btn stage-btn-4">4</a>
                    <a href="javascript:void(0);" class="stage-btn stage-btn-5">5</a>
                    <a href="javascript:void(0);" class="stage-btn stage-btn-6">6</a>

                    <!-- 0 (for Sunday) through 6 (for Saturday) -->

                    <!-- <div style="font-size:100px"><?php echo date('w');?></div> -->
                    <?php
date_default_timezone_set('Asia/Hong_Kong');
?>
                    <script type="text/javascript">
                    $(function() {

                        var first = true;
                        var v_idx = 1;
                        var site_url = '<?php echo get_site_url();?>';
                        var main_sec = 0;
                        //    var current_week_day_num = <?php //echo date('w');?>;


                        setInterval(() => {

                            $.get("https://data.weather.gov.hk/weatherAPI/opendata/weather.php?dataType=fnd&lang=tc",
                                function(result) {
                                    // console.log(result);

                                    const weekday = ["SUNDAY", "MONDAY", "TUESDAY", "WEDNESDAY",
                                        "THURSDAY", "FRIDAY",
                                        "SATURDAY"
                                    ];
                                    const weekday_chi = ["星期日", "星期一", "星期二", "星期三", "星期四",
                                        "星期五",
                                        "星期六"
                                    ];
                                    const weekday_display = ["日 SUN", "一 MON", "二 TUE", "三 WED",
                                        "四 THUR", "五 FRI",
                                        "六 SAT"
                                    ];

                                    const d = new Date();
                                    let day = weekday[d.getDay()];
                                    let day_chi = weekday_chi[d.getDay()];

                                    var display_day_num_order = [];
                                    var display_day_chi_order = [];


                                    var idx = d.getDay();
                                    var total_display_day = 7;
                                    display_day_num_order.push(d.getDay());

                                    while (display_day_num_order.length < total_display_day) {
                                        idx++;
                                        if (idx > total_display_day - 1) {
                                            idx = 0;
                                        }
                                        display_day_num_order.push(idx);
                                    }
                                    // console.log(display_day_num_order);

                                    for (i = 0; i < display_day_num_order.length; i++) {
                                        display_day_chi_order[i] = weekday_display[
                                            display_day_num_order[i]];
                                    }

                                    // console.log(display_day_chi_order);
                                    for (i = 0; i < display_day_num_order.length; i++) {
                                        $('.weekday-title-div').eq(i).html(
                                            display_day_chi_order[
                                                i]);
                                    }

                                    $('.weekday-txt').html('<span>' + day_chi +
                                        '</span> <br> <span class="roboto">' +
                                        day + '</span>');


                                });

                            $.get("https://data.weather.gov.hk/weatherAPI/opendata/weather.php?dataType=rhrread&lang=tc",
                                function(result) {

                                    var today_weather_icon_idx = result.icon[0];
                                    var current_temperature = result.temperature.data[1].value;
                                    var current_humidity = result.humidity.data[0].value;
                                    // console.log(current_humidity);
                                    // console.log(55);


                                    // weather-bg
                                    const dark_bg_idx_arr = [53, 54, 62, 63, 64, 65];
                                    if (dark_bg_idx_arr.includes(today_weather_icon_idx)) {
                                        $('.weather-bg').attr('src', site_url +
                                            '/weather-icon/dark-bg.jpg');
                                    } else {
                                        $('.weather-bg').attr('src', site_url +
                                            '/weather-icon/sunny-bg.jpg');
                                    }


                                    // if (today_weather_icon_idx)
                                    // $('.weather-bg').attr('src', site_url + '/weather-icon/pic/sunny-bg.png');


                                    $('.today-weather-icon').attr('src', site_url +
                                        '/weather-icon/pic' +
                                        today_weather_icon_idx + '.png');

                                    $('.current-temperature').html(current_temperature);
                                    $('.current-humidity').html(current_humidity);


                                    $('.weekday-div').eq(0).find('.degree').html(
                                        current_temperature);
                                    $('.weekday-div').eq(0).find('.weekday-weather-icon img')
                                        .attr(
                                            'src', site_url +
                                            '/weather-icon/pic' +
                                            today_weather_icon_idx + '.png');
                                })


                            // https://data.weather.gov.hk/weatherAPI/opendata/weather.php?dataType=fnd&lang=tc



                            $.get("https://data.weather.gov.hk/weatherAPI/opendata/weather.php?dataType=fnd&lang=tc",
                                function(result) {

                                    for (i = 0; i < 7; i++) {

                                        var degree = Math.floor((result.weatherForecast[i]
                                                .forecastMaxtemp.value +
                                                result
                                                .weatherForecast[i].forecastMintemp.value) /
                                            2);

                                        var weather_icon_idx = result.weatherForecast[i]
                                            .ForecastIcon;
                                        // 

                                        // console.log(degree);
                                        $('.weekday-div').eq(i + 1).find('.degree').html(
                                            degree);
                                        $('.weekday-div').eq(i + 1).find(
                                            '.weekday-weather-icon img').attr('src',
                                            site_url +
                                            '/weather-icon/pic' +
                                            weather_icon_idx + '.png');


                                    }


                                });
                            main_sec++;
                            console.log('second:' + main_sec);



                        }, 1000);








                        $('.start-btn').click(function() {
                            $('#test-video').fadeOut(0);
                            $(this).fadeOut(0);
                            $('.start-panel').fadeOut(0);
                            scene1();
                        });
                        //scene1
                        function scene1() {


                            first = true;
                            // $('.scene-div-1 .white-big-mcd-logo').css({
                            //     'left': '1920px'
                            // });
                            // $('.scene-1-green-bg').fadeOut(0);


                            $('.bg-behind-phone').fadeOut(0);
                            $('.iphone-div').fadeOut(0);

                            $('.scene-1-txt-5').fadeOut(0);
                            $('.ar-videos-div').fadeOut(0);

                            // $('.musemum-card,.scene-1-txt-1,.scene-1-txt-2').fadeIn(0);

                            $('.scene-div').fadeOut(0);
                            $('.app-icon').fadeIn(0);
                            $('.qr-code-group-1,.qr-code-group-2').fadeIn(0);
                            $('.qr-code-group-1,.qr-code-group-2,.scene-1-txt-3,.scene-1-txt-4').fadeOut(0);
                            $('.app-icon').fadeOut(0);
                            $('.app-icon').css({
                                'left': '1463px'
                            });
                            // left: 1463px;
                            // 
                            //scene1
                            $('.scene-div.scene-div-1').fadeIn(0);



                            $('.scene-1-green-bg').animate({
                                'height': '100%'
                            }, 500, function() {


                                $('.page-1-bg').animate({
                                    'top': '0'
                                }, 500);

                                $('.scene-div-1 .white-big-mcd-logo').animate({
                                    'bottom': '0px'
                                }, 500);
                                $('.scene-div-1 .musemum-card').animate({
                                    'top': '0px'
                                }, 500);

                                setTimeout(() => {
                                    $('.scene-1-txt-1').fadeIn(500);
                                    $('.scene-1-musemum-pass-txt').fadeIn(500);
                                }, 500);




                                // setTimeout(() => {
                                //     $('.scene-1-txt-5').fadeIn(500);
                                // }, 500);


                                setTimeout(() => {






                                    // $('.app-icon').fadeOut(0);
                                    // $('.qr-code-group-1,.qr-code-group-2').fadeOut(0);
                                    // setTimeout(() => {
                                    //     $('.qr-code-group-1,.qr-code-group-2,.scene-1-txt-3,.scene-1-txt-4')
                                    //         .fadeIn(
                                    //             200);
                                    // }, 800);


                                    // setTimeout(() => {
                                    //     $('.app-icon').fadeIn(0);
                                    // }, 800);

                                    // $('.white-big-mcd-logo').animate({
                                    //     'left': '202px'
                                    // }, 1000, function() {

                                    //     $('.iphone-video').trigger('play');


                                    // $('.app-icon').animate({
                                    //     'left': '2172px'
                                    // }, 500, function() {


                                    //     $('.iphone-div').fadeIn(0);

                                    //     $('.iphone-div').addClass(
                                    //     'rotate1');

                                    //     $('.iphone-div .iphone-video')
                                    //         .unbind(
                                    //             'ended')
                                    //         .on('ended',
                                    //             function() {

                                    //                 if (first) {
                                    //                     console.log(
                                    //                     'first');
                                    //                     first = false;
                                    //                     $('.iphone-div')
                                    //                         .removeClass(
                                    //                             'rotate1');
                                    //                     $('.iphone-div')
                                    //                         .addClass(
                                    //                             'rotate2');
                                    //                     $('.ar-videos-div')
                                    //                         .delay(
                                    //                             500)
                                    //                         .fadeIn(0);
                                    //                     $('.ar-video')
                                    //                         .fadeOut(0);
                                    //                     $('.ar-video.ar-video-1')
                                    //                         .fadeIn(0);

                                    //                     $('.ar-video-1')
                                    //                         .trigger(
                                    //                             'play');



                                    //                     v_idx = 1;
                                    //                     var total_video = $(
                                    //                             '.bg-behind-phone'
                                    //                             )
                                    //                         .length;
                                    //                     // console.log('play video' + v_idx);
                                    //                     console.log(
                                    //                         'playing video' +
                                    //                         v_idx);
                                    //                     $('.ar-videos-div .ar-video')
                                    //                         .unbind('ended')
                                    //                         .on(
                                    //                             'ended',
                                    //                             function() {

                                    //                                 console
                                    //                                     .log(
                                    //                                         'ended'
                                    //                                         );

                                    //                                 if (v_idx ==
                                    //                                     total_video
                                    //                                 ) {

                                    //                                     scene2
                                    //                                         ();
                                    //                                 } else {


                                    //                                     $('.ar-video-' +
                                    //                                             v_idx
                                    //                                         )
                                    //                                         .fadeOut(
                                    //                                             500
                                    //                                         );
                                    //                                     $('.bg-behind-phone-' +
                                    //                                             v_idx
                                    //                                         )
                                    //                                         .fadeOut(
                                    //                                             500
                                    //                                         );
                                    //                                     v_idx++;
                                    //                                     $('.ar-video-' +
                                    //                                             v_idx
                                    //                                         )
                                    //                                         .fadeIn(
                                    //                                             500
                                    //                                         );
                                    //                                     $('.ar-video-' +
                                    //                                             v_idx
                                    //                                         )
                                    //                                         .trigger(
                                    //                                             'play'
                                    //                                         );
                                    //                                     $('.bg-behind-phone-' +
                                    //                                             v_idx
                                    //                                         )
                                    //                                         .fadeIn(
                                    //                                             500
                                    //                                         );
                                    //                                     console
                                    //                                         .log(
                                    //                                             'playing video' +
                                    //                                             v_idx
                                    //                                         );

                                    //                                 }


                                    //                             })
                                    //                 }


                                    //             });


                                    //     // iphone-div
                                    // });


                                    // });
                                    // $('.scene-1-green-bg').fadeIn(500);
                                    // $('.bg-behind-phone-1').fadeIn(500);
                                    // $('.scene-1-txt-5').fadeIn(500);


                                    // $('.musemum-card,.scene-1-txt-1,.scene-1-txt-2').fadeOut(
                                    //     200);

                                    scene1_5();

                                }, 15000);

                            })







                        }

                        //scene1_5

                        function scene1_5() {

                            $('.tag-1-5').fadeOut(0);
                            $('.scene-div.scene-div-1_5').fadeIn(0);
                            $('.scene-div-1_5').css({
                                'left': '5760px'
                            });

                            $('.hc-img-1-5,.d-img-1-5').css({
                                'top': '-1080px'
                            });

                            $('.iphone-border').fadeOut(0);


                            $('.im-guide-icon-1-5,.qr-code-icon-1-5').fadeOut(0);


                            console.log('scene1_5');

                            $('.bg-behind-phone').fadeIn(0);
                            $('.bg-behind-phone').css({
                                'left': '5760px'
                            })

                            $('.bg-behind-phone').animate({
                                'left': '2235px'
                            }, 2000);

                            setTimeout(() => {
                                $('.tag-1-5').fadeIn(500);

                            }, 2000);





                            $('.scene-div-1_5').animate({
                                'left': '0px'
                            }, 1000, function() {

                                $('.hc-img-1-5').animate({
                                    'top': '500px'
                                }, 1000);

                                $('.d-img-1-5').animate({
                                    'top': '0px'
                                }, 1000);




                                setTimeout(() => {

                                    $('.im-guide-icon-1-5').fadeIn(500)
                                    $('.qr-code-icon-1-5').fadeIn(500)
                                }, 800);


                                setTimeout(() => {



                                    $('.iphone-div').fadeIn(0);

                                    $('.iphone-div').addClass(
                                        'rotate1');

                                    setTimeout(() => {
                                        $('.iphone-border').fadeIn(500)

                                    }, 500);


                                    $('.iphone-video').trigger('play');


                                    $('.iphone-div .iphone-video')
                                        .unbind(
                                            'ended')
                                        .on('ended',
                                            function() {

                                                if (first) {
                                                    console.log(
                                                        'first');
                                                    first = false;
                                                    $('.iphone-div')
                                                        .removeClass(
                                                            'rotate1');
                                                    $('.iphone-div')
                                                        .addClass(
                                                            'rotate2');
                                                    $('.ar-videos-div')
                                                        .delay(
                                                            500)
                                                        .fadeIn(0);
                                                    $('.ar-video')
                                                        .fadeOut(0);
                                                    $('.ar-video.ar-video-1')
                                                        .fadeIn(0);

                                                    $('.ar-video-1')
                                                        .trigger(
                                                            'play');



                                                    v_idx = 1;
                                                    var total_video = $(
                                                            '.bg-behind-phone'
                                                        )
                                                        .length;
                                                    // console.log('play video' + v_idx);
                                                    console.log(
                                                        'playing video' +
                                                        v_idx);
                                                    $('.ar-videos-div .ar-video')
                                                        .unbind('ended')
                                                        .on(
                                                            'ended',
                                                            function() {

                                                                console
                                                                    .log(
                                                                        'ended'
                                                                    );

                                                                if (v_idx ==
                                                                    total_video
                                                                ) {

                                                                    scene2();
                                                                } else {


                                                                    $('.ar-video-' +
                                                                            v_idx
                                                                        )
                                                                        .fadeOut(
                                                                            500
                                                                        );
                                                                    $('.bg-behind-phone-' +
                                                                            v_idx
                                                                        )
                                                                        .fadeOut(
                                                                            500
                                                                        );
                                                                    v_idx++;
                                                                    $('.ar-video-' +
                                                                            v_idx
                                                                        )
                                                                        .fadeIn(
                                                                            500
                                                                        );
                                                                    $('.ar-video-' +
                                                                            v_idx
                                                                        )
                                                                        .trigger(
                                                                            'play'
                                                                        );
                                                                    $('.bg-behind-phone-' +
                                                                            v_idx
                                                                        )
                                                                        .fadeIn(
                                                                            500
                                                                        );
                                                                    console
                                                                        .log(
                                                                            'playing video' +
                                                                            v_idx
                                                                        );

                                                                }


                                                            })
                                                }


                                            });

                                }, 2000);

                                // $('.iphone-div').removeClass('rotate1');
                                // $('.iphone-div').removeClass('rotate2');
                            });

                            // $('.scene-div-2').css({
                            //     'left': '-5760px'
                            // })

                        }

                        //scene2
                        function scene2() {
                            $('.scene-div.scene-div-2').fadeIn(0);

                            console.log('scene2');

                            $('.scene-div-2').css({
                                'left': '-5760px'
                            })


                            $('.scene-div-2').animate({
                                'left': '0px'
                            }, 1000, function() {
                                $('.iphone-div').removeClass('rotate1');
                                $('.iphone-div').removeClass('rotate2');


                            });

                            $('.scene-2-screen-2-slide').fadeOut(0);
                            $('.scene-2-screen-2-slide').eq(0).fadeIn(0);

                            $('.scene-2-screen-3-slide').fadeOut(0);
                            $('.scene-2-screen-3-slide').eq(0).fadeIn(0);

                            var scene_2_screen_2_slide_idx = 0;
                            var scene_2_screen_3_slide_idx = 0;

                            var scene_2_screen_2_slide_num = $('.scene-2-screen-2-slide').length;
                            var scene_2_screen_3_slide_num = $('.scene-2-screen-3-slide').length;

                            var interval = setInterval(() => {
                                if (scene_2_screen_2_slide_num > 1) {
                                    $('.scene-2-screen-2-slide').eq(scene_2_screen_2_slide_idx)
                                        .fadeOut(
                                            500);
                                    if (scene_2_screen_2_slide_idx + 1 >
                                        scene_2_screen_2_slide_num -
                                        1) {
                                        scene_2_screen_2_slide_idx = 0;
                                    } else {
                                        scene_2_screen_2_slide_idx++;
                                    }
                                    $('.scene-2-screen-2-slide').eq(scene_2_screen_2_slide_idx)
                                        .fadeIn(
                                            500);
                                }
                                if (scene_2_screen_3_slide_num > 1) {

                                    $('.scene-2-screen-3-slide').eq(scene_2_screen_3_slide_idx)
                                        .fadeOut(
                                            500);
                                    if (scene_2_screen_3_slide_idx + 1 >
                                        scene_2_screen_3_slide_num -
                                        1) {
                                        scene_2_screen_3_slide_idx = 0;
                                    } else {
                                        scene_2_screen_3_slide_idx++;
                                    }
                                    $('.scene-2-screen-3-slide').eq(scene_2_screen_3_slide_idx)
                                        .fadeIn(
                                            500);
                                }


                            }, 10000);

                            setTimeout(() => {
                                clearInterval(interval);
                                // scene3();

                            }, 40000);





                        }

                        function scene3() {
                            $('.scene-div.scene-div-3').fadeIn(0);

                            console.log('scene3');
                            $('.scene-div-3').css({
                                'left': '-5760px'
                            })
                            $('.scene-div-3').animate({
                                'left': '0px'
                            }, 1000);
                            setTimeout(() => {
                                // scene4();
                            }, 20000);
                        }

                        function scene4() {
                            $('.scene-div.scene-div-4').fadeIn(0);

                            $('.weather-bg').removeClass('scaling');


                            console.log('scene4');

                            $('.scene-4-screen-2-block-1 .weather-msg').fadeOut(0);
                            $('.scene-4-screen-2-block-1 .weather-msg').eq(0).fadeIn(0);

                            $('.scene-4-screen-2-block-2 .weather-msg').fadeOut(0);
                            $('.scene-4-screen-2-block-2 .weather-msg').eq(0).fadeIn(0);



                            var slide_idx_1 = 0;
                            var slide_idx_2 = 0;

                            var slide_num_1 = $('.scene-4-screen-2-block-1 .weather-msg').length;
                            var slide_num_2 = $('.scene-4-screen-2-block-2 .weather-msg').length;

                            var weather_interval = setInterval(() => {

                                // console.log(sec);
                                if (slide_num_1 > 1) {
                                    $('.scene-4-screen-2-block-1 .weather-msg').eq(slide_idx_1)
                                        .fadeOut(
                                            500);
                                    if (slide_idx_1 + 1 > slide_num_1 - 1) {
                                        slide_idx_1 = 0;
                                    } else {
                                        slide_idx_1++;
                                    }
                                    $('.scene-4-screen-2-block-1 .weather-msg').eq(slide_idx_1)
                                        .fadeIn(
                                            500);
                                }
                                if (slide_num_2 > 1) {

                                    $('.scene-4-screen-2-block-2 .weather-msg').eq(slide_idx_2)
                                        .fadeOut(
                                            500);
                                    if (slide_idx_2 + 1 > slide_num_2 - 1) {
                                        slide_idx_2 = 0;
                                    } else {
                                        slide_idx_2++;
                                    }
                                    $('.scene-4-screen-2-block-2 .weather-msg').eq(slide_idx_2)
                                        .fadeIn(
                                            500);
                                }


                            }, 10000);



                            $('.weather-bg').css({
                                'transform': 'scale(1)'
                            })

                            $('.scene-4-screen-2-block').fadeOut(0);


                            $('.weekday-title-div').fadeOut(0);
                            $('.weekday-degree-div').fadeOut(0);
                            $('.weekday-weather-icon').fadeOut(0);
                            $('.degree-div').fadeOut(0);

                            $('.scene-div-4').css({
                                'left': '-5760px'
                            })


                            $('.scene-div-4').animate({
                                'left': '0px'
                            }, 1000, function() {


                                $('.scene-4-screen-2-block').eq(0).slideDown(500);
                                $('.scene-4-screen-2-block').eq(1).slideDown(500);

                                $('.scene-4-screen-2-block').delay(400).eq(2).slideDown(600);



                                for (i = 0; i < $('.degree-div').length; i++) {

                                    $('.weekday-title-div').eq(i).delay(100 + i * 30).slideDown(
                                        500);
                                    $('.weekday-degree-div').eq(i).delay(700 + i * 30).slideDown(
                                        500);
                                    $('.weekday-weather-icon').eq(i).delay(700 + i * 30).fadeIn(400)
                                    $('.degree-div').eq(i).delay(700 + i * 30).fadeIn(400)

                                }

                                $('.weather-bg').addClass('scaling');


                                setTimeout(() => {
                                    clearInterval(weather_interval);
                                    scene5();
                                }, 20000);

                            });





                        }

                        function scene5() {
                            $('.scene-div.scene-div-5').fadeIn(0);

                            console.log('scene5');


                            $('.disc-a-div img').fadeOut(0);
                            $('.disc-a-div img').eq(0).fadeIn(0);

                            $('.disc-b-div img').fadeOut(0);
                            $('.disc-b-div img').eq(0).fadeIn(0);

                            $('.disc-c-div img').fadeOut(0);
                            $('.disc-c-div img').eq(0).fadeIn(0);

                            $('.scene-div-5 .white-big-mcd-logo').css({
                                'left': '901px'
                            });

                            $('.scene-div-5').css({
                                'left': '-5760px'
                            })
                            $('.disc-a-div').removeClass('bounce');
                            $('.disc-a-div').removeClass('rotatemove');
                            $('.disc-b-div').removeClass('bounce');
                            $('.disc-c-div').removeClass('bounce');


                            $('.scene-div-5').animate({
                                'left': '0px'
                            }, 1000, function() {


                                setTimeout(() => {
                                    $('.disc-a-div').addClass('bounce');

                                    setTimeout(() => {
                                        $('.disc-a-div').addClass('rotatemove');
                                    }, 500);
                                }, 500);


                                setTimeout(() => {
                                    $('.disc-b-div').addClass('bounce')
                                }, 1700);


                                setTimeout(() => {
                                    $('.disc-c-div').addClass('bounce')


                                    var sec = 1000;

                                    idx_a = 0;
                                    idx_b = 0;
                                    idx_c = 0;

                                    var interval2 = setInterval(() => {
                                        sec += 1000;

                                        console.log(sec);
                                        console.log('sec/1000' + Number.isInteger(
                                            sec /
                                            1000));
                                        if (Number.isInteger(sec / 1000)) {
                                            idx_a++;
                                            if (idx_a >= $('.disc-a-div img')
                                                .length) {
                                                idx_a = 0;
                                            }
                                            $('.disc-a-div img').fadeOut(0);
                                            $('.disc-a-div img').eq(idx_a).fadeIn(
                                                0);
                                        }
                                        console.log('sec/2000' + Number.isInteger(
                                            sec /
                                            2000));
                                        if (Number.isInteger(sec / 2000)) {
                                            idx_b++;
                                            if (idx_b >= $('.disc-b-div img')
                                                .length) {
                                                idx_b = 0;
                                            }
                                            $('.disc-b-div img').fadeOut(0);
                                            $('.disc-b-div img').eq(idx_b).fadeIn(
                                                0);
                                        }
                                        console.log('sec/3000' + Number.isInteger(
                                            sec /
                                            3000));

                                        if (Number.isInteger(sec / 3000)) {
                                            idx_c++;
                                            if (idx_c >= $('.disc-c-div img')
                                                .length) {
                                                idx_c = 0;
                                            }
                                            $('.disc-c-div img').fadeOut(0);
                                            $('.disc-c-div img').eq(idx_c).fadeIn(
                                                0);
                                        }




                                    }, 1000);




                                    setTimeout(() => {
                                        clearInterval(interval2);
                                        scene6();
                                    }, 20000);


                                }, 2000);

                            })
                        }


                        function scene6() {
                            $('.scene-div.scene-div-6').fadeIn(0);

                            $('.scene-div-6').css({
                                'left': '-5760px'
                            })
                            $('.scene-div-6 .white-big-mcd-logo').css({
                                'left': '1920px'
                            });

                            $('.scene-div-6').animate({
                                'left': '0px'
                            }, 1000, function() {




                                setTimeout(() => {
                                    scene1();
                                }, 20000);
                            })

                        }


                        $('.stage-btn-1').click(function() {
                            scene1();
                        })
                        $('.stage-btn-1_5').click(function() {
                            scene1_5();
                        })

                        $('.stage-btn-2').click(function() {
                            scene2();

                        })

                        $('.stage-btn-3').click(function() {
                            scene3();

                        })

                        $('.stage-btn-4').click(function() {
                            scene4();

                        })

                        $('.stage-btn-5').click(function() {
                            scene5();

                        })

                        $('.stage-btn-6').click(function() {
                            scene6();

                        })




                    })
                    </script>
                    <?php
get_footer();