(function($){
	$('#customerForm').on('submit',function(event){
		event.preventDefault();
		var form =$(this);
		var url=form.attr('action');
		var type=form.attr('method');
		var data = form.serialize();
		 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
		$.ajax({
			url:url,
			data:data,
			type:type,
			dataType: 'json',
			
			success:function(data){
				if (data=="success") {
					$('#exampleModal').modal('hide');
					
					Swal.fire('Successfully Customer Data Inserted')
				}
			}
			return false;
		});
	});
});

