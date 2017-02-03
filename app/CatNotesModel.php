<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatNotesModel extends Model
{
    protected $table = 'tb_category_notes';
    protected $fillable = ['c_name','desc'];
}
