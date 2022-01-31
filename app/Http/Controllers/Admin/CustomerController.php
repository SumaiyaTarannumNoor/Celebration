<?php
  
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;   
use App\Models\Customer;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;


  
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customers = Customer::where([
            ['username', '!=', Null],
            [function ($query) use ($request){
                if (($term = $request->term)){
                    $query->orWhere('username', 'LIKE', '%' . $term . '%')->get();
                }
            }]
            ])
            ->orderBy('id','DESC')
            ->paginate(10);
    
        return view('admin.customer.index',compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'email' =>'required|email|unique:customers,email',
            'password' => 'required|same:confirm-password',
        ]);
        Auth::guard('customer')->user();

        $customer = new Customer;

        $password = $request->input('password'); // Encrypting the password for security
        $hash = Hash::make($password);
        

        $customer->username      = $request->input('username');
        $customer->email     = $request->input('email');

        $customer->password  = $hash;
        $customer->save();
     
        return redirect()->route('admin.customer.index')
                        ->with('success','Customer created successfully.');

                       

    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('admin.customer.show',compact('customer'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('admin.customer.edit',compact('customer'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        Auth::guard('customer')->user();

    
        $customer->update($request->all());
    
        return redirect()->route('admin.customer.index')
                        ->with('success','Customer updated successfully');
        
                        $password = $request->input('password'); // Encrypting the password for security
                        $hash = Hash::make($password);
                
                        $customer->password  = $hash;                
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
    
        return redirect()->route('admin.customer.index')
                        ->with('success','Customer deleted successfully');
    }

    public function message(Request $request,AdminUserChat $chat)
{
    $admin = User::where('is_admin',true)->first();
    
    //This sends a message to an administrator given the admin_id and message
    $chat->sendMessageToAdministrator(Auth::id(),$admin->id,$request->message);
    
     //This sends a message to all administrators given the admin_id and message
    $chat->sendMessageToAllAdministrators(Auth::id(),$admin->id,$request->message);
    
}

private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                'username'      => 'required|string|min:3|max:191',
                'email'     => 'required|email|unique:customers|min:5|max:191',
                'password'  => 'required|string|confirmed|min:6|max:255',
            ];

            //custom validation error messages.
            $messages = [

                'email.unique' => 'Email already exists',


            ];

            //validate the request.
            $request->validate($rules,$messages);


    }
}