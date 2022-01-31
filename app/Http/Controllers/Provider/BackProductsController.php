<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Intervention\Image\Facades\Image;

class BackProductsController extends Controller
{
    //
    public function index()
    {
        $provider=Auth::guard('provider')->user()->id;
      $products = Product::where('provider_id',$provider)->orderBy('id','desc')->get();
        return view('provider.product.allproducts')->with('products',$products);

    }
    public function create()
    {
        return view('provider.product.addproduct');
    }
    public function delete($id)
    {
    $product=Product::find($id);
    if(!is_null($product)){
        $product->delete();
    }
    session()->flash('success','Product has been deleted');
    return back();
    }



    public function edit($id)
    {
      $product = Product::find($id);
        return view('provider.product.edit')->with('product',$product);

    }

      public function store(Request $request)
      {

        $request->validate([
          'title' => 'required|max:150',
          'price' => 'required|numeric',
          'description'=>'required',
        ]);



        $product = new Product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->provider_id=Auth::guard('provider')->user()->id;

        $product->save();

        //ProductImage Model insert Image
          if($request->product_image){

                  $image = $request->product_image;
                  $final_image= Image::make($image);
                  $originalpath=public_path().'/img/';
                  $final_image->save($originalpath.time().$image->getClientOriginalName());

                  $product_image = new ProductImage;
                  $product_image->product_id = $product->id;
                  $product_image->image=time().$image->getClientOriginalName();
                  $product_image->save();

          }




          session()->flash('success','Product has been added');
          return back();
      }
      public function update(Request $request, $id)
      {

        $request->validate([
          'title' => 'required|max:150',
          'price' => 'required|numeric',

          'description'=>'required',
        ]);



        $product = Product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;


        $product->save();



          session()->flash('success','Product has been edited');
          return back();
      }
}
