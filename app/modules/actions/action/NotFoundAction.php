<?php

namespace modules\actions\action;

use core\http\Action;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class NotFoundAction extends Action
{

    /**
     * Handle the request and return a response.
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->responder->response(['error' => 'Not found']);
    }
}