<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
    //Post to user relationship
    public function user(){
        return $this->belongsTo('App\User');
    }
}
