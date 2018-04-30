<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/test', function () {
	echo "this is test!";
});

Macaw::get('/', 'App\Controllers\Index@index');
Macaw::get('/page', 'App\Controllers\Index@page');
Macaw::get('view/(:num)', 'App\Controllers\Index@view');


Macaw::dispatch();