<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $table = 'tbl_food';
    public $timestamps = false;
    public function category()
    {
        return $this->belongsTo('App\models\category', 'category_id', 'id');
    }
}
