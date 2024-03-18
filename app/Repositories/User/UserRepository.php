<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Container\Container as Application;

class UserRepository extends BaseRepository implements IUserRepository
{

    public function __construct(Application $app)
    {
        parent::__construct($app);

    }

    public function model()
    {
        return User::class;
    }
}
