<?php

namespace modules\views\view;

use core\view\View;

class BaseView extends View
{

    public function __construct(string $templateName = '')
    {
        parent::__construct($templateName, __DIR__ . DIRECTORY_SEPARATOR . 'templates');
    }
}