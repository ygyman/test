<?php
$config = array(
	'username' 	=> 'your_rackspac_username',
	'key' 		=> 'your_rackspace_api_key',
	'container'	=> 'your_cloudfiles_container', //must already exist
	'exclude'	=> array('.DS_Store', '.', '..'),
	'localPath' => '/my/local/path', //local prefix to your files
	'paths' 	=> array(
		'my/stuff', //public "path" in cloudfiles
		'my/other/stuff'
	)
);
?>
