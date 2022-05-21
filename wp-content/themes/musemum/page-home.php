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

        <div class="scene-1-txt-1">
            帶你體驗康文署博物館精彩的藝術 • 歷史 • <br>科學旅程！<br>
            <span class="roboto">Enjoy the visit by inspiring experiences in Art • History • <br>
                Science under the LCSD Museums</span>
        </div>

        <div class="scene-1-txt-2">
            博物館<span style="font-size:104px;margin-left:1rem;margin-right:1rem;font-weight:bold;">通行證</span>辦理處 <br>
            <span class="roboto" style="margin-left: 55px;"> <span style="font-size: 58px;">Museum</span> <span
                    style="font-size: 85px;margin-left: 0rem;margin-right:1rem;font-weight:bold;">Pass
                    Counter</span></span>
        </div>
    </div>

    <!--scene-1 end-->




</div>
</div>

<script type="text/javascript">
$(function() {

    //start
    setTimeout(() => {
        // 202px
        $('.white-big-mcd-logo').animate({
            'left': '202px'
        }, 1000);
    }, 3000);
})
</script>
<?php
get_footer();