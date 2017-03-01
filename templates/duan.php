<?php 
$duan = new DUAN;
$data = $duan->listAll();
?>
<div id="container">
    <div class="sf_cols">
        <div class="sf_colsOut contentwrapper">
            <div id="cprContent_TFA24BDA5002_Col00" class="sf_colsIn sf_2cols_1in_75">
                <div id="cprContent_TFA24BDA5003">
                    <div class="breadcrumb">
                        <div id="ctl00_cprContent_TFA24BDA5003_ctl00_ctl00_Breadcrumb" class="RadSiteMap RadSiteMap_">
                            <ul class="rsmFlow rsmLevel rsmOneLevel">
                                <li class="rsmItem sfBreadcrumbNavigation">
                                    <a class="rsmLink" href="/" title="CapitaLand là một trong những tập đoàn bất động sản lớn nhất Châu Á. Được niêm yết với trụ sở chính tại Singapore">Trang chủ</a>
                                    <img src="<?php echo BASE_URL;?>/templates/img/arrow.png">
                                </li> 
                                <li class="rsmItem sfBreadcrumbNavigation">
                                    <a class="rsmLink" href="../our-projects">Dự án</a>
                                    <img src="<?php echo BASE_URL;?>/templates/img/arrow.png">
                                </li> 
                                <li class="rsmItem sfNoBreadcrumbNavigation">
                                    <a class="rsmLink" href="javascript: void(0)" title="Dự án Hà Nội">HÀ NỘI</a>
                                </li>
                            </ul>
                            <input id="ctl00_cprContent_TFA24BDA5003_ctl00_ctl00_Breadcrumb_ClientState" name="ctl00_cprContent_TFA24BDA5003_ctl00_ctl00_Breadcrumb_ClientState" type="hidden">
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="contentheader">
                    <h2>HÀ NỘI</h2>
                </div>
                <div>
                    <div class="ourprojects">
                        <ul class="sfitemsList sfitemsListTitleDateTmb sflist">
                            <?php if (!empty($data)): ?>
                            <?php foreach ($data as $v): ?>
                            <li class="sfitem sflistitem sfClearfix" data-sf-provider="OpenAccessProvider" data-sf-id="ad3d11d6-e855-6b4a-a72f-ff000008fdb8" data-sf-type="Telerik.Sitefinity.DynamicModules.Model.DynamicContent">
                                <div class="sfrelatedItmWrp">
                                    <img src="<?php echo BASE_URL;?>/media/images/duan/<?php echo $v['image'];?>" alt="<?php echo $v['title'];?>" title="<?php echo $v['title'];?>">
                                </div>
                                <div class="projecttitle">
                                    <a id="ctl00_cprContent_ctl04_ctl00_ctl00_dynamicContentListView_ctrl0_DetailsViewHyperLink" data-sf-field="Title" data-sf-ftype="ShortText" href="<?php echo BASE_URL;?>/index.php?controller=chitietduan&id=<?php echo $v['id'];?>"><?php echo $v['title'];?></a>
                                </div>
                                <div class="projectsummary">
                                    <div id="ctl00_cprContent_ctl04_ctl00_ctl00_dynamicContentListView_ctrl0_ctl00">
                                        <div id="ctl00_cprContent_ctl04_ctl00_ctl00_dynamicContentListView_ctrl0_ctl00_ctl00_ctl00_textLabel_read" class="sfTxtContent"><?php echo $v['description'];?></div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sf_colsOut contentleft">
            <div id="cprContent_TFA24BDA5002_Col01" class="sf_colsIn sf_2cols_2in_25">

                <div class="sfNavWrp sfNavTreeviewWrp submenu ">

                    <ul id="cprContent_T728A4C8D001_ctl00_ctl00_navigationUl" class="sfNavTreeview sfNavList">
                        <li class="active">
                            <a href="<?php echo BASE_URL;?>/index.php?controller=duan&cate=1">HÀ NỘI</a>
                        </li> 
                        <li>           
                            <a href="<?php echo BASE_URL;?>/index.php?controller=duan&cate=2">TP. HỒ CHÍ MINH</a>
                        </li> 
                    </ul>
                </div>
                <?php 
                require_once "templates/element/menucontact.php";
                ?>
            </div>
        </div>
    </div>
</div>