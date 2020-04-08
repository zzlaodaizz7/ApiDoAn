<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ketqua extends Model
{
    //
    protected $table = "ketqua";

    protected $fillable=[ 'id', 'id_doidangtin', 'banthanga', 'id_doibatdoi', 'banthangb','hkdoidangtin','hkdoibatdoi'];
}
