@extends('layouts.app')
@section('content')
 @include('alert.msg')

 <div class="row">
    <div class="col-md-3"></div>
   <div class="col-md-6">
<div class="card-header">
   <div class="row">
    <div class="col-md-6"> Ajax to do List : Total- {{ $item->total() }}</div>
    <div class="col-md-6 text-right">
      <button class="btn btn-primary" id="addNew" data-toggle="modal" data-target="#exampleModal">+ Add </button>
    </div>
</div>
    
  </div>
<hr>
<div class="pannel-body" id="itms">
  <ul class="list-group">
    @foreach($item as $key=>$items)
  <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">{{$items->items}}</li>
  @endforeach
</ul>
<hr>
{{$item->links()}}
</div>
</div>
</div>
    <!-- Add customer modal -->
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
      @csrf
    <div class="modal-content">
      <div class="card-header" id="title">Add New Item</div>
      <div class="modal-body">
  <div class="form-group">
    <label for="exampleInputname">Item Name</label>
    <input type="text" name="items" id="addItem" required="" class="form-control" id="exampleInputname"  placeholder="Enter addItem name">
  </div>
  
    <div class="form-group">
  <button type="submit" id="AddButton" class="btn btn-primary">Submit</button>
  <button type="button" id="delete" class="btn btn-danger">Delete</button>
  <button type="button" id="savechanage"  class="btn btn-warning">Save Change</button>
</div>
      </div>
     
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
       <button class="btn btn-danger" type="reset">Reset</button>
      </div>
    </div>
    
  </div>
</div>
<script type="text/javascript">
  

</script>

<!-- view -->



    @endsection