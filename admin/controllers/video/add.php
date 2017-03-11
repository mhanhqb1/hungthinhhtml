<?php
$err = '';
if(isset($_POST['submit'])){
	$image = $link = $title = '';
	$check = getimagesize($_FILES["fImage"]["tmp_name"]);
	if($check !== false || $_FILES['fImage']['error'] == 0){
		$image = str_replace(' ','_',$_FILES['fImage']['name']);
	} else{
		$err[] = 'Vui lòng chọn hình ảnh!';
	}
	if($_POST['txtLink'] != ''){
		$link = $_POST['txtLink'];
	}else{
		$err[] = 'Vui lòng nhập link video!';
	}
	if($_POST['txtTitle'] != ''){
		$title = $_POST['txtTitle'];
	}else{
		$err[] = 'Vui lòng nhập tiêu đề!';
	}
	if($image && $link && $title){
		$video = new VIDEO;
		$video->setImage($image);
		$video->setTitle($title);
		$video->setLink($link);
                $video->insert();
                $upload = new UPLOAD($_FILES['fImage']['name'], $_FILES['fImage']['type'], $_FILES['fImage']['tmp_name'], $_FILES['fImage']['size']);
                $upload->process($image,'video');
                header("Location: index.php?controller=video");
                exit();
	}
}
require "views/video/views_add.php";
?>