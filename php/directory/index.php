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

<div id="uploadModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title"><span id="change_title">
                Upload File
             </span></h4>
        </div>
        <div class="modal-body">

            <form method="post" id="upload_form" enctype='multipart/form-data'>
              <p>Select Image
                <input type="file" name="upload_file" /></p>
                <br />
                <input type="hidden" name="hidden_folder_name" id="hidden_folder_name" />
                <input type="submit" name="upload_button" class="btn btn-info" value="Upload" />
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<div id="filelistModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title"><span id="change_title">
                File List
             </span></h4>
        </div>
        <div class="modal-body" id="file_list">

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
//---------Фолдерийг байнга харуулах хэсэг-----------------
    function load_folder_list(){
      //---хийсвэр Хувьсагч зарлаад түүндээ утга оноон ajax-н дата тохируулгад
      //--тааруулж банйа
      var action = "fetch";
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{action:action},
        success:function(data){
          //---энэ бол доорхи id -д html утгыг action.php гэсэн хуудаснаас боловсрууласан
          //--файлыг авч ашиглаж байна
          $('#folder_table').html(data);
        }
      });
    }
    //---------Фолдер үүсгэх--------------------------
    //---#create_folder гэсэн id -г дарах юм бол нөхцөлийг зааж байна
    $(document).on('click', '#create_folder', function(){
      /*---action.php хуудсанд файлыг ялгах зорилгоор "action" гэсэн
      зохиомол утга үүсгэн түүндээ "create " гэсэн утга оноож байна */
      $('#action').val('create');
      //---#folder_name гэсэн утга хоосон байна
      $('#folder_name').val('');
      //---button товчлуур утга өгсөн байна
      $('#folder_button').val('Create');
      $('#old_name').val('');
      //----гарчиг утга өгсөн байна----
      $('#change_title').text('Create Folder');
      $('#folderModal').modal('show');
    });

    //---Үүсгэх засварлах хэсэг------------------
    $(document).on('click', '#folder_button', function(){
      var folder_name = $('#folder_name').val();
      var action = $('#action').val();
      var old_name = $('#old_name').val();
      //---нөхцөл шалгаж байна хэрэв folder_name -д утга байвал ajax ажиллана
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
    //-------фолдерийн нэрийг засварлах хэсэг--------
    $(document).on('click', '.update', function(){
      var folder_name = $(this).data("name");
      $('#old_name').val(folder_name);
      $('#folder_name').val(folder_name);
      $('#action').val("change");
      $('#folder_button').val("Update");
      $('#change_title').text("Change Folder Name");
      $('#folderModal').modal("show");
    });
    //------------upload file ----------------------
    $(document).on('click', '.upload', function(){
      var folder_name = $(this).data("name");
      $('#hidden_folder_name').val(folder_name);
      $('#uploadModal').modal('show');
    });
    $('#upload_form').on('submit', function(){
        $.ajax({
          url:"upload.php",
          method:"POST",
          data:new FormData(this),
          contentType:false,
          cache:false,
          processData:false,
          success:function(data)
          {
            load_folder_list();
            alert(data);
          }
        })
    });
    //------------------ list view files modal-------------------------
    $(document).on('click','.view_files',function(){
      var folder_name = $(this).data("name");
      var action = "fetch_files";
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{action:action, folder_name:folder_name},
        success:function(data){
          $('#file_list').html(data);
          $('#filelistModal').modal('show');
        }
      });
    });
});
</script>
