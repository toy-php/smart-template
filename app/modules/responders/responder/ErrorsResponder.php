<?php

namespace modules\responders\responder;

use core\http\Responder;
use core\http\Response;
use exceptions\Exception;
use interfaces\view\ViewInterface;
use Psr\Http\Message\ResponseInterface;

class ErrorsResponder extends Responder
{

    protected $status;

    public function __construct(ViewInterface $view, int $status)
    {
        parent::__construct($view);
        $this->status = $status;
    }

    /**
     * Сформировать и получить объект ответа
     * @param array $data
     * @return ResponseInterface
     * @throws Exception
     */
    public function response(array $data): ResponseInterface
    {
        return new Response($this->view->draw($data), $this->status);
    }
}