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

