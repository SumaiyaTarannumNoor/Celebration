<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Service;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Spatie\Searchable\Search;


class SearchController extends Controller
{   
    
   
    public function providerproductsearch(Request $request)
    {    
       $this->validate($request, [
        'query'=> 'required',
    ]);
    $search_text= $_GET['query'];
    $products= Product::where('title','LIKE', '%'.$search_text.'%')->paginate(5)->withQueryString();;
    
    Paginator::useBootstrap();
    return view('search.providersearch',compact('products'));
    }

    
    public function customersearch(Request $request)
    {    
      
       $this->validate($request, [
        'query'=> 'required',


    ]);
    $search_text= $_GET['query'];
    $products= Product::where('title','LIKE', '%'.$search_text.'%')->paginate(5)->withQueryString();
    return view('search.customersearch',compact('products'));

    }

    public function providerservicesearch(Request $request)
    {    
    
       $this->validate($request, [
        'query'=> 'required',
    ]);
    $search_text= $_GET['query'];
    $services= Service::where('name','LIKE', '%'.$search_text.'%')->paginate(5)->withQueryString();


    return view('search.providerservicesearch',compact('services'));
    }

    
    public function customerservicesearch(Request $request)
    {    
   
       $this->validate($request, [
        'searchquery'=> 'required',


    ]);
    $search_text= $_GET['searchquery'];
    $services= Service::where('name','LIKE', '%'.$search_text.'%')->paginate(5)->withQueryString();;
    return view('search.customerservicesearch',compact('services'));

    }
  }
    


