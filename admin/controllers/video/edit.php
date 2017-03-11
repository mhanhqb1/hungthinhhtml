<?php
$err = '';
$id = $_GET['id'];
$video = new VIDEO;
$check = true;
if(isset($_POST['submit'])){
	$image = $link = $title = '';
	if($_FILES["fNewImage"]["tmp_name"] != ''){
		$check = getimagesize($_FILES["fNewImage"]["tmp_name"]);
		if($check !== false || $_FILES['fNewImage']['error'] == 0){
			$image = str_replace(' ','_',$_FILES['fNewImage']['name']);
		}else{
			$err[] = 'Vui lòng chọn hình ảnh!';
		}
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
	if($check && $link && $title){
            $video->setTitle($title);
            $video->setLink($link);
            if($image){
                $video->setImage($image);
                $upload = new UPLOAD($_FILES['fNewImage']['name'], $_FILES['fNewImage']['type'], $_FILES['fNewImage']['tmp_name'], $_FILES['fNewImage']['size']);
                $upload->process($image,'videos');
            }
            $video->update($id);
            header("Location: index.php?controller=video");
            exit();
	}
}
$data = $video->listOne($id);
require "views/video/views_edit.php";
?>