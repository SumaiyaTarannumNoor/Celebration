
@extends('master')

@section('content')

@include('header2')

@include('providersidebar')

<section id="wrapper">

<!-- Sidebar -->

<!-- End of Sidebar -->

<div id="content-wrapper" class="d-flex flex-column" style="margin-top:75px">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container py-4">
            <div class="row justify-content-end">
                <div class="col-md-10">
                    <div class="jumbotron">


          
<div class="container">
    
        <div class="row justify-content-end">
            <div class="col-md-12">
                <div class="card " style="margin-top:-20px">
                
                 
                   <div class="card text-white bg-dark mb-1" style="max-width: 72rem;">
                     
                         
                      <h5 class="card-header" style="background-color:#301934;color:white">Profile</h5>
                     </div>
                   

                        <div class="card bg-dark text-white">
                   
                    <div class="card-body">
                    <div style="margin-bottom:7%;">
                                        <hr>
                                    </div>
                                   
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('provider.provider.profile.update') }}" method="POST" enctype="multipart/form-data">

                                        @csrf

                                        <div class="card-body">
                                        <div class="row">
                                        <div class="col-6">
                                        <div class="form-group row">
                                            <label for="username" class="col-md-4 col-form-label text-md-right">Name</label>
                                            <div class="col-md-8">
                                                <input id="username" type="name" class="form-control" name="username" value="{{ Auth::guard('provider')->user()->username }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                            <div class="col-md-8">
                                                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::guard('provider')->user()->email }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                                            <div class="col-md-8">
                                                <input id="profile_image" type="file" class="form-control" name="profile_image">
                                                @if (Auth::guard('provider')->user()->image)
                                                    <code>{{ Auth::guard('provider')->user()->image}}</code>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-" style="color:white;background-color:#301934">Update Profile</button>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-6">
                                        <div class = "col-md-6">
                                        <div class="card-body p-1">
                                        <img style="border:6px outset silver;" src="{{ asset (Auth::guard('provider')->user()->image) }}" class="img-circle elevation-2" alt="User Image" width="220" height="220" >
                                        <h5> {{ Auth::guard('provider')->user()->username }}</h5>
                                        <p>{{ Auth::guard('provider')->user()->email }}</p>
                                        
                                        </div>
                                        </div>
                                        
                                        

                                        
                                        
                                    </form>
                                    
                                    </div>
                                    </div>
                                    </div>
                                      
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection