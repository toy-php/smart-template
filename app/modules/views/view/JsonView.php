<?php

namespace modules\views\view;

use interfaces\view\ViewInterface;

class JsonView implements ViewInterface
{

    /**
     * Получение строкового представления данных
     * @param array $data
     * @return string
     */
    public function draw(array $data): string
    {
        return json_encode($data);
    }
}