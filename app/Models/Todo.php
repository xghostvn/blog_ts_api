<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table ="todo";
    protected $fillable =[
        "name" ,"status", "start_time", "end_time" , "created_by" , "user_id"
    ];

    const OPEN  = 0;
    const DONE = 1;
    const FAIL = 2;

}
