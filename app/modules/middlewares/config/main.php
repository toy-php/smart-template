<?php

return [
    \Psr\Http\Server\MiddlewareInterface::class => [
        'class' => \modules\middlewares\middleware\ResponseMiddleware::class
    ]
];