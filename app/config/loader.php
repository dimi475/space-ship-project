<?php

$loader = new \Phalcon\Loader();

$loader->registerDirs(
	array(
		APP_DIR . '/controllers/'
	)
);

$loader->register();
