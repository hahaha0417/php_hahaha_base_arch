<?php

namespace App\Exceptions;

use Exception;

class InvalidOrderException extends Exception
{
    /**
     * 报告异常。
     *
     * @return bool|null
     */
    public function report()
    {
        //
        return false;
    }

    /**
     *渲染异常为 HTTP 响应。
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response(...);
    }
}
