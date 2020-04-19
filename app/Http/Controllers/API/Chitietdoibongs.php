<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\doibong;
use App\doibong_nguoidung;
class Chitietdoibongs extends Controller
{
    //
    public function chitiet($id){
    	return doibong::find($id);
    }
    public function dsthanhvien($id){
    	return doibong::find($id)->member->where('trangthai',1);
    }
    public function list($id){
    	$a = doibong_nguoidung::where([['user_id',$id],['phanquyen_id',1]])->get();
    	echo "[";
    	$sl = $a->count();
    	$sll = 0;
    	foreach ($a as $key => $value) {
    		$sll++;
    		echo doibong::find($value->doibong_id);
    		if($sll != $sl) echo ",";
    	}
    	echo "]";
    }
}
