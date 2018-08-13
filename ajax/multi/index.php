<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inline</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
  <h4>Muliple inline insert</h4>
<br/>
<div class="table-responsive">
   <table class="table table-bordered" id="crud_table">
     <tr>
       <th width="30%">Item Name</th>
       <th width="10%">Item code</th>
       <th width="45%">Description</th>
       <th width="10%">Price</th>
       <th width="5%"></th>
     </tr>
     <tr>
      <td contenteditable='true' class='item_name'></td>
       <td contenteditable='true' class='item_code'></td>
       <td contenteditable='true' class='item_desc'></td>
       <td contenteditable='true' class='item_price'></td>
       <td></td>
     </tr>
   </table>
       <div align="right">
         <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
       </div>

       <div align="center">
         <button type="button" name="save" id="save" class="btn btn-info btn-xs">save</button>
       </div>
       <br />
       <div id="inserted_item_data"></div>
    </div>
</div>

</body>
</html>
<script>

$(document).ready(function(){

   var count = 1;
   $('#add').click(function(){
     count = count + 1;
     var html_code = "<tr id='row"+count+"'>";
     html_code +="<td contenteditable='true' class='item_name'></td>";
     html_code += "<td contenteditable='true' class='item_code'></td>";
     html_code += "<td contenteditable='true' class='item_desc'></td>";
     html_code += "<td contenteditable='true' class='item_price'></td>";
     html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";
     html_code += "</tr>";
     $('#crud_table').append(html_code);
   });
 $(document).on('click', '.remove', function(){
   var delete_row = $(this).data("row");
   $('#' + delete_row).remove();
 });
 $('#save').click(function(){
   var item_name = [];
   var item_code = [];
   var item_desc = [];
   var item_price = [];

     $('.item_name').each(function(){

        item_name.push($(this).text());

     });

     $('.item_code').each(function(){

        item_code.push($(this).text());

     });

     $('.item_desc').each(function(){

        item_desc.push($(this).text());

     });

     $('.item_price').each(function(){

        item_price.push($(this).text());

     });
     $.ajax({
       url:"insert.php",
       method:"POST",
       data:{item_name:item_name, item_code:item_code, item_desc:item_desc, item_price:item_price},
       success:function(data)
       {
         alert(data);
         $("td[contentEditable='true']").text("");
         for(var i=2; i<=count; i++)
         {
           $('tr#'+i+'').remove();
         }
         fetch_item_data();
       }
     });

   });

   function fetch_item_data()
   {
     $.ajax({
       url:"fetch.php",
       method:"POST",
       success:function(data)
       {
         $('#inserted_item_data').html(data);
       }
     })
   }
     fetch_item_data();
});

</script>
