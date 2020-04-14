<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\doibong;
class Chitietdoibongs extends Controller
{
    //
    public function chitiet($id){
    	return doibong::find($id);
    }
    public function dsthanhvien($id){
    	return doibong::find($id)->member->where('trangthai',1);
    }
}
