<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'fw_articles';

    public function images(){
        return $this->belongsToMany('App\Image');
    }
}
