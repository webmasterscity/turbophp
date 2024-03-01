<?php 
namespace app\validations;

class IndexValidation extends Validation{
    protected $rules = [
        //'name' => 'require|max:25',
        //'age' => 'require|number|between:1,120',
        //'email' => 'email',
    ];

    public function __invoke($request) {
        return $this->validate($request,$this->rules);      
    }
}