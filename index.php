<?php

//loading autoloader for libraries
require_once ('vendor/autoload.php');

//custom autoloader
spl_autoload_register('class_autoloader');

/**
 * loading all classes
 */
function class_autoloader($class) {
	$paths = array('src', 'test');
	foreach ($paths as $path){
    $pathGet = $path.'/' . $class . '.php';
		if(file_exists($pathGet)){
			include $pathGet;
		}
	}
}

//Global Constants
//define('MODEL',__DIR__.'\src');

include 'view/form.php'



?>