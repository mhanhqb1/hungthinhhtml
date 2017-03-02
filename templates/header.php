<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Pages
        </title>
        <link href="/favicon.ico" type="image/x-icon" rel="icon">
        <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
        <link rel="stylesheet" href="<?php echo BASE_URL;?>/templates/css/normalize.css">    
        <link rel="stylesheet" href="<?php echo BASE_URL;?>/templates/css/style.css">    
        <link rel="stylesheet" href="<?php echo BASE_URL;?>/templates/css/style-responsive.css">    
        <link rel="stylesheet" href="<?php echo BASE_URL;?>/templates/css/telerik.css">    
        <script src="<?php echo BASE_URL;?>/templates/js/jquery-1.10.2.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="topheader">
                    <div class="responsivelogo"> 
                        <a href="<?php echo BASE_URL;?>">
                            <img src="<?php echo BASE_URL;?>/templates/img/logo_new.png" alt="">            
                        </a> 
                    </div> 
                    <div class="languagewrapper"> 
                        <div id="languageselection"> 
                            <ul class="languageselection"> 
                                <li>
                                    <a href="<?php echo BASE_URL;?>">
                                        <span lang="en" xml:lang="en">English |</span>
                                    </a>
                                </li> 
                                <li id="active_language">
                                    <a href="<?php echo BASE_URL;?>">
                                        <span lang="vi" xml:lang="vi">Tiếng Việt</span>
                                    </a>
                                </li> 
                            </ul> 
                        </div> 
                        <div class="responsivetoggle">
                            <a href="#" id="button-menu"></a> 
                        </div> 
                    </div> 
                    <div class="clr">&nbsp;</div>
                </div>
                <!--------------------------- Begin Menu ---------------------------->
                <div class="sf_cols">
                    <div class="sf_colsOut bottomheader">
                        <div id="cprHeader_T3A17860F007_Col00" class="sf_colsIn sf_1col_1in_100">
                            <div class="sf_cols">
                                <div class="sf_colsOut bottomheaderwrapper">
                                    <div id="cprHeader_T3A17860F008_Col00" class="sf_colsIn sf_1col_1in_100">
                                        <div class="logo">
                                            <a href="<?php echo BASE_URL;?>" title="Hưng Thịnh Limited"> 
                                                <img src="<?php echo BASE_URL;?>/templates/img/logo_new.png" alt="">                                </a>
                                        </div>
                                        <div class="headbottom">
                                            <ul class="headmenu"> 
                                                <li>
                                                    <a href="<?php echo BASE_URL;?>/index.php?controller=gioithieu" target="_blank">Tập đoàn Hưng Thịnh </a>
                                                </li> 
                                                <li>
                                                    <a href="<?php echo BASE_URL;?>/index.php?controller=gioithieu">Nghề nghiệp cùng chúng tôi</a>
                                                </li> 
                                                <li>
                                                    <a href="<?php echo BASE_URL;?>/index.php?controller=lienhe">Liên hệ </a>
                                                </li> 
                                            </ul>
                                        </div>
                                        <div class="sfNavWrp sfNavHorizontalDropDownWrp bottombottom ">
                                            <ul id="cprHeader_T3A17860F014_ctl00_ctl00_navigationUl" class="sfNavHorizontalDropDown sfNavList ext-menu">
                                                <li class="home">
                                                    <a href="<?php echo BASE_URL;?>">Trang chủ</a>
                                                </li>
                                                <li class="about-capitaland">
                                                    <a href="<?php echo BASE_URL;?>/index.php?controller=gioithieu">Về Hưng Thịnh</a>
                                                </li>

                                                <li class="our-projects">
                                                    <a href="<?php echo BASE_URL;?>/index.php?controller=duan">Dự án</a>
                                                    <ul id="cprHeader_T3A17860F014_ctl00_ctl00_ctl02_ctl02_childNodesContainer">
                                                        <li class="hochiminh">
                                                            <a href="<?php echo BASE_URL;?>/index.php?controller=duan&cate=1">TP. HỒ CHÍ MINH</a>
                                                        </li>
                                                        <li class="hanoi">
                                                            <a href="<?php echo BASE_URL;?>/index.php?controller=duan&cate=2">CÁC TỈNH KHÁC</a>
                                                        </li>
                                                        <li class="hanoi">
                                                            <a href="<?php echo BASE_URL;?>/index.php?controller=duan&cate=3">OFFICETEL</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="register-interest">
                                                    <a href="<?php echo BASE_URL;?>">Bạn quan tâm đến</a>
                                                </li>

                                                <li class="news">
                                                    <a href="<?php echo BASE_URL;?>/index.php?controller=tintuc">Tin tức</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--------------------------- End Menu ---------------------------->
            </div>

            <div style="clear:both;"></div>
            <!--------------------------- Begin Menu mobile ---------------------------->
            <div class="sfNavWrp sfNavHorizontalDropDownWrp responsivemenu ">
                <ul id="cprMenu_T3A17860F016_ctl00_ctl00_navigationUl" class="sfNavHorizontalDropDown sfNavList dropmenu">
                    <li class="active">
                        <a href="<?php echo BASE_URL;?>">Trang chủ</a>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL;?>/index.php?controller=gioithieu" data-toggle="dropdown">Về Hưng Thịnh</a>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo BASE_URL;?>/index.php?controller=duan" data-toggle="dropdown">Dự án</a>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL;?>/index.php?controller=tintuc">Tin tức</a>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL;?>">Video</a>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL;?>">Nghề nghiệp cùng chúng tôi</a>
                    </li>
                    <li class="">
                        <a href="<?php echo BASE_URL;?>/index.php?controller=lienhe">Liên Hệ</a>
                    </li>
                </ul>
            </div>
            <!--------------------------- End Menu mobile ---------------------------->
