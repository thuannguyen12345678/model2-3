<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $so_thu_nhat = $request->so_thu_nhat;
        $so_thu_hai = $request->so_thu_hai;
        $pheptinh = $request->phep_tinh;
        switch ($pheptinh) {
            case '+':
               $pheptinh= $so_thu_nhat + $so_thu_hai;
              break;
            case '-':
                $pheptinh= $so_thu_nhat - $so_thu_hai;
              break;
            case '*':
                $pheptinh= $so_thu_nhat * $so_thu_hai;
              break;
            case'/':
               if ($so_thu_hai != 0){
                $pheptinh = $so_thu_nhat / $so_thu_hai;
               }else{
                echo 'lỗi rầu bạn ơi';
               };
                break;
            default:
             
          }
          return view('pheptinh', compact(['so_thu_nhat','so_thu_hai','pheptinh']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
