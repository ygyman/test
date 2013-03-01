<?php

namespace OpenCloud;

ini_set('include_path', __DIR__ . '/vendor/php-opencloud/lib:'.ini_get('include_path'));

define('RAXSDK_OBJSTORE_NAME','cloudFiles');
define('RAXSDK_OBJSTORE_REGION','DFW');

require_once('config.php');
require_once('rackspace.php');
require_once('objectstore.php');

$connection = new Rackspace(
    $config['authUrl'],
    array(
        'username' => $config['username'],
        'apiKey' => $config['key']
    )
);

// create a Cloud Files (ObjectStore) connection
$ostore = $connection->ObjectStore();

// next, make a container named 'Sample'
$cont = $ostore->Container();
$cont->Create(array('name'=>$config['container']));

// finally, create an object in that container named hello.txt
/*$obj = $cont->DataObject();
$obj->SetData('Hello, World');
$obj->Create(array('name' => 'hello.txt', 'content_type' => 'text/plain'));*/

// list all the objects in the container
$list = $cont->ObjectList();
while($o = $list->Next())
    printf("Object: %s\n size: %d\n type: %s\n modified: %s\n\n",
        $o->name, $o->bytes, $o->content_type, $o->last_modified);
die('asd');