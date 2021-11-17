<?php
require_once '__autoload.php';
// $path = "/Users/yunbyeong-in/temp/pc.data";
// PhpConsole\Connector::setPostponeStorage(new PhpConsole\Storage\File($path));
$connector = PhpConsole\Connector::getInstance();
$connector->getDebugDispatcher()->detectTraceAndSource = true;
PhpConsole\Helper::register();
?>