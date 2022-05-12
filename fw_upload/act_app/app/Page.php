<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'fw_pages';

    public function articles(){
        return $this->hasMany('App\Article');
    }


}
