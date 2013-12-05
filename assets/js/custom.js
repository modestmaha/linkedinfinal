
// FUNCTION TO INSERT MAILCHIMP API
$('#frm_MC').submit(function(event) {
	event.preventDefault();
	var $form = $( this ),
  key = $form.find( 'input[name="key"]' ).val();
  list = $form.find( 'select[name="MC_lsit"]' ).val();
  
  url = $form.attr( 'action' );
  if(key == ''){
  	alert('No API key');
  }else if(list == 0){
  	alert('Select a list');
  }else{
    $form.find( ':submit' ).text('Please wait...');
    $form.find( ':submit' ).attr('disabled', 'disabled');
		$.ajax({
		  type: "POST",
		  url: url,
		  data: {key : key , list :list},
		  dataType: 'json',
		  success: function(data) {
		  	if(data == true){
		  		location = '';
		  	}else if(data == false){
          $form.find( ':submit' ).text('Submit');
          $form.find( ':submit' ).removeAttr('disabled', 'disabled');
		  		alert('Incorrect API');
		  	}
		  }
		});
	}
  return false;
});
$('#frm_MD').submit(function(event) {
  event.preventDefault();
  var $form = $( this ),
  key = $form.find( 'input[name="key"]' ).val();
  list = $form.find( 'select[name="MC_lsit"]' ).val();
  
  url = $form.attr( 'action' );
  if(key == ''){
    alert('No API key');
  }else if(list == 0){
    alert('Select a list');
  }else{
    $form.find( ':submit' ).text('Please wait...');
    $form.find( ':submit' ).attr('disabled', 'disabled');
    $.ajax({
      type: "POST",
      url: url,
      data: {key : key , list :list},
      dataType: 'json',
      success: function(data) {
        if(data == true){
          location = '';
        }else if(data == false){
         
          $form.find( ':submit' ).text('Submit');
          $form.find( ':submit' ).removeAttr('disabled', 'disabled');
          alert('Incorrect API');
        }
      }
    });
  }
  return false;
});
$('#changeMC').click(function(){
	$('.MCkeyform').show();
});
$('#closeMcFrm').click(function(){
	$('.MCkeyform').hide();
});
$('#changeMD').click(function(){
  $('.MDkeyform').show();
});
$('#closeMdFrm').click(function(){
  $('.MDkeyform').hide();
});

// Get mailchimp list

$('#get_list').click(function(){
    var key = $('#key').val();
    
    if(!key){
      alert('Enter a key first');
    }else{
      var options = $("#MClists");
      options.empty();
      $('#loading-image').show();
      $.ajax({
        url: "index.php/common/settings/getList",
        type: "post",
        data: { key: key},
        datatype: "json",
        success: function(response){
          if(response == 0){
            alert("No lists Found or Incorrect API Key");
          }else{
          for(var i = 0; i < response.length; ++i)
          {
            $.each(response[i], function(id, name){
              options.append("<option value='"+ id +"'>"+ name +"</option>");
            });
          }
          }
        },
        complete: function(){	
         $('#loading-image').hide();
       }
      });
    }
    
  });
