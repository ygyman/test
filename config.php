<?php
$config = array(
	'username' 	=> 'diamondwebserve',
	'key' 		=> '513403df7f066f87b8df89c8563d5782',
    'authUrl' => 'https://identity.api.rackspacecloud.com/v2.0',
	'container'	=> 'videos', //must already exist
	'exclude'	=> array('.DS_Store', '.', '..'),
	'localPath' => '/files', //local prefix to your files
	'paths' 	=> array(
		'my/stuff'
	)
);
?>
