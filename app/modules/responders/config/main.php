<?php

return [
    'HelloWorldResponder' => [
        'class' => \modules\responders\responder\BaseResponder::class,
        'arguments' => [
            'HelloWorldPageView'
        ]
    ],

    'HelloWorldApiResponder' => [
        'class' => \modules\responders\responder\JsonResponder::class,
        'arguments' => [
            'HelloWorldJsonView'
        ]
    ],

    'HelloWorldCliResponder' => [
        'class' => \modules\responders\responder\BaseResponder::class,
        'arguments' => [
            'HelloWorldCliView'
        ]
    ],

    'NotFoundResponder' => [
        'class' => \modules\responders\responder\ErrorsResponder::class,
        'arguments' => [
            'NotFoundPageView',
            404
        ]
    ],

    'NotFoundCliResponder' => [
        'class' => \modules\responders\responder\ErrorsResponder::class,
        'arguments' => [
            'NotFoundCliView',
            404
        ]
    ]
];