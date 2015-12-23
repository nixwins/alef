<?php

include 'config/bootstrap.php';
use core\Model;

$model = new Model();
$data = $model->getAll();

if(isset($_GET['user_data']))
{
	$user_data = strip_tags( $_GET['user_data']);
	$model->insert($user_data);
}

include "views/menu.php";
include "views/content.php";
?>
