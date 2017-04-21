<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class D3DemoController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('d3demo',$data);
    }

}
