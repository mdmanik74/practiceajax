 $(document).ready(function() {
    $('.ourItem').each(function(){
      $(this).click(function(event){
        var text= $(this).text();
        $('#addItem').val(text);
        $('#title').text('Edit Item');
        $('#delete').show('400');
        $('#savechanage').show('400');
         $('#btnhidden').hide('400');
        console.log(text);
      });
    });
     $('#addButton').click(function(event){
     	var text= $(this).text();
        $('#addItem').val('');
        $('#title').text('Add New Item');
        $('#delete').hide('400');
        $('#savechanage').hide('400');
         $('#btnhidden').show('400');
        console.log(text);
  });
     $('#addButton').click(function(event){
     	var text = $('#addItem').val();
     	$.post('list',{'text':text,'_tolen':$('input[name_token]').val()}, function(data){
     		 console.log(text);
     });
     	  });
 });