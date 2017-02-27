<?php
$err = '';
$id = $_GET['id'];
$new = new DUAN;
$check = true;
if(isset($_POST['submit'])){
	$image = $description = $detail = $title = $logo = '';
	$check = getimagesize($_FILES["fNewImage"]["tmp_name"]);
	if ($check !== false || $_FILES['fNewImage']['error'] == 0){
            $image = str_replace(' ','_',$_FILES['fNewImage']['name']);
	}
        
        $check = getimagesize($_FILES["fNewLogo"]["tmp_name"]);
	if ($check !== false || $_FILES['fNewLogo']['error'] == 0){
            $logo = str_replace(' ','_',$_FILES['fNewLogo']['name']);
	}
        
        $description = $_POST['txtDescription'];
        $title = $_POST['txtTitle'];
        $thongtin = $_POST['txtThongtin'];
        $vitri = $_POST['txtVitri'];
        $matbang = $_POST['txtMatbang'];
        $vitrihienthi = $_POST['txtVitrihienthi'];
        
	$new = new DUAN;
        $new->setTitle($title);
        $new->setDescription($description);
        $new->setVitrihienthi($vitrihienthi);
        $new->setThongtin($thongtin);
        $new->setVitri($vitri);
        $new->setMatbang($matbang);
        
        if($image){
            $new->setImage($image);
            $upload = new UPLOAD($_FILES['fNewImage']['name'], $_FILES['fNewImage']['type'], $_FILES['fNewImage']['tmp_name'], $_FILES['fNewImage']['size']);
            $upload->process($image,'duan');
        }
        if($logo){
            $new->setLogo($logo);
            $upload = new UPLOAD($_FILES['fNewLogo']['name'], $_FILES['fNewLogo']['type'], $_FILES['fNewLogo']['tmp_name'], $_FILES['fNewLogo']['size']);
            $upload->process($logo,'duan');
        }
        $new->update($id);
        header("Location: index.php?controller=duan");
        exit();
}
$data = $new->listOne($id);
require "views/duan/views_edit.php";
?>