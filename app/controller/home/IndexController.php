<?php

namespace App\Controller\Home;

use App\Controller\Controller;
use App\Services\Home\IndexService;
use App\Validations\IndexValidation;
use support\Request;

class IndexController extends Controller
{
    public function index(Request $request, IndexValidation $indexValidation, IndexService $indexService)
    {
      
            if($indexValidation($request)) {
                return $this->responseOk($indexService($indexValidation->response));
            }
            return $this->responseError($indexValidation->response);
            

    }

}

  
