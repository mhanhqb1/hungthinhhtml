<?php
if(isset($_GET['action'])){
	switch ($_GET['action']) {
		case 'list':
			require_once "controllers/video/list.php";
			break;
		case 'add':
			require_once "controllers/video/add.php";
			break;
		case 'edit':
			require_once "controllers/video/edit.php";
			break;
		case 'del':
			require_once "controllers/video/del.php";
			break;
		default:
			# code...
			break;
	}
}else{
	require_once "controllers/video/list.php";
}