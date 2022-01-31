@extends('master')

@section('content')
@include('header2')
 
      
      <div class="container">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success">Search</button>
          </form>
        </div>
      </nav>
      </div>
      <br>
      <br>
      
      <div class="container-fluid" style="border-color: lightgrey;width: 95%">


        <div class="card" style="background-color:#f7f7f7; padding-bottom: 500px; padding-top:50px;padding-top:50px; padding-left:80px">
        <br>
        
        <div class="card-body">
       
          <div class="container">
      
  <div class="row align-items-start">
    <div class="col" >
        
      <div class="card" style="width: 16rem">
      <br>
  <img src="data:image/png;base64,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" class="card-img-top" alt="...">
  <br>
  <form action="/action_page.php">
    <input type="file" id="myFile" name="filename">
   
  </form>
  <br>
  <div class="card-body" style="background-color:#4f4cae">
    <h5 class="card-title" style="color:white; text-align:center" >Provider Name</h5>
  </div>
  <div class="list-group" >
                     
   
    <button type="button" class="list-group-item list-group-item-action" style="background-color:#4f4cae;color:white; text-align:center">About</button>
    <button type="button" class="list-group-item list-group-item-action" style="background-color:#4f4cae;color:white; text-align:center">Update Profile Details</button>
    <button type="button" class="list-group-item list-group-item-action" style="background-color:#4f4cae;color:white; text-align:center">Add to Gallery</button>
    <button type="button" class="list-group-item list-group-item-action" style="background-color:#4f4cae;color:white; text-align:center">My Reviews</button>
    <button type="button" class="list-group-item list-group-item-action" style="background-color:r#4f4cae;color:white; text-align:center">My Inbox</button>
   
  </div>

</div>
    </div>
<br>

    <div class="col">
        <div class="card" style="width: 16rem">
            <img src="data:image/png;base64,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" class="card-img-top" alt="...">
            <div class="card-body">
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Item Name:</li>
              <li class="list-group-item">Price:</li>
              
            </ul>
           
          </div>
          <br>
          <br>
          <div class="card" style="width: 16rem;">
            <img src="data:image/png;base64,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" class="card-img-top" alt="...">
            <div class="card-body">
           
             
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Item Name:</li>
              <li class="list-group-item">Price:</li>
        
            </ul>
            
          </div>
    </div>
    <div class="col">
        <div class="card" style="width: 16rem;">
            <img src="data:image/png;base64,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" class="card-img-top" alt="...">
            <div class="card-body">
             
             
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Item Name:</li>
              <li class="list-group-item">Price:</li>
            
            </ul>
            
          </div>
          <br>
          <br>
          <div class="card" style="width: 16rem;">
            <img src="data:image/png;base64,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" class="card-img-top" alt="...">
            <div class="card-body">
           
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Item name:</li>
              <li class="list-group-item">Price:</li>
          
            </ul>
            
          </div>
    </div>
  </div>
  </div>
</div>
        </div>
      </div>
   

