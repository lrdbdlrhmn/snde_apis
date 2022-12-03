<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApController extends Controller
{
    /**
     * return json response global
     *
     * @param  mixed $data
     * @param  mixed $messages
     * @param  mixed $code
     * @return void
     */
    public function jsonResponse($data = null, $messages = null, $code = 200)
    {
        $array = [
            'data'  => $data,
            'message'  => $messages,
            'status'  => in_array($code, $this->codeHTTP()) ? 'ok' : 'error',
            'error'  => in_array($code, $this->codeHTTP()) ? 'ok' : 'error',
        ];
        return response($array, $code);
    }

    public function codeHTTP(): array
    {
        return ['200', '201', '202'];
    }
}
