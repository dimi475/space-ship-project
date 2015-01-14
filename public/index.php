<?php

try {

    define('BASE_DIR',		dirname(__DIR__));
    define('APP_DIR',		BASE_DIR . '/app');
    define('PUBLIC_DIR',	BASE_DIR . '/public');
	
	require APP_DIR . '/config/loader.php';
	require APP_DIR . '/config/services.php';

	$application = new \Phalcon\Mvc\Application($di);
	echo $application->handle()->getContent();

} catch (Exception $e) {

	echo $e->getMessage();
	
}
