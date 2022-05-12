<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'fw_menus';

    public function pages(){
        return $this->hasMany('App\Page');
    }

}
