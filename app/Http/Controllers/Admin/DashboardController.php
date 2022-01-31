<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class DashboardController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
    $data = Customer::orderBy('id','DESC')->paginate(5);
        return view('admin.dashboard',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

        public function destroy($id)
    {
        Customer::find($id)->delete();
        return redirect()->route('dashboard')
                        ->with('success','User deleted successfully');
    }
}

