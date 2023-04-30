@extends('v1.admin.layouts.master')
@section('content')


    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> User management</h1>
        <p>A free and open source Bootstrap 4 admin template</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">User management</li>
        <li class="breadcrumb-item"><a href="#">Staff members</a></li>
      </ul>
    </div>
    
    
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-title-w-btn">
            <h3 class="title">All users</h3>
            <p><a class="btn btn-primary icon-btn" href="{{route('users.create')}}"><i class="fa fa-plus"></i>Add new staff member</a></p>
          </div>
         
        </div>
      </div>
      
      
      <div id="showuser"></div>


      <div id="table"></div>

    </div>
   

  

  @endsection

  <div class="clearfix"></div>