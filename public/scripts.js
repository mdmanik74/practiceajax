 $(document).ready(function() {
    $('.ourItem').each(function(){
      $(this).click(function(event){
        var text= $(this).text();
        $('#addItem').val(text);
        $('#title').text('Edit Item');
        $('#delete').show('400');
        $('#savechanage').show('400');
         $('#AddButton').hide('400');
        console.log(text);
      });
    });
     $('#addNew').click(function(event){
     	var text= $(this).text();
        $('#addItem').val('');
        $('#title').text('Add New Item');
        $('#delete').hide('400');
        $('#savechanage').hide('400');
         $('#AddButton').show('400');
        console.log(text);
  });

      $('#AddButton').click(function(){   
  console.log($('input[name=items]').val());
    $.ajax({
      url: 'create',
      type: "post",

      data: {'items':$('input[name=items]').val(), '_token': $('input[name=_token]').val(),'_method': 'POST'},
      success: function(data){
        $('input').val('');
      console.log($('input[name=items]').val());
      $("#itms").load(location.href + " #itms");
        alert(data);
       
      }
    });      
  }); 
     
 });