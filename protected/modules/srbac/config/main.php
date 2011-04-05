<?php

return array(
	'modules' => array(
		'srbac' => array(
			'superUser' => 'admin'
		)
	),
	'components' => array(
		'authManager' => array(
			// Path to SDbAuthManager in srbac module if you want to use case insensitive
			// access checking (or CDbAuthManager for case sensitive access checking)
			'class' => 'application.modules.srbac.components.SDbAuthManager',
			// The database component used
			'connectionID' => 'db',
			// The itemTable name (default:authitem)
			'itemTable' => 'items',
			// The assignmentTable name (default:authassignment)
			'assignmentTable' => 'assignments',
			// The itemChildTable name (default:authitemchild)
			'itemChildTable' => 'itemchildren',
		),
	)
);
?>
