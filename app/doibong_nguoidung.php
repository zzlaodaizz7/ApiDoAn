<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doibong_nguoidung extends Model
{
    //
    protected $table = "doibong_nguoidung";

    protected $fillable=[ 'id', 'id_doibong', 'id_nguoidung', 'id_phanquyen','trangthai'];
}
