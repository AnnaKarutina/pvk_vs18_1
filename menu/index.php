<?php
////tegelikult peavad olema conf.php failis
define('BASE_DIR', './'); // define('BASE_DIR', '../');
require_once(BASE_DIR.'conf.php');
//
/*echo '<pre>';
print_r($sess);
echo '</pre>';*/

$mainTmpl = new Template('main');
$mainTmpl->set('title', 'Menu Application');

$contentTmpl = new Template('content');

$mainTmpl->set('content', $contentTmpl->parse());

$mainTmplContent = $mainTmpl->parse();
echo $mainTmplContent;
