<div class="breadcrumb">
    <div id="ctl00_cprContent_TFA24BDA5003_ctl00_ctl00_Breadcrumb" class="RadSiteMap RadSiteMap_">
        <ul class="rsmFlow rsmLevel rsmOneLevel">
            <li class="rsmItem sfBreadcrumbNavigation">
                <a class="rsmLink" href="<?php echo BASE_URL; ?>" title="Trang chủ">Trang chủ</a>
                <img src="<?php echo BASE_URL; ?>/templates/img/arrow.png">
            </li>
            <?php if (!empty($mainMenu)): ?>
            <li class="rsmItem sfBreadcrumbNavigation">
                <a class="rsmLink" href="<?php echo BASE_URL; ?>" title="<?php echo $mainMenu;?>"><?php echo $mainMenu;?></a>
                <img src="<?php echo BASE_URL; ?>/templates/img/arrow.png">
            </li>
            <?php endif;?>
            <li class="rsmItem sfNoBreadcrumbNavigation">
                <a class="rsmLink" href="javascript: void(0)" title="<?php echo $controller; ?>"><?php echo $controller; ?></a>
            </li>
        </ul>
    </div>
</div>