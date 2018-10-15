<?php

namespace modules\responders\responder;

use core\http\Responder;
use core\http\Response;
use exceptions\Exception;
use Psr\Http\Message\ResponseInterface;

class JsonResponder extends Responder
{

    /**
     * Сформировать и получить объект ответа
     * @param array $data
     * @return ResponseInterface
     * @throws Exception
     */
    public function response(array $data): ResponseInterface
    {
        return new Response($this->view->draw($data), 200, [
            'Content-type' => 'application/json'
        ]);
    }
}