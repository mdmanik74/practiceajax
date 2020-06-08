@extends('layouts.app')
@section('content')
 @include('alert.msg')
<div class="card-header">

    <div class="pull-right">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Customer</button>
    </div>
  </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Dist</th>
                <th>Regi date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @foreach($customers as $key=>$category)
                
            <tr>
               <td>{{$key+1}}</td>
                <td>{{$category->Fname}}</td>
                <td>{{$category->phn}}</td>
                <td>{{$category->email}}</td>
                <td>{{$category->dist}}</td>
                <td>{{ \Carbon\Carbon::parse($category->create_at)->format('d/m/Y')}}</td>
                <td>
                    <a href="{{ route('view',$category->id) }}" data-toggle="modal" data-target="#view-modal" id="view" class="btn btn-sm btn-success">View</a>
                     <a href="{{ route('edit',$category->id) }}" id="edit" class="btn btn-sm btn-primary">Edit</a>
                      <a href="" id="delete" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
        </tfoot>
    </table>
  
    <!-- Add customer modal -->
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <form id="customerForm" action="{{url('/customer')}}" method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-body">
  <div class="form-group">
    <label for="exampleInputname">Full Name</label>
    <input type="text" name="Fname" required="" class="form-control" id="exampleInputname"  placeholder="Enter Your Full Name">
  </div>
  <div class="form-group">
    <label for="exampleInputname">Phone Number</label>
    <input type="number" class="form-control" name="phn" id="exampleInputname"  placeholder="Enter Your phone Number">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  
  <div class="form-group">
    <label for="exampleInputname">Your District</label>
    <input type="text" class="form-control" name="dist" id="exampleInputname"  placeholder="Enter Your location district">
</div>
    <div class="form-group">
  <button type="submit"  class="btn btn-primary">Submit</button>
</div>
      </div>
     
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button class="btn btn-danger" type="reset">Reset</button>
      </div>
    </div>
     </form>
  </div>
</div>

<!-- view -->

<div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog"> 
      <div class="modal-content"> 
                  
         <div class="modal-header"> 
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
             <h4 class="modal-title">
             <i class="glyphicon glyphicon-user"></i> User Profile
             </h4> 
         </div> 
         
         <div class="modal-body"> 
                       
             
                       
             <div id="dynamic-content"> <!-- mysql data will load in table -->
                                        
                 <div class="row"> 
                     <div class="col-md-12"> 
                        
                     <div class="table-responsive">
                             
                     <table class="table table-striped table-bordered">
                     <tr>
                     <th>First Name</th>
                     <td id="Fname">{{$custom->Fname}}</td>
                     </tr>
                                     
                     <tr>
                     <th>Phone</th>
                     <td id="phn"></td>
                     </tr>
                                         
                     <tr>
                     <th>Email ID</th>
                     <td id="email"></td>
                     </tr>
                                         
                     <tr>
                     <th>Location</th>
                     <td id="dist"></td>
                     </tr>
                                 
                     </table>
                                
                     </div>
                                       
                   </div> 
              </div>
                       
             </div> 
                             
         </div> 
           
       <div class="modal-footer"> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
       </div>  
              
      </div> 
   </div>
</div>






    @endsection