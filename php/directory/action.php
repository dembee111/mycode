<?php
//------------Хавтас харах------------------------

if(isset($_POST["action"]))
{
  if($_POST["action"] =="fetch")
  {
    $folder = array_filter(glob('*'), 'is_dir');
    $output = '
          <table class="table table-bordered table-striped">
          <tr>
              <th>Folder Name</th>
              <th>Total files</th>
              <th>Update</th>
              <th>Delete</th>
              <th>Upload File</th>
              <th>View Uploaded File</th>
          </tr>
    ';
    if(count($folder) > 0 )
    {
         foreach($folder as $name)
         {
           $output .= '
           <tr>
                <td>'.$name.'</td>
                <td>'.(count(scandir($name)) - 2).'</td>
                <td><button type="button" name="update"
                data-name="'.$name.'" class="update btn
                btn-warning btn-xs">Update</button></td>

                <td><button type="button" name="delete"
                data-name="'.$name.'" class="delete btn
                btn-danger btn-xs">Delete</button></td>

                <td><button type="button" name="upload"
                data-name="'.$name.'" class="upload btn
                btn-info btn-xs">Upload Files</button></td>

                <td><button type="button" name="view_files"
                data-name="'.$name.'" class="view_files btn
                btn-default btn-xs">View Files</button></td>
           </tr>
           ';
         }
    }
    else {
      $output .= '
      <tr>
           <td colspan="6">No Folder Found</td>
      </tr>
      ';

    }
    $output .= '</table>';
    echo $output;
  }
  //-----------Хавтас үүсгэх----------------------

  if($_POST["action"] == "create")
  {
    //--file_exists -функцээр шалгаад байхгүй бол үйлдэл цааш үргэлжилнэ
    if(!file_exists($_POST["folder_name"]))
    {
      //----фолдерийг үүсгэж байна mkdir комманд---
      mkdir($_POST["folder_name"], 0777, true);
      echo 'Folder Created';
    }
    else {
      echo 'Folder Already Created';
    }
  }
//-----------Хавтас нэрийг өөрчлөх засвар--------------------

  if($_POST["action"] == "change")
  {
    if(!file_exists($_POST["folder_name"]))
    {
      rename($_POST["old_name"], $_POST["folder_name"]);
      echo 'Folder Name Changed';
    }
    else{
      echo 'Folder Already Created';
    }
  }
  //----------------------Фолдерт байгаа файлыг харах--------------

  if($_POST["action"] == "fetch_files")
  {
    $file_data = scandir($_POST["folder_name"]);
    $output ='
    <table class="table table-bordered table-striped">
    <tr>
        <th>Image</th>
        <th>File Name</th>
        <th>Delete</th>
    </tr>
    ';
    foreach($file_data as $file)
    {
      if($file === '.' OR $file ==='..')
      {
        continue;

      }
      else {
        $path = $_POST["folder_name"] . '/' . $file;
        $output .= '
           <tr>
               <td>
               <img src = "'.$path.'" class="img-thumbnail" height ="50" width="50" /></td>
               <td>'.$file.'</td>
               <td><button name="remove_file" class="remove_file btn btn-danger btn-xs id="'.$path.'>Remove</button></td>
           </tr>
        ';
      }
    }
    $output .= '</table>';
    echo $output;
  }
}

?>
