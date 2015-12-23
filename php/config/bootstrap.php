<?php 

function load_classes($className)
{
	$className = str_replace('\\', '/', $className);
	include  $className . '.php';
}

spl_autoload_register('load_classes');