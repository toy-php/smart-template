<?php

return [

    'GET/' => 'HelloWorldAction', // test http://localhost:8000/?name=foo

    'GET/api' => 'HelloWorldApiAction', // test http://localhost:8000/api/?name=foo

    'COMMAND/hello' => 'HelloWorldCliAction', // test php app -p /hello --name foo

    'GET/.*?' => \modules\actions\action\NotFoundAction::class,
    'POST/.*?' => \modules\actions\action\NotFoundAction::class,
    'PUT/.*?' => \modules\actions\action\NotFoundAction::class,
    'PATCH/.*?' => \modules\actions\action\NotFoundAction::class,
    'DELETE/.*?' => \modules\actions\action\NotFoundAction::class,
    'OPTIONS/.*?' => \modules\actions\action\NotFoundAction::class,
    'COMMAND/.*?' => 'NotFoundCliAction',
];