<?php

return [
    'HelloWorldPageView' => [
        'class' => \modules\views\view\BaseView::class,
        'arguments' => [
            'hello-world-page'
        ]
    ],

    'HelloWorldJsonView' => [
        'class' => \modules\views\view\JsonView::class,
    ],

    'HelloWorldCliView' => [
        'class' => \modules\views\view\CliView::class,
    ],

    'NotFoundPageView' => [
        'class' => \modules\views\view\BaseView::class,
        'arguments' => [
            'not-found-page'
        ]
    ],

    'NotFoundCliView' => [
        'class' => \modules\views\view\CliView::class,
    ]
];