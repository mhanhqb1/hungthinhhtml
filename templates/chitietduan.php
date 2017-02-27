<div id="container">

    <div class="sf_cols">
        <div class="sf_colsOut contentarea">
            <div id="cprContent_TFA24BDA5001_Col00" class="sf_colsIn sf_1col_1in_100">
                <div class="sf_cols">
                    <div class="sf_colsOut contentwrapper">
                        <div id="cprContent_TFA24BDA5002_Col00" class="sf_colsIn sf_2cols_1in_75">
                            <div id="cprContent_TFA24BDA5003">
                                <div class="breadcrumb">
                                    <div id="ctl00_cprContent_TFA24BDA5003_ctl00_ctl00_Breadcrumb" class="RadSiteMap RadSiteMap_">
                                        <ul class="rsmFlow rsmLevel rsmOneLevel">
                                            <li class="rsmItem sfBreadcrumbNavigation">
                                                <a class="rsmLink" href="../../home" title="CapitaLand là một trong những tập đoàn bất động sản lớn nhất Châu Á. Được niêm yết với trụ sở chính tại Singapore">Trang chủ</a>
                                                <img src="<?php echo BASE_URL;?>/templates/img/arrow.png">
                                            </li> 
                                            <li class="rsmItem sfBreadcrumbNavigation">
                                                <a class="rsmLink" href="../../our-projects">Dự án</a>
                                                <img src="<?php echo BASE_URL;?>/templates/img/arrow.png">
                                            </li> 
                                            <li class="rsmItem sfNoBreadcrumbNavigation">
                                                <a class="rsmLink" href="javascript: void(0)" title="Hochiminh">TP. HỒ CHÍ MINH</a>
                                            </li>
                                        </ul>
                                        <input id="ctl00_cprContent_TFA24BDA5003_ctl00_ctl00_Breadcrumb_ClientState" name="ctl00_cprContent_TFA24BDA5003_ctl00_ctl00_Breadcrumb_ClientState" type="hidden" />
                                    </div>
                                </div>
                                <div class="clr"></div>
                            </div>
                            <div class='contentheader'>
                                <h2>TP. HỒ CH&Iacute; MINH</h2>
                            </div>
                            <div>
                                <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
                                <script type="text/javascript" src="/theme/js/map.js"></script>
                                <script>
                                    var prevTabId = "Overview";
                                    function showTabsContent(id) {
                                        if (prevTabId != id) {
                                            var contentId = 'row' + id + '_content';
                                            var currentTab = 'col' + id + '_bg';
                                            var currentTabAr = 'col' + id + '_ar';

                                            var prevTab = '';
                                            var prevTabAr = '';
                                            if (prevTabId != '') {
                                                prevTab = 'col' + prevTabId + '_bg';
                                                prevTabAr = 'col' + prevTabId + '_ar';
                                            }

                                            $('.tabContentDiv').hide();
                                            $('#' + contentId).show();

                                            $('#' + currentTabAr).removeClass("normalTab");
                                            $('#' + currentTabAr).addClass("activeTab");
                                            $('#' + currentTab).addClass("activeBg");

                                            if (prevTabId != '') {
                                                $('#' + prevTabAr).removeClass("activeTab");
                                                $('#' + prevTabAr).addClass("normalTab");
                                                $('#' + prevTab).removeClass("activeBg");
                                            }

                                            if (id == 'Map') {
                                                updateMap();
                                            }

                                            prevTabId = id;
                                        }

                                    }
                                </script>

                                <div id="cprContent_ctl04_ctl00_ctl00_detailContainer">

                                    <h2>VISTA VERDE</h2>
                                    <div class="projectDetail" data-sf-provider='OpenAccessProvider' data-sf-id='c2ca10d6-e855-6b4a-a72f-ff000008fdb8' data-sf-type="Telerik.Sitefinity.DynamicModules.Model.DynamicContent">

                                        <div class="projectLogo">
                                            <a href='http://vistaverde.com.vn' target='_blank'><img src='http://capitaland.com.vn/images/libraries/projects/vista-verde/vv008811d6e8556b4aa72fff000008fdb8.jpg?sfvrsn=2' alt='VV' title='VV' /></a>
                                        </div>
                                        <div class="tabContainer">
                                            <ul>
                                                <li>
                                                    <div class="tabCol" onclick="showTabsContent('Overview');">
                                                        <div class="tabColBg activeBg" id="colOverview_bg">Giới  thiệu</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tabCol" onclick="showTabsContent('Factsheet');">
                                                        <div class="tabColBg" id="colFactsheet_bg">Thông tin dự án</div>
                                                            
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tabCol" onclick="showTabsContent('Siteplan');">
                                                        <div class="tabColBg" id="colSiteplan_bg">Mặt bằng tổng thể</div>
                                                            
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="tabCol" onclick="showTabsContent('Map');">
                                                        <div class="tabColBg" id="colMap_bg">Bản đồ vị trí</div>
                                                            
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tabRowDiv">
                                            <div id="rowOverview_content" class="tabContentDiv" style="display: block;">
                                                <script src="<?php echo BASE_URL;?>/templates/js/jssor.core.js"></script>
                                                <script src="<?php echo BASE_URL;?>/templates/js/jssor.utils.js"></script>
                                                <script src="<?php echo BASE_URL;?>/templates/js/jssor.slider.js"></script>
                                                <!--<script type="text/javascript" src="/theme/js/jssor.slider.js"></script>-->
                                                <script>
                                                    jQuery(document).ready(function ($) {
                                                        var options = {
                                                            $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                                                            $AutoPlaySteps: 1, //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                                                            $AutoPlayInterval: 4000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                                                            $PauseOnHover: 3, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 3

                                                            $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                                                            $SlideDuration: 500, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                                                            $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide , default value is 20
                                                            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                                                            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                                                            $SlideSpacing: 5, //[Optional] Space between each slide in pixels, default value is 0
                                                            $DisplayPieces: 1, //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                                                            $ParkingPosition: 0, //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                                                            $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                                                            $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
                                                            $DragOrientation: 3, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                                                            $ThumbnailNavigatorOptions: {
                                                                $Class: $JssorThumbnailNavigator$, //[Required] Class to create thumbnail navigator instance
                                                                $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always

                                                                $Loop: false, //[Optional] Enable loop(circular) of carousel or not, default value is true
                                                                $AutoCenter: 3, //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                                                                $Lanes: 1, //[Optional] Specify lanes to arrange thumbnails, default value is 1
                                                                $SpacingX: 4, //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                                                                $SpacingY: 4, //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                                                                $DisplayPieces: 7, //[Optional] Number of pieces to display, default value is 1
                                                                $ParkingPosition: 0, //[Optional] The offset position to park thumbnail
                                                                $Orientation: 2, //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                                                                $DisableDrag: false                             //[Optional] Disable drag or not, default value is false
                                                            }
                                                        };

                                                        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

                                                        //responsive code begin
                                                        //you can remove responsive code if you don't want the slider scales while window resizes
                                                        function ScaleSlider() {
                                                            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                                                            var bodyWidth = document.body.clientWidth;
                                                            var windowWidth = window.innerWidth;
                                                            //console.log(bodyWidth);
                                                            //console.log(windowWidth);
                                                            var width = bodyWidth;
                                                            if (windowWidth)
                                                                width = windowWidth;
                                                            if (width)
                                                                if (width < 641)
                                                                    jssor_slider1.$SetScaleWidth(Math.min(width + 80, 1024));
                                                                else if (width < 1025)
                                                                    jssor_slider1.$SetScaleWidth(Math.min(width, 1024));
                                                                else
                                                                    jssor_slider1.$SetScaleWidth(Math.min(width, 750));
                                                            //jssor_slider1.$SetScaleWidth(bodyWidth);
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
                                                <style>
                                                    .caption-link {
                                                        position: absolute;
                                                        top: 0;
                                                        z-index: 5;
                                                        padding: 15px 20px 25px 20px;
                                                        height: 40px;
                                                        text-transform: uppercase;
                                                        background: rgba(0,0,0,0.4);
                                                        width:100%;
                                                    }
                                                    .caption-link p {
                                                        color: #FFF;
                                                    }

                                                    .contentheader {
                                                        display:none;
                                                    }
                                                </style>

                                                <div id="slider1_container" style="position: relative; width: 750px;
                                                     height: 430px; overflow: hidden;">
                                                    <!-- Loading Screen -->
                                                    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                                                        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                                             background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                                                        </div>
                                                        <div style="position: absolute; display: block; background: url(<?php echo BASE_URL;?>/templates/img/loading.gif) no-repeat center center;
                                                             top: 0px; left: 0px;width: 100%;height:100%;">
                                                        </div>
                                                    </div>

                                                    <!-- Slides Container -->
                                                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 665px; height: 420px;
                                                         overflow: hidden;">
                                                        <div>
                                                            <img u="image" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv1.jpg?sfvrsn=7' alt='Vista Verde' title ='Vista Verde' />
                                                            <div u="thumb">
                                                                <img class="i" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv1.tmb-.jpg?sfvrsn=1' alt='Vista Verde' title ='Vista Verde' />
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <img u="image" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv2.jpg?sfvrsn=7' alt='Vista Verde' title ='Vista Verde' />
                                                            <div u="thumb">
                                                                <img class="i" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv2.tmb-.jpg?sfvrsn=1' alt='Vista Verde' title ='Vista Verde' />
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <img u="image" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv3.jpg?sfvrsn=7' alt='Vista Verde' title ='Vista Verde' />
                                                            <div u="thumb">
                                                                <img class="i" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv3.tmb-.jpg?sfvrsn=1' alt='Vista Verde' title ='Vista Verde' />
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <img u="image" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv4.jpg?sfvrsn=7' alt='Vista Verde' title ='Vista Verde' />
                                                            <div u="thumb">
                                                                <img class="i" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv4.tmb-.jpg?sfvrsn=1' alt='Vista Verde' title ='Vista Verde' />
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <img u="image" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv5.jpg?sfvrsn=7' alt='Vista Verde' title ='Vista Verde' />
                                                            <div u="thumb">
                                                                <img class="i" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv5.tmb-.jpg?sfvrsn=1' alt='Vista Verde' title ='Vista Verde' />
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <img u="image" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv6.jpg?sfvrsn=7' alt='Vista Verde' title ='Vista Verde' />
                                                            <div u="thumb">
                                                                <img class="i" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv6.tmb-.jpg?sfvrsn=1' alt='Vista Verde' title ='Vista Verde' />
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <img u="image" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv7.jpg?sfvrsn=7' alt='Vista Verde' title ='Vista Verde' />
                                                            <div u="thumb">
                                                                <img class="i" src='http://capitaland.com.vn/images/libraries/projects/vista-verde/album/vv7.tmb-.jpg?sfvrsn=1' alt='Vista Verde' title ='Vista Verde' />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- ThumbnailNavigator Skin Begin -->
                                                    <div u="thumbnavigator" class="jssort11" style="position: absolute; width: 80px; height: 420px; left:670px; top:0px;">
                                                        <!-- Thumbnail Item Skin Begin -->
                                                        <style>
                                                            /* jssor slider thumbnail navigator skin 11 css */
                                                            /*
                                                            .jssort11 .p            (normal)
                                                            .jssort11 .p:hover      (normal mouseover)
                                                            .jssort11 .pav          (active)
                                                            .jssort11 .pav:hover    (active mouseover)
                                                            .jssort11 .pdn          (mousedown)
                                                            */
                                                            .jssort11
                                                            {
                                                                font-family: Arial, Helvetica, sans-serif;
                                                            }
                                                            .jssort11 .i, .jssort11 .pav:hover .i
                                                            {
                                                                position: absolute;
                                                                top:0px;
                                                                left:0px;
                                                                WIDTH: 74px;
                                                                HEIGHT: 56px;
                                                                border: white 1px dashed;
                                                            }
                                                            * html .jssort11 .i
                                                            {
                                                                WIDTH /**/: 74px;
                                                                HEIGHT /**/: 32px;
                                                            }
                                                            .jssort11 .pav .i
                                                            {
                                                                border: white 1px solid;
                                                            }
                                                            .jssort11 .t, .jssort11 .pav:hover .t
                                                            {
                                                                position: absolute;
                                                                top: 3px;
                                                                left: 68px;
                                                                width:129px;
                                                                height: 32px;
                                                                line-height:32px;
                                                                text-align: center;
                                                                color:#fc9835;
                                                                font-size:13px;
                                                                font-weight:700;
                                                            }
                                                            .jssort11 .pav .t, .jssort11 .phv .t, .jssort11 .p:hover .t
                                                            {
                                                                color:#fff;
                                                            }
                                                            .jssort11 .c, .jssort11 .pav:hover .c
                                                            {
                                                                position: absolute;
                                                                top: 38px;
                                                                left: 3px;
                                                                width:197px;
                                                                height: 31px;
                                                                line-height:31px;
                                                                color:#fff;
                                                                font-size:11px;
                                                                font-weight:400;
                                                                overflow: hidden;
                                                            }
                                                            .jssort11 .pav .c, .jssort11 .phv .c, .jssort11 .p:hover .c
                                                            {
                                                                color:#fc9835;
                                                            }
                                                            .jssort11 .t, .jssort11 .c
                                                            {
                                                                transition: color 2s;
                                                                -moz-transition: color 2s;
                                                                -webkit-transition: color 2s;
                                                                -o-transition: color 2s;
                                                            }
                                                            .jssort11 .p:hover .t, .jssort11 .phv .t, .jssort11 .pav:hover .t, .jssort11 .p:hover .c, .jssort11 .phv .c, .jssort11 .pav:hover .c
                                                            {
                                                                transition: none;
                                                                -moz-transition: none;
                                                                -webkit-transition: none;
                                                                -o-transition: none;
                                                            }
                                                            .jssort11 .p
                                                            {
                                                                background:#181818;
                                                            }
                                                            .jssort11 .pav, .jssort11 .pdn
                                                            {
                                                                background:#462300;
                                                            }
                                                            .jssort11 .p:hover, .jssort11 .phv, .jssort11 .pav:hover
                                                            {
                                                                background:#333;
                                                            }
                                                        </style>
                                                        <div u="slides" style="cursor: move;">
                                                            <div u="prototype" class="p" style="position: absolute; width: 76px; height: 58px; top: 0; left: 0;">
                                                                <thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate>
                                                            </div>
                                                        </div>
                                                        <!-- Thumbnail Item Skin End -->
                                                    </div>

                                                </div>

                                                <div class="sfitemRichText" data-sf-field="Content" data-sf-ftype="LongText">
                                                    <p style="text-align: justify;">&ldquo;Verde&rdquo; c&oacute; nghĩa l&agrave; xanh ng&aacute;t trong tiếng T&acirc;y Ban Nha,  Vista Verde được thiết kế như một vườm ươm xanh m&aacute;t, nhằm đem lại cho cư d&acirc;n cảm gi&aacute;c đang nghe bản giao hưởng của thi&ecirc;n nhi&ecirc;n. Nằm ở vị tr&iacute; chiến lược giữa khu h&agrave;nh ch&iacute;nh Quận 2 v&agrave; chỉ mất năm ph&uacute;t l&agrave; tiếp cận được với những tiện &iacute;ch cần thiết như si&ecirc;u thị Metro, khu mua sắm Parkson, rạp xem phim Lotte Cinema, bệnh viện Ph&uacute;c An Khang v&agrave; nhiều trường học quốc tế uy t&iacute;n như ACG International School. Vista Verde cũng chỉ c&aacute;ch c&aacute;c quận l&acirc;n cận như Quận 7, quận 1 c&oacute; mười ph&uacute;t rất tiện lợi nhờ hầm Thủ Thi&ecirc;m, cầu Thủ Thi&ecirc;m, cầu S&agrave;i G&ograve;n v&agrave; cầu Ph&uacute; Mỹ. Dự &aacute;n được l&ecirc;n kế hoạch sẽ ho&agrave;n thiện v&agrave;o giữa năm 2017.</p> <p style="text-align: justify;">Vista Verde cung cấp cho cư d&acirc;n nhiều tiện &iacute;ch vượt trội như ph&ograve;ng tập gym c&oacute; tầm nh&igrave;n 360&deg;, hồ bơi sang trọng như resort, ghế thư gi&atilde;n, trảng cỏ chạy bộ, v&agrave; s&acirc;n tennis. Ngo&agrave;i ra, tầng trệt được thiết kế như một thị trấn mua sắm sẽ cho cư d&acirc;n nhiều tiện lợi với nhiều cửa h&agrave;ng th&ocirc;ng dụng. Vista Verde c&oacute; hơn 30 kiểu căn hộ được thiết kế ho&agrave;n chỉnh, bao gồm những căn hộ đặc biệt như căn hộ th&ocirc;ng tầng (duplex) v&agrave; những căn hộ với nhiều kh&ocirc;ng gian ri&ecirc;ng tư ngăn c&aacute;ch. V&igrave; ch&uacute;ng t&ocirc;i thiết kế cho m&ocirc;i trường sống hiện đại, n&ecirc;n c&aacute;c kiểu căn hộ đều c&oacute; ph&ograve;ng kh&aacute;ch v&agrave; ph&ograve;ng ăn rộng r&atilde;i, gi&oacute; trời th&ocirc;ng tho&aacute;ng v&agrave; c&oacute; ban-c&ocirc;ng với tầm nh&igrave;n đẹp.</p> <p style="text-align: justify;">
                                                        Website:&nbsp;<a href="http://vistaverde.com.vn"><span style="color: #0000e6;">http://vistaverde.com.vn</span></a></p>
                                                </div>
                                            </div>
                                            <div id="rowFactsheet_content" class="tabContentDiv" style="display: none;">
                                                <div class="sfitemRichText" data-sf-field="Factsheet" data-sf-ftype="LongText">
                                                    <table> <tbody> <tr> <td valign="top" style="text-align: justify;"> <p><strong>Dự &aacute;n</strong></p> </td> <td valign="top"> <p>Vista Verde</p> </td> </tr> <tr> <td valign="top"> <p><strong>Chủ đầu tư</strong></p> </td> <td valign="top"> <p>C&ocirc;ng ty CapitaLand &ndash; Thien Duc</p> </td> </tr> <tr> <td valign="top"> <p><strong>Vị tr&iacute;</strong></p> </td> <td valign="top"> <p>Đường Đồng Văn Cống, phường Thạnh Mỹ Lợi, Quận 2, TPHCM</p> </td> </tr> <tr> <td valign="top"> <p><strong>H&igrave;nh thức sở hữu</strong></p> </td> <td valign="top"> <p>Sở hữu vĩnh viễn đối người Việt Nam, cho thu&ecirc; d&agrave;i hạn (50 năm) đối với người nước ngo&agrave;i</p> </td> </tr> <tr> <td valign="top"> <p><strong>Diện t&iacute;ch dự &aacute;n</strong></p> </td> <td valign="top"> <p>34.056 m<sup>2</sup></p> </td> </tr> <tr> <td valign="top"> <p><strong>Diện t&iacute;ch căn hộ</strong></p> </td> <td valign="top"> <p>1 Ph&ograve;ng ngủ 45 &ndash; 54 m<sup>2</sup></p> <p>2 Ph&ograve;ng ngủ: từ 74 &ndash; 89 m<sup>2</sup></p> <p>3 Ph&ograve;ng ngủ: từ 107 &ndash; 118 m<sup>2</sup></p> </td> </tr> <tr> <td valign="top"> <p><strong>Tổng số căn hộ</strong></p> </td> <td valign="top"> <p>1.152 căn</p> </td> </tr> <tr> <td valign="top"> <p><strong>C&aacute;c dịch vụ tiện &iacute;ch</strong></p> </td> <td valign="top"> <ul> <li>Hồ bơi</li> <li>Thảm cỏ tr&ecirc;n m&aacute;i</li> <li>Ốc đảo thư gi&atilde;n</li> <li>Vườn treo Babylon</li> <li>S&acirc;n tập Tennis </li> <li>S&acirc;n chơi trẻ em</li> <li>Thư viện</li> <li>Vườn tĩnh t&acirc;m</li> <li>Khu BBQ</li> </ul> </td> </tr> </tbody> </table> <p>&nbsp;</p>
                                                </div>
                                            </div>
                                            <div id="rowSiteplan_content" class="tabContentDiv" style="display: none;">
                                                <div class="sfSnglRelatedItmWrp">
                                                    <div class="sfrelatedItmWrp">
                                                        <img src='http://capitaland.com.vn/images/libraries/projects/vista-verde/vv_siteplan.jpg?sfvrsn=6' alt='Vista Verde SitePlan' title='VV_siteplan' />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="rowMap_content" class="tabContentDiv" style="display: none;">
                                                <div id="map-canvas-project"></div>
                                            </div>

                                        </div>
                                        <script>
                                            var locations = ['10.776919', '106.756709'];
                                        </script>

                                    </div>

                                </div>
                                <script>
                                    function updateMap()
                                    {
                                        LoadMap('map-canvas-project', 18, locations);
                                    }
                                    jQuery(document).ready(function () {
                                        updateMap();
                                    });
                                </script>


                            </div>

                        </div>
                    </div>
                    <div class="sf_colsOut contentleft">
                        <div id="cprContent_TFA24BDA5002_Col01" class="sf_colsIn sf_2cols_2in_25">


                            <div class="sfNavWrp sfNavTreeviewWrp submenu ">





                                <ul id="cprContent_T728A4C8D001_ctl00_ctl00_navigationUl" class="sfNavTreeview sfNavList">

                                    <li>           
                                        <a href="/our-projects/hanoi">HÀ NỘI</a>

                                    </li>                                        

                                    <li class="active">
                                        <a href="/our-projects/hochiminh">TP. HỒ CHÍ MINH</a>
                                    </li>                                        

                                </ul>
                            </div><div class='contactmenu'><div class="custom phone" style="padding: 8px 12px;"> <p><span><img alt="" src="<?php echo BASE_URL;?>/templates/img/General_Inquiries.png" style="border-width: 0px; border-style: solid;" />&nbsp;&nbsp; Th&ocirc;ng tin chung :<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 84-08 3519 1067</span></p> <p><span><img alt="" src="<?php echo BASE_URL;?>/templates/img/Sale.png" style="border-width: 0px; border-style: solid;" />&nbsp;&nbsp;&nbsp; Ph&ograve;ng Kinh Doanh :<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; 1800 599 986<br /> </span></p> <p><span><img alt="" src="<?php echo BASE_URL;?>/templates/img/Customer_Relation.png" style="border-width: 0px; border-style: solid;" />&nbsp; Ph&ograve;ng Kh&aacute;ch H&agrave;ng :</span><span></span></p> <p><span>08-35194504 (HCMC)</span></p> <p><span>04-39393232 ext:200 (Hanoi)</span></p> <p><span>65-67133222 (Singapore)</span> <span> </span> </p> </div> <p> </p>


                            </div>            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>