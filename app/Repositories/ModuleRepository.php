<?php

namespace App\Repositories;
use App\Module;

class ModuleRepository extends ResourceRepository
{
    public function __construct(Module $module)
    {
        $this->model = $module;
    }
}