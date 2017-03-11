<?php
$user = new VIDEO;
$data = $user->listAll();
require "views/video/views_list.php";
?>