<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //
    protected $table = 'tb_category'; 
    protected $fillable = ['name','description'];
}
