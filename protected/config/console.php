<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
$mainConfig = require(dirname(__FILE__).DIRECTORY_SEPARATOR.'main.php');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
	// application components
	'components'=>array(
		'db'=>$mainConfig['components']['db']
	),
);