<!DOCTYPE html>
<html>
 <head>
  <title>Bootstrap Multi Select Dynamic Dependent Select box using PHP Ajax </title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">php - sending multiple forms data through jquery ajax</h2>
   <br />
   <br />
   <div align="right" style="margin-bottom:5px;">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
   </div>
   <form method="post" id="user_form">
        <div class="table-responsive">
             <table class="table table-striped table-bordered" id="user_data">
                  <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Details</th>
                    <th>Remove</th>
                  </tr>
             </table>
        </div>
        <div align="center">
          <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />

        </div>
   </form>
 <br />
</div>
<div id="user_dialog" title="Add Data">
  <div class="form-group">
    <label>Өөрийн нэрийг оруулна уу</label>
    <input type="text" name="first_name" id="first_name" class="form-control" />
    <span id="error_first_name" class="text-danger"></span>
   </div>


  <div class="form-group">
    <label>Овог оруулна уу</label>
    <input type="text" name="last_name" id="last_name" class="form-control" />
    <span id="error_last_name" class="text-danger"></span>
   </div>

   <div class="form-group" align="center">

     <input type="hidden" name="row_id" value="hidden_row_id" />
     <button type="button" name="save" id="save" class="btn btn-info">Хадгалах</button>

    </div>
    </div>
  <div id="action_alert" title="Action">

  </div>


 </body>
</html>
<script>
$(document).ready(function(){
var count = 0;
$('#user_dialog').dialog({
  autoOpen:false,
  width:400
});
$('#add').click(function(){
  $('#user_dialog').dialog('option','title','Мэдээлэл хүснэгтэд нэмэх');
  $('#first_name').val('');
  $('#last_name').val('');
  $('#error_first_name').text('');
  $('#error_last_name').text('');
  $('#first_name').css('bordered-color', '');
  $('#last_name').css('bordered-color', '');
  $('#save').text('Save');
  $('#user_dialog').dialog('open');
});
$('#save').click(function(){
     var error_first_name = '';
     var error_last_name = '';
     var first_name = '';
     var last_name = '';
     if($('#first_name').val() =='')
     {
       error_first_name = 'Нэрээ оруулах шаардлагатай';
       $('#error_first_name').text(error_first_name);
       $('#first_name').css('border-color', '#cc0000');
       first_name= '';
     }
     else
     {
        error_first_name = '';
        $('#error_first_name').text(error_first_name);
        $('#first_name').css('border-color', '');
        first_name = $('#first_name').val();


     }
     if($('#last_name').val()=='')
     {
        error_last_name = 'Овогоо оруулна уу';
        $('#error_last_name').text(error_last_name);
        $('#last_name').css('border-color', '#cc0000');
        last_name = '';
     }
     else {
       error_last_name = '';
       $('#error_last_name').text(error_last_name);
       $('#last_name').css('border-color', '');
       last_name = $('#last_name').val();
}
if(error_first_name != '' || error_last_name != '')
{
  return false;
}
else
{
  if($('#save').text()=='Save')
  {
     count = count +1;
     output = '<tr id="row_'+count+'">';
     output += '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value="'+first_name+'"/></td>';
     output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" class="last_name" value="'+last_name+'"/></td>';
     output += '<td><button type="button" name="view_details" class="btn btn-warinig btn-xs view_details" id="'+count+'">View</button></td>';
     output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
     output += '</tr>';


     $('#user_data').append(output);
  }
  else {
    var row_id = $('#hidden_row_id').val();
    output += '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+row_id+'" class="first_name" value="'+first_name+'"/></td>';
    output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" class="last_name" value="'+last_name+'"/></td>';
    output += '<td><button type="button" name="view_details" class="btn btn-warinig btn-xs view_details" id="'+row_id+'">View</button></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';

    $('#row_'+row_id+'').html(output);
  }
  $('#user_dialog').dialog('close');
}
});
$(document).on('click', '.view_details', function(){
  var row_id = $(this).attr("id");
  var first_name = $('#first_name'+row_id+'').val();
  var last_name = $('#last_name'+row_id+'').val();
  $('#first_name').val(first_name);
  $('#last_name').val(last_name);
  $('#save').text('Edit');
  $('#hidden_row_id').val(row_id);
  $('#user_dialog').dialog('option','title','Edit Data');
  $('#user_dialog').dialog('open');
});
$(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this row data?"))
  {
    $('#row_'+row_id+'').remove();
  }
  else{
    return false;
  }

});
$('#action_alert').dialog({
  autoOpen:false
});
$('#user_form').on('submit', function(event){
  event
  e.preventDefault();
  var count_data = 0;
  $('.first_name').each(function(){
    count_data = count_data + 1;

  });
  if(count_data > 0)
  {
     var form_data = $(this).serialize();
     $.ajax({
       url:"insert.php",
       method:"POST",
       data:form_data,
       success:function(data)
       {
         $('#user_data').find("tr:gt(0)").remove();
         $('#action_alert').html('<p>Data Inserted Successfully</p>');
         $('#action_alert').dialog('open');
       }
     })
  }
  else
  {
    $('#action_alert').html('<p>Please Add atleast one data</p>');
    $('#action_alert').dialog('open');
  }
});
});
</script>
