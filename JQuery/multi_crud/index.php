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
    <label>Enter First Name</label>
    <input type="text" name="first_name" id="first_name" class="form-control" />
    <span id="error_first_name" class="text-danger"></span>
   </div>


  <div class="form-group">
    <label>Enter Last Name</label>
    <input type="text" name="last_name" id="last_name" class="form-control" />
    <span id="error_last_name" class="text-danger"></span>
   </div>

   <div class="form-group" align="center">

     <input type="hidden" name="row_id" value="hidden_row_id" />
     <button type="button" name="save" id="save" class="btn btn-info">Save</button>

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
  $('#user_dialog').dialog('option','title','Add Data');
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
       error_first_name = 'First Name is required';
       $('#error_first_name').text(error_first_name);
       $('#first_name').css('border-color', '#cc0000');
       first_name= '';
     }
     else
     {
        error_first_name = '';
        $('#error_first_name').text(error_first_name);
        $('#first_name').css('border-color', '');
        11:34 
     }
});

});
</script>
