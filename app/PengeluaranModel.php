<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengeluaranModel extends Model
{
    //
    protected $table = "tb_pengeluaran";
    protected $fillable = ['nama','tgl_pengeluaran','nominal','fk_category','keterangan'];
}
