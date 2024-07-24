<?php

namespace app\services\home;


use app\services\Service;
use app\repositories\HomeRepository;
class IndexService extends Service
{
 
    public function __invoke($data)
    {
        return HomeRepository::listar();
    }

}