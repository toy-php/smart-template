<?php

namespace modules\views\view;

use interfaces\view\ViewInterface;

class CliView implements ViewInterface
{

    /**
     * Получение строкового представления данных
     * @param array $data
     * @return string
     */
    public function draw(array $data): string
    {
        $output = '';
        foreach ($data as $key => $value) {
            $output .= $key . ': ' . $value . "\n";
        }
        return $output;
    }
}