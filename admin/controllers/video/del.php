<?php
if(isset($_GET['id'])){
	$video = new VIDEO;
	$data = $video->listOne($_GET['id']);
	$image = $data['image'];
	$video->delete($_GET['id']);
	unlink("../media/images/video/" . $image);
}
header("Location: index.php?controller=video");
exit();
?>