<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'fw_images';
    
    public function articles(){
        return $this->belongsToMany('App\Article');
    }
}
