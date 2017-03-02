<?php
$err = '';
if(isset($_POST['submit'])){
	$image = $description = $detail = $title = $logo = '';
	$check = getimagesize($_FILES["fImage"]["tmp_name"]);
	if ($check !== false || $_FILES['fImage']['error'] == 0){
            $image = str_replace(' ','_',$_FILES['fImage']['name']);
	} else {
            $image = '';
	}
        
        $check = getimagesize($_FILES["fImageLogo"]["tmp_name"]);
	if ($check !== false || $_FILES['fImageLogo']['error'] == 0){
            $logo = str_replace(' ','_',$_FILES['fImageLogo']['name']);
	} else {
            $logo = '';
	}
        
        $description = $_POST['txtDescription'];
        $title = $_POST['txtTitle'];
        $thongtin = $_POST['txtThongtin'];
        $vitri = $_POST['txtVitri'];
        $matbang = $_POST['txtMatbang'];
        $vitrihienthi = $_POST['txtVitrihienthi'];
        $featured = $_POST['rdoFeatured'];
        
        $new = new DUAN;
        $new->setImage($image);
        $new->setLogo($logo);
        $new->setTitle($title);
        $new->setDescription($description);
        $new->setVitrihienthi($vitrihienthi);
        $new->setThongtin($thongtin);
        $new->setVitri($vitri);
        $new->setMatbang($matbang);
        $new->setIsNoiThanh($featured);
        $new->insert();
        $upload = new UPLOAD($_FILES['fImage']['name'], $_FILES['fImage']['type'], $_FILES['fImage']['tmp_name'], $_FILES['fImage']['size']);
        $upload->process($image,'duan');
        $upload = new UPLOAD($_FILES['fImageLogo']['name'], $_FILES['fImageLogo']['type'], $_FILES['fImageLogo']['tmp_name'], $_FILES['fImageLogo']['size']);
        $upload->process($logo,'duan');
        header("Location: index.php?controller=duan");
        exit();
}
require "views/duan/views_add.php";
?>