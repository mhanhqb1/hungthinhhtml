<?php

session_start();

error_reporting(0);

ob_start();

date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once "library/Database.php";

require_once "templates/header.php";

$db = new DATABASE;

$db->connect();

$controller = '';

if(isset($_GET['controller'])){

	switch ($_GET['controller']) {

		case 'tintuc':

			require_once "templates/tintuc.php";

			break;

		case 'gioithieu':

			require_once "templates/gioithieu.php";

			break;

		case 'duan':

			require_once "templates/duan.php";

			break;

		case 'lienhe':

			require_once "templates/lienhe.php";

			break;
                case 'chitietduan':

			require_once "templates/chitietduan.php";

			break;
                case 'chitiettintuc':

			require_once "templates/chitiettintuc.php";

			break;

		default:

			require_once "templates/main.php";

			break;

	}

} else {

	require_once "templates/main.php";

}

require_once "templates/footer.php";

ob_flush();

?>