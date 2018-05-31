<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
<title>Page Title</title>
<style>
table {
  font-family: arial, sans-serif;;
  border-collapse: collapse;
  width : 100%;
}
td, th {
  border:1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){
  background-color: #dddddd;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
   $(document).ready(function(){
     $("#myInput").on("keyup", function(){
       var value = $(this).val().toLowerCase();
       $('#myTable tr').filter(function(){
         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
     });
   });
</script>
</head>
<body>
<h2>Хүснэгт шүүлтүүртэй</h2>
<p>энэ бол шүүлтүүртэй хүснэгт</p>
<input id="myInput" type="text" placeholder="Хайлт...">
<br><br>
<table>
  <thead>
    <tr>
      <th>Овог </th>
      <th>Нэр </th>
      <th>Цахим хаяг</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <tr>
      <td>Батдэмбэрэл </td>
      <td>Гэгээлэн </td>
      <td>Gegeelen@yahoo.com</td>
    </tr>
    <tr>
      <td>Түмэнжаргал </td>
      <td>Ижилцэцэг </td>
      <td>ijilee@yahoo.com</td>
    </tr>
    <tr>
      <td>Мөнхдулам </td>
      <td>Батдэмбэрэл </td>
      <td>Gegeelen@yahoo.com</td>
    </tr>
    <tr>
      <td>Барсболд </td>
      <td>Билгүүдэй </td>
      <td>bilguudei@yahoo.com</td>
    </tr>

  </tbody>
</table>
</body>
</html>
