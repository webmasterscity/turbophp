<?php

namespace App\Controller;


class Controller
{


    public function responseOk($data = null, $message = "Success")
    {
        return json_encode([
            'success'  => true,
            'code'     => 200,
            'message'  => $message,
            'data'     => $data,
        ]);
    }

    public function responseError($data = null, $message = "Error")
    {
        return json_encode([
            'success'  => false,
            'code'     => 500,
            'message'  => $message,
            'data'     => $data,
        ]);
    }
}
