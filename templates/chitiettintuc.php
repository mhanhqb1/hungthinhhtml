<?php
$news = new NEWS;
$id = $_GET['id'];
$data = $news->listOne($id);
?>
<div id="container">

    <div class="sf_cols">
        <div class="sf_colsOut contentarea">
            <div id="cprContent_T649C15AB001_Col00" class="sf_colsIn sf_1col_1in_100">
                <div class="sf_cols">
                    <div class="sf_colsOut contentwrapperfull">
                        <div id="cprContent_T649C15AB002_Col00" class="sf_colsIn sf_1col_1in_100">
                            <div id="cprContent_T649C15AB003">
                                <div class="breadcrumb">
                                    <div id="ctl00_cprContent_T649C15AB003_ctl00_ctl00_Breadcrumb" class="RadSiteMap RadSiteMap_">
                                        <!-- 2014.2.724.40 -->
                                        <ul class="rsmFlow rsmLevel rsmOneLevel">
                                            <li class="rsmItem sfBreadcrumbNavigation">
                                                <a class="rsmLink" href="<?php echo BASE_URL;?>" title="Trang chủ">Trang chủ</a>
                                                <img src="<?php echo BASE_URL;?>/templates/img/arrow.png">
                                            </li> 
                                            <li class="rsmItem sfNoBreadcrumbNavigation">
                                                <a class="rsmLink" href="<?php echo BASE_URL;?>/index.php?controller=tintuc" title="Tin tức">Tin tức</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clr"></div>
                            </div>
                            <div id="cprContent_C004">

                                <div id="cprContent_C004_ctl00_ctl00_pnlNewsDetail">

                                    <div class="newsDetail">
                                        <h2><?php echo $data['title'];?></h2>
                                        <div class="newsDate"><?php echo $data['post_time'];?></div>
                                        <div class="newsContent"><?php echo $data['detail'];?></div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>