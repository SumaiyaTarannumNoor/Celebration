<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complain;


class ComplainController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $complains = Complain::orderBy('id','desc')->get();

        return view('admin.complain.show',compact('complains'));
    }
   
}
