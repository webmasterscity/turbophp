<?php

namespace app\controller\home;

use app\controller\Controller;
use app\services\home\IndexService;
use app\validations\IndexValidation;
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

  
