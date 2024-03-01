<?php

namespace App\Services\Home;


use App\Services\Service;
use App\Repositories\HomeRepository;
class IndexService extends Service
{
 
    public function __invoke($data)
    {
        return HomeRepository::listar();
    }

}