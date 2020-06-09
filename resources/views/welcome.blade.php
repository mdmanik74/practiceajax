@extends('layouts.app')
@section('content')
 @include('alert.msg')

 <div class="row">
    <div class="col-md-3"></div>
   <div class="col-md-6">
<div class="card-header">
   <div class="row">
    <div class="col-md-6"> Ajax to do List</div>
    <div class="col-md-6 text-right">
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Add </button>
    </div>
</div>
    
  </div>

  <ul class="list-group">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
</div>
</div>
    <!-- Add customer modal -->
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <form id="customerForm"  method="POST">
      @csrf
    <div class="modal-content">
      <div class="modal-body">
  <div class="form-group">
    <label for="exampleInputname">Full Name</label>
    <input type="text" name="Fname" required="" class="form-control" id="exampleInputname"  placeholder="Enter Your Full Name">
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



    @endsection