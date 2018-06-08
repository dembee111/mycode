<!DOCTYPE html>
<html>
 <head>
  <title>List folder from Directory - PHP filesystem with ajax jquery </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">List Folder from Directory = PHP filesystem with Ajax JQuery</h2>
   <br />
   <br />
   <div align="right">
          <button type="button"
          name="create_folder"
          id="create_folder" class="btn btn-success">Create</button>
   </div>
   <div id="folder_table" class="table-responsive">

   </div>
 </div>


 </body>
</html>
<div id="folderModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title"><span id="change_title">
                Create Folder
             </span></h4>
        </div>
        <div class="modal-body">
          <p>Enter Folder Name
            <input type="text" name="folder_name" id="folder_name" class="form-control"/>
          </p>
            <br />
            <input type="hidden" name="action" id="action" />
            <input type="hidden" name="old_name" id="old_name" />
            <input type="button" name="folder_button" id="folder_button" class="btn btn-info" value="Create"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<script>
$(document).ready(function(){

 load_folder_list();

    function load_folder_list(){
      var action = "fetch";
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{action:action},
        success:function(data){
          $('#folder_table').html(data);
        }
      });
    }
    $(document).on('click', '#create_folder', function(){
      $('#action').val('create');
      $('#folder_name').val('');
      $('#folder_button').val('Create');
      $('#old_name').val('');
      $('#change_title').text('Create Folder');
      $('#folderModal').modal('show');
    });
    $(document).on('click', '#folder_button', function(){
      var folder_name = $('#folder_name').val();
      var action = $('#action').val();
      var old_name = $('#old_name').val();
      if(folder_name != '')
      {
           $.ajax({
             url:"action.php",
             method:"POST",
             data:{folder_name:folder_name, old_name:old_name, action:action},
             success:function(data)
             {
               $('#folderModal').modal('hide');
               load_folder_list();
               alert(data);
             }
           });
      }
      else
      {

          alert("Enter Folder Name");

      }
    });
    $(document).on('click', '.update', function(){
      var folder_name = $(this).data("name");
      $('#old_name').val(folder_name);
      $('#folder_name').val(folder_name);
      $('#action').val("change");
      $('#folder_button').val("Update");
      $('#change_title').text("Change Folder Name");
      $('#folderModal').modal("show");
    });
});
</script>
