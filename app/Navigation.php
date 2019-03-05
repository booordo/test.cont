<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    public function parent()
    {
        return $this->hasOne('App\Navigation', 'id');   
    }

    public function children()
    {
        return $this->hasMany('App\Navigation', 'parent_id', 'id');   
    }

    public static function tree() {
        return static::with(implode('.', array_fill(0, 4, 'children')))->where('parent_id', '=', NULL)->get();
    }
}
