<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $table = 'todoinfo';

    protected $primaryKey = 'id';
    //

    protected $guarded = [] ;

}
