<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\batdoi;
use Response;
class Batdois extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return batdoi::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        $batdoi = new batdoi;
        $batdoi->dangtin_id = $req->dangtin_id;
        $batdoi->doitimdoi_id = $req->doitimdoi_id;
        $batdoi->doibatdoi_id = $req->doibatdoi_id;
        $batdoi->trangthai = 0;
        if ($batdoi->save()) {
            return Response::json([
                    'type' => 'success',
                    'title' => 'Thành công!',
                    'content' => 'Bắt đối thành công!',
                ]);
        }else{
            return Response::json([
                'type' => 'error',
                'title' => 'Lỗi!',
                'content' => 'Bắt đối lỗi xin vui lòng thử lại sau!',
            ]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
