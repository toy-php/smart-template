<?php

namespace modules\actions\action;

use core\http\Action;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HelloWorld extends Action
{

    /**
     * Handle the request and return a response.
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $get = $request->getQueryParams();
        $name = isset($get['name']) ? $get['name'] : $request->getAttribute('name', 'know-nothing');
        $data = ['message' => 'Hello world!!! My name is ' . $name];
        return $this->responder->response($data);
    }
}