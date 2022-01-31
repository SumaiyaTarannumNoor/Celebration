<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('provider.dashboard');
    }
}
