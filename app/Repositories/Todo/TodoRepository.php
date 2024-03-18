<?php

namespace App\Repositories\Todo;

use App\Models\Todo;
use App\Repositories\BaseRepository;

class TodoRepository extends BaseRepository implements ITodoRepository
{

    public function model()
    {
        return Todo::class;
    }
}
