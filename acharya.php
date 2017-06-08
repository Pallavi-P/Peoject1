<?php
	include __DIR__ . '/vendor/autoload.php';

	$log = new Monolog\Logger('name');
	$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
	$log->addWarning('Foo');
	$a = new \Acme\Foo();
	$a->aMemberFunc();



?>