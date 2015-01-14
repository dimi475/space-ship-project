<?php

$router = new Phalcon\Mvc\Router(false);

// Main routes

$router->add('/', [
	'controller'	=> 'main',
	'action'		=> 'index'
])->setName('home');

$router->add('/mission', [
	'controller'	=> 'main',
	'action'		=> 'mission'
])->setName('mission');

$router->add('/organization', [
	'controller'	=> 'main',
	'action'		=> 'organization'
])->setName('organization');

$router->add('/construction', [
	'controller'	=> 'main',
	'action'		=> 'construction'
])->setName('construction');

$router->add('/commanding-spaceship', [
	'controller'	=> 'main',
	'action'		=> 'commandingSpaceship'
])->setName('commandingSpaceship');

$router->add('/about', [
	'controller'	=> 'main',
	'action'		=> 'about'
])->setName('about');


// Organization routes

$router->add('/bridge-view', [
	'controller'	=> 'organization',
	'action'		=> 'bridgeView'
])->setName('bridgeView');

$router->add('/control-centre-view', [
	'controller'	=> 'organization',
	'action'		=> 'controlCentreView'
])->setName('controlCentreView');

$router->add('/wardroom-view', [
	'controller'	=> 'organization',
	'action'		=> 'wardroomView'
])->setName('wardroomView');

$router->add('/observation-room-view', [
	'controller'	=> 'organization',
	'action'		=> 'observationRoomView'
])->setName('observationRoomView');

$router->add('/crew-cabin-view', [
	'controller'	=> 'organization',
	'action'		=> 'crewCabinView'
])->setName('crewCabinView');

$router->add('/auxiliary-compartment-view', [
	'controller'	=> 'organization',
	'action'		=> 'auxiliaryCompartmentView'
])->setName('auxiliaryCompartmentView');

$router->add('/engine-cntrol-room-view', [
	'controller'	=> 'organization',
	'action'		=> 'engineControlRoomView'
])->setName('engineControlRoomView');

