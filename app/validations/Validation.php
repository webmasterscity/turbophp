<?php

namespace app\validations;

use think\Validate;

class Validation
{
    public $response;

    public function validate($request,$rules)
    {
       $validate= new Validate();
        $this->response = $request->all();
        $validator  = $validate->check($this->response, $rules);

        if (!$validator) {
            $this->response = 
            $validate->getError();
            return false;

            
        }else{
            return true;
        }
    }    

}
