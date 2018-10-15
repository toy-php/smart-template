<?php

return [
    'HelloWorldAction' => [
        'class' => \modules\actions\action\HelloWorld::class,
        'arguments' => [
            'HelloWorldResponder'
        ]
    ],

    'HelloWorldApiAction' => [
        'class' => \modules\actions\action\HelloWorld::class,
        'arguments' => [
            'HelloWorldApiResponder'
        ]
    ],

    'HelloWorldCliAction' => [
        'class' => \modules\actions\action\HelloWorld::class,
        'arguments' => [
            'HelloWorldCliResponder'
        ]
    ],

    \modules\actions\action\NotFoundAction::class => [
        'class' => \modules\actions\action\NotFoundAction::class,
        'arguments' => [
            'NotFoundResponder'
        ]
    ],

    'NotFoundCliAction' => [
        'class' => \modules\actions\action\NotFoundAction::class,
        'arguments' => [
            'NotFoundCliResponder'
        ]
    ]
];