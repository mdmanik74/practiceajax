@extends('layouts.app')
@section('content')
<div class="card-header">
 

    <div class="pull-right">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Customer</button>
    </div>
  </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Dist</th>
                <th>Regi date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>
                    <a href="" class="btn btn-sm btn-success">View</a>
                     <a href="" class="btn btn-sm btn-primary">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            
            
        </tbody>
        <tfoot>
        </tfoot>
    </table>

    <!-- Add customer modal -->
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <form action="{{route('store')}}" method="POST">
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
  <button type="submit" id="customerForm" class="btn btn-primary">Submit</button>
</div>
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button class="btn btn-danger" type="reset">Reset</button>
      </div>
    </div>
     </form>
  </div>
</div>

    @endsection