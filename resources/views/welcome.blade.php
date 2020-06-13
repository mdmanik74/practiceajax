@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
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
</div>
</div>
</div> 
    </div>

@endsection
