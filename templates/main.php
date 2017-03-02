<?php 
$duan = new DUAN;
$data = $duan->listAll();
$tintuc = new NEWS;
$dataTintuc = $tintuc->listAll(4);
?>
<div id="container">
    <div class="sf_cols">
        <div class="sf_colsOut homewrapper">
            <div id="cprContent_T979D2F30002_Col00" class="sf_colsIn sf_1col_1in_100"><div class="sf_cols">
                    <div class="sf_colsOut homeleft">
                        <div id="cprContent_T979D2F30003_Col00" class="sf_colsIn sf_2cols_1in_75"><div id="cprContent_T979D2F30004" class="homebanner">
                                <script src="<?php echo BASE_URL;?>/templates/js/jssor.core.js"></script>
                                <script src="<?php echo BASE_URL;?>/templates/js/jssor.utils.js"></script>
                                <script src="<?php echo BASE_URL;?>/templates/js/jssor.slider.js"></script>
                                <script>
                                    jQuery(document).ready(function ($) {
                                        var options = {
                                            $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                                            $AutoPlayInterval: 4000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                                            $SlideDuration: 500, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                                            $DragOrientation: 1, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                                            $ThumbnailNavigatorOptions: {
                                                $Class: $JssorThumbnailNavigator$, //[Required] Class to create thumbnail navigator instance
                                                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always

                                                $Loop: false, //[Optional] Enable loop(circular) of carousel or not, default value is true
                                                $SpacingX: 3, //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                                                $SpacingY: 3, //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                                                $DisplayPieces: 6, //[Optional] Number of pieces to display, default value is 1
                                                $ParkingPosition: 204, //[Optional] The offset position to park thumbnail,

                                                $ArrowNavigatorOptions: {
                                                    $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
                                                    $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
                                                    $AutoCenter: 2, //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                                                    $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                                                }
                                            }
                                        };

                                        var banner_container = new $JssorSlider$("banner_container", options);

                                        //responsive code begin
                                        //you can remove responsive code if you don't want the slider scales while window resizes
                                        function ScaleSlider() {
                                            var parentWidth = banner_container.$Elmt.parentNode.clientWidth;
                                            var bodyWidth = document.body.clientWidth;
                                            var windowWidth = window.innerWidth;
                                            var width = bodyWidth;
                                            if (windowWidth)
                                                width = windowWidth;
                                            if (width)
                                                if (width < 1025)
                                                    banner_container.$SetScaleWidth(Math.min(width, 1024));
                                                else
                                                    banner_container.$SetScaleWidth(Math.min(width, 743));
                                            else
                                                window.setTimeout(ScaleSlider, 30);
                                        }

                                        ScaleSlider();

                                        //if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                                        $(window).bind('resize', ScaleSlider);
                                        //}
                                        //responsive code end
                                    });
                                </script>

                                <div id="banner_container" style="position: relative; width: 743px; height: 590px; overflow: hidden;">
                                    <!-- Loading Screen -->
                                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block; background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;"></div>
                                        <div style="position: absolute; display: block; background: url(/theme/images/loading.gif) no-repeat center center; top: 0px; left: 0px;width: 100%;height:100%;"></div>
                                    </div>
                                    <!-- Slides Container -->
                                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 743px; height: 473px; overflow: hidden;">
                                        <?php foreach ($data as $v): ?>
                                        <div>
                                            <img u="image" src="<?php echo BASE_URL;?>/media/images/duan/<?php echo $v['image'];?>" />
                                            <img u="thumb" src="<?php echo BASE_URL;?>/media/images/duan/<?php echo $v['image'];?>" />
                                        </div>
                                        <?php endforeach;?>
                                    </div>

                                    <!-- Thumbnail Navigator Skin Begin -->
                                    <div u="thumbnavigator" class="slide_thumb" style="position: absolute; width: 743px; height: 90px; left: 0px; bottom: 0px; overflow: hidden; ">
                                        <div style=" background-color: #F3F3F4; border-radius:5px; width: 100%; height:100%;"></div>
                                        <!-- Thumbnail Item Skin Begin -->
                                        <div u="slides" style="cursor: move;">
                                            <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 100px; HEIGHT: 63px; TOP: 0; LEFT: 0;">
                                                <thumbnailtemplate class="i" style="position:absolute;"></thumbnailtemplate>
                                                <div class="o">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Item Skin End -->
                                        <!-- Arrow Navigator Skin Begin -->

                                        <!-- Arrow Left -->
                                        <span u="arrowleft" class="jssora11l" style="width: 30px; height: 30px; top: 123px; left: 20px;"></span>
                                        <!-- Arrow Right -->
                                        <span u="arrowright" class="jssora11r" style="width: 30px; height: 30px; top: 123px; right: 20px"></span>
                                        <!-- Arrow Navigator Skin End -->
                                    </div>
                                    <!-- ThumbnailNavigator Skin End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sf_colsOut homeright">
                        <div id="cprContent_T979D2F30003_Col01" class="sf_colsIn sf_2cols_2in_25">
                            <div class="sfContentBlock social-container">
                                <h3>Dõi theo chúng tôi tại:</h3> 
                                <ul> 
                                    <li>
                                        <a href="https://www.facebook.com/capitalandvietnamofficial/?pnref=story" target="_blank">
                                            <span data-sfref="[images|OpenAccessDataProvider]93d711d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                                <img src="<?php echo BASE_URL;?>/templates/img/icon-facebook.png" alt="Facebook Hưng Thịnh Vietnam" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-facebook">
                                            </span>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="https://www.youtube.com/channel/UC_D9sg8ms0JojdebA-lDgMA" target="_blank">
                                            <span data-sfref="[images|OpenAccessDataProvider]6bda11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                                <img src="<?php echo BASE_URL;?>/templates/img/icon-youtube.png" alt="icon-YouTube" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-YouTube">
                                            </span>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="https://twitter.com/Hưng Thịnh" target="_blank">
                                            <span data-sfref="[images|OpenAccessDataProvider]79da11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                                <img src="<?php echo BASE_URL;?>/templates/img/icon-twitter.png" alt="icon-twitter" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-twitter">
                                            </span>
                                        </a>
                                    </li> 
                                    <li>
                                        <span data-sfref="[images|OpenAccessDataProvider]98da11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                            <img src="<?php echo BASE_URL;?>/templates/img/icon-instagram8fda11d6e8556b4aa72fff000008fdb8.png" alt="icon-instagram" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-instagram">
                                        </span>
                                    </li> 
                                    <li>
                                        <a href="https://www.linkedin.com/company/capitaland-limited" target="_blank">
                                            <span data-sfref="[images|OpenAccessDataProvider]a6da11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                                <img src="<?php echo BASE_URL;?>/templates/img/icon-linkedin.png" alt="icon-LinkedIn" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-LinkedIn">
                                            </span>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="https://plus.google.com/104538760926725976914/posts" target="_blank">
                                            <span data-sfref="[images|OpenAccessDataProvider]b4da11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                                <img src="<?php echo BASE_URL;?>/templates/img/icon-googleplus.png" alt="google+" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-googleplus">
                                            </span>
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="http://www.pinterest.com/capitaland/" target="_blank">
                                            <span data-sfref="[images|OpenAccessDataProvider]cbda11d6-e855-6b4a-a72f-ff000008fdb8" class="sfImageWrapper">
                                                <img src="<?php echo BASE_URL;?>/templates/img/icon-pinterest.png" alt="icon-pinterest" style="border-width: 0px; border-style: solid;" displaymode="Original" title="icon-pinterest">
                                            </span>
                                        </a>
                                    </li> 
                                </ul> 
                                <br>
                            </div>
                            <div id="cprContent_C009" class="sfContentBlock hm-panel-news-aside">
                                <div id="cprContent_C009_ctl00_ctl00_pnlNewsList">
                                    <h3>TIN MỚI NHẤT</h3>
                                    <!-- 2014.2.724.40 -->
                                    <div id="corp_newsContainer">
                                        <?php foreach ($dataTintuc as $v): ?>
                                        <div class="all">
                                            <div class="marginBottom">
                                                <a id="ctl00_cprContent_C009_ctl00_ctl00_lvwNewsList_ctrl0_hpkTitle" href="<?php echo BASE_URL;?>"><?php echo $v['title'];?></a>
                                            </div>
                                            <div class="date">
                                                <?php echo $v['post_time'];?>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <?php endforeach; ?>
                                    </div>
                                    <a id="cprContent_C009_ctl00_ctl00_hpkReadMore" class="more-news" href="<?php echo BASE_URL;?>/index.php?controller=tintuc">Xem thêm</a>
                                </div>
                            </div>
<!--                            <div class="sfContentBlock e-newsletter">
                                <h3><span>Bản tin Hưng Thịnh Việt Nam</span></h3> 
                                <a href="<?php echo BASE_URL;?>">
                                    <img alt="Bản tin Hưng Thịnh Việt Nam" title="Bản tin Hưng Thịnh Việt Nam" src="<?php echo BASE_URL;?>/templates/img/newsletter-vietnam.png" style="border-width: 0px; border-style: solid;">
                                </a>
                            </div>
                            <div class="sfContentBlock e-newsletter">
                                <h3><span>Bản tin tập đoàn Hưng Thịnh</span></h3> 
                                <a href="<?php echo BASE_URL;?>" target="_blank">
                                    <img alt="Bản tin tập đoàn Hưng Thịnh" title="Bản tin tập đoàn Hưng Thịnh" src="<?php echo BASE_URL;?>/templates/img/newsletter-group.png" style="display: block; margin-left: auto; margin-right: auto; padding: 0px 10px 10px; border-width: 0px; border-style: solid;"> 
                                </a>
                            </div>            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="cprContent_T979D2F30005" class="sky-carousel sc-no-select" style="visibility: visible;">
        <script src="<?php echo BASE_URL;?>/templates/js/jquery.sky.carousel-1.0.2.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('.sky-carousel').carousel({
                    itemWidth: 200,
                    itemHeight: 200,
                    distance: 25, //d
                    selectedItemDistance: 25,
                    selectedItemZoomFactor: 1,
                    unselectedItemZoomFactor: 0.73,
                    unselectedItemAlpha: 0.9,
                    motionStartDistance: 210,
                    topMargin: 30,
                    gradientStartPoint: 0.35,
                    gradientOverlayColor: "#ebebeb",
                    gradientOverlaySize: 190,
                    selectByClick: true
                });
            });
        </script>
        <h3>
            <span class="backh">
                <span class="backh2 business">
                    <span class="backh3">Dự án</span>
                </span>
            </span>
        </h3>
        <div class="sky-carousel-wrapper">
            <ul class="sky-carousel-container">
                <?php foreach ($data as $v): ?>
                    <li class="item-project">
                        <a href="<?php echo BASE_URL;?>/index.php?controller=chitietduan&id=<?php echo $v['id'];?>" title="<?php echo $v['title'];?>">
                            <img src="<?php echo BASE_URL;?>/media/images/duan/<?php echo $v['image'];?>" alt="<?php echo $v['title'];?>" title="<?php echo $v['title'];?>">
                        </a>
                        <div class="sc-content">
                            <h2><a href="<?php echo BASE_URL;?>/index.php?controller=chitietduan&id=<?php echo $v['id'];?>"><?php echo $v['title'];?></a></h2>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div id="cprContent_T979D2F30006" class="latest-video">
        <link rel="stylesheet" href="<?php echo BASE_URL;?>/templates/css/prettyPhoto.css">
        <script src="<?php echo BASE_URL;?>/templates/js/jquery.prettyPhoto.js"></script>
        <script>
            $(document).ready(function () {
                $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
                    animation_speed: 'normal',
                    theme: 'light_square',
                    deeplinking: false,
                    slideshow: 3000,
                    autoplay_slideshow: false
                });
            });
        </script>
        <h3>
            <span class="backh">
                <span class="backh2 video">
                    <span class="backh3">Video</span>
                </span>
            </span>
        </h3>
        <div id="avs_gallery" class="avs_gallery video avs_responsive">
            <div class="gallery ">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="avs_thumb <?php echo ($i % 2 == 0) ? 'odd' : 'even'; ?>" style="width:150px;" title="Feliz en Vista - Dệt nên vẻ đẹp ngày mai">
                        <a href="http://www.youtube.com/watch?v=DTQmoABMjKs" rel="prettyPhoto" title="Feliz en Vista - Dệt nên vẻ đẹp ngày mai">
                            <div class="avs_thumb_inner">
                                <div class="avs_img_container">
                                    <img class="arrow" src="<?php echo BASE_URL;?>/templates/img/play.png" border="0"> 
                                    <img class="image" src="<?php echo BASE_URL;?>/templates/img/default.jpg" style="width:150px; height:95px;" border="0">
                                </div> 
                                <span class="title">Feliz en Vista - Dệt nên vẻ đẹp...</span> 
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
            <div style="clear:both"></div>
        </div>

    </div>
    <div class="latest-video viewall">
        <a href="https://www.youtube.com/user/Hưng ThịnhinVietnam" target="_blank">Xem tất cả video</a>
    </div>
</div>
