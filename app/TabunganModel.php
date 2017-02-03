<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TabunganModel extends Model
{
    protected $table = 'tb_tabungan';
    protected $fillable = ['nominal','tgl_menabung','saldo'];
}
