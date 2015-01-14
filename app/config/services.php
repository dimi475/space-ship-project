<?php

$di = new Phalcon\DI\FactoryDefault();

$di->set('view', function() {
	$view = new \Phalcon\Mvc\View();
	$view->setViewsDir(APP_DIR . '/views/');
	return $view;
});

$di->set('url', function() {
	$url = new \Phalcon\Mvc\Url();
	$url->setBaseUri('/github/space-ship-project/');
	return $url;
});

$di->set('router', function() {
	require APP_DIR . '/config/router.php';
	return $router;
});
