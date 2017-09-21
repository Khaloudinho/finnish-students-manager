<?php

namespace App\Repositories;
use App\Classes;

class ClassesRepository extends ResourceRepository
{
    public function __construct(Classes $classes)
    {
        $this->model = $classes;
    }
}