<?php

$wgLBFactoryConf = array(
	'class' => 'LBFactoryMulti',
	'sectionsByDB' => array(
		'allthetropeswiki' => 'c2',
		'ayrshirewiki' => 'c2',
		'bpwiki' => 'c2',
		'bgowiki' => 'c2',
		'bigforestwiki' => 'c2',
		'buswiki' => 'c2',
		'cargodb' => 'c2',
		'centralauth' => 'c2',
		'christipediawiki' => 'c2',
		'ciptamediawiki' => 'c2',
		'constwiki' => 'c2',
		'diggywikipolskawiki' => 'c2',
		'extloadwiki' => 'c2',
		'jawp2chwiki' => 'c2',
		'jayuwikiwiki' => 'c2',
		'kingkillerwiki' => 'c2',
		'librewiki' => 'c2',
		'lionhearttaleswiki' => 'c2',
		'loginwiki' => 'c2',
		'maiasongcontestwiki' => 'c2',
		'meregoswiki' => 'c2',
		'plasticssongcontestwiki' => 'c2',
		'platprojectwiki' => 'c2',
		'poserdazfreebieswiki' => 'c2',
		'sirikotwiki' => 'c2',
		'spiralwiki' => 'c2',
		'supernamuwiki' => 'c2',
		'thelonsdalebattalionwiki' => 'c2',
		'tmewiki' => 'c2',
		'vandalwiki' => 'c2',
		'wikiversitywiki' => 'c2',
		'yoavfreundwiki' => 'c2',
		'yourosongcontestwiki' => 'c2',
	),
	'sectionLoads' => array(
		'DEFAULT' => array(
			'db2' => 1,
		),
		'c1' => array(
			'db2' => 1,
		),
		'c2' => array(
			'db3' => 1,
		),
	),
	'serverTemplate' => array(
		'dbname' => $wgDBname,
		'user' => $wgDBuser,
		'password' => $wgDBpassword,
		'type' => 'mysql',
	),
	'hostsByName' => array(
		'db2' => '81.4.125.112',
		'db3' => '81.4.127.157',
	),
	'externalLoads' => array(
		'echo' => array(
			'db2' => 1, // should echo c1
		),
	),
	'readOnlyBySection' => array(
	//	'DEFAULT' => '',
	//	'c1' => 'Maintenance ongoing on the database server.',
	//	'c2' => 'To avoid data loss, this wiki is in read-only mode.',
	),
);
