<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoteModel extends Model
{
    protected $table = 'tb_note';
    protected $fillable = ['note_name,note_desc,fk_c_note'];
}
