<?php

namespace App\Repositories;
use App\Follows;

class GradesRepository extends ResourceRepository
{
    public function __construct(Follows $grade)
    {
        $this->model = $grade;
    }
}