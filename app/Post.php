<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //setting table name if you dont want default posts
    protected $table='posts';
    //setting primary id name other than id
    public $primaryKey='id';
    //timestamp is set true by default but if you dont want timestamp set false
    public $timestamps=true;
}
