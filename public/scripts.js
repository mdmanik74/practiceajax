(function($){
	$('#customerForm').on('submit',function(event){
		event.preventDefault();
		var form =$(this);
		var url=form.attr('action');
		var type=form.attr('method');
		var data = form.serialize();
		 
		$.ajax({
			url:url,
			data:data,
			type:type,
			dataType: 'json',
			
			success:function(data){
				if (data=="successMsg") {
					$('#exampleModal').modal('hide');
					
					
				}
			}
			
		});
	});
});


// viww
$(document).ready(function(){
 
 $(document).on('click', '#view', function(e){
  
  e.preventDefault();
  
  var uid = $(this).data('id'); // get id of clicked row
  
  $('#dynamic-content').hide(); // hide dive for loader
  $('#modal-loader').show();  // load ajax loader
  
  $.ajax({
      url: 'view',
      type: 'POST',
      data: 'id='+uid,
      dataType: 'json'
  })
  .done(function(data){
      console.log(data);
      $('#dynamic-content').hide(); // hide dynamic div
      $('#dynamic-content').show(); // show dynamic div
      $('#Fname').html(data.first_name);
      $('#phn').html(data.last_name);
      $('#email').html(data.email);
      $('#dist').html(data.position);
      $('#modal-loader').hide();    // hide ajax loader
  })
  .fail(function(){
      $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
  });
  
 });
 
});



