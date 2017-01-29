<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransacModel extends Model
{
    protected $table = "tb_transaction";
    protected $fillable = ['fk_category','tipe','nominal','transaction_date','keterangan'];
}
