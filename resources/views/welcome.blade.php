@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
          <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">+ Add Contact</button>
</div>
					<div class="card-header">Contact Form</div>
          
		<div class="table-responsive">
    <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contact as $key=>$contacts)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$contacts->name}}</td>
      <td>{{$contacts->phone}}</td>
      <td>{{$contacts->email}}</td>
      <td>
<button type="button" class="btn btn-success">Edit</button>
<button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
    {{$contact->links()}}
</div>

<!-- form -->

<!-- endform -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" class="form-horizontal" data-toggle="validator">
        {{csrf_field() }} {{method_field('POST') }} 
  <div class="form-group">
    <label for="exampleInputName">Full Name</label>
    <input type="text" class="form-control"  aria-describedby="nameHelp" placeholder="Enter name">
    <span class="help-block with-errors"></span>
  </div>

  <div class="form-group">
    <label for="exampleInputName">Phone</label>
    <input type="number" class="form-control" autofocus=""  aria-describedby="nameHelp" placeholder="Enter number">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- modal end -->
</div>
</div>
</div> 
    </div>

@endsection
